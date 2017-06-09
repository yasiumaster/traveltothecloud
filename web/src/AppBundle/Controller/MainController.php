<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Classes\UserHelper;

class MainController extends Controller{


	public function before(){

		$user = $this->getUser();
		$em = $this->get('doctrine')->getManager();
		$us = UserHelper::isSetuped($user, $em);
		if($us<5){
			$html = $this->renderView(
					'AppBundle:Reg:index.html.twig', []
					);
			return new Response($html, 200, array('Content-Type' => 'text/html'));
		}
		return false;
	}

	public function indexAction(){



		$html = $this->renderView(
      		'AppBundle:Main:index.html.twig', []
    	);
    	return new Response($html, 200, array('Content-Type' => 'text/html'));
	}


	public function invAction(){
		if($resp = $this->before()){
			return $resp;
		}

		$user = $this->getUser();
		$em = $this->get('doctrine')->getManager();
		$req = $this->getRequest();

		$ticket = $em->getRepository('AppBundle:Tickets')
		->findByUnq($req->get('unq'));

		if(!$ticket){
			return new JsonResponse(array('error'=>1,'desc'=>'ticket not vaild'));
		}else{

			$ticket[0]->setUserid($this->getUser()->getUsername());
			$em->flush();
		}
		$html = $this->renderView(
				'AppBundle:Main:index.html.twig', [
						'dataInv' => $ticket[0],
						'step'	=> 0,
				]
				);
		return new Response($html, 200, array('Content-Type' => 'text/html'));
	}


}
