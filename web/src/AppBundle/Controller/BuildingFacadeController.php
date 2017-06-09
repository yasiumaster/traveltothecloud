<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Classes\UserHelper;

class BuildingFacadeController extends Controller{




	public function indexAction(){

		$html = $this->renderView(
      		'AppBundle:Main:facade.html.twig', []
    	);
    	return new Response($html, 200, array('Content-Type' => 'text/html'));
	}





}
