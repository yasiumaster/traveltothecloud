<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Classes\ResponseHelper;
class AuthController extends Controller{



	public function loginAction(){
		$idx = (isset($_COOKIE['idx'])) ? $_COOKIE['idx'] : random_int(10000000,999999999);
		setcookie('idx',$idx,time()+60*60*24*12*10);

		return $this->render('AppBundle:Auth:auth.html.twig', array(
				'idx'=>$idx
		));
	}


	public function saveDeviceTokenAction(){
		$req = $this->getRequest();
		$em =  $this->get('doctrine')->getManager();
		$token = $req->get('deviceToken');
		$user = $this->getUser();
		$user = $em->getRepository('AppBundle:Users')->findByIdx($user->getUsername());
		$user[0]->setDeviceToken($token);
		$em->flush();
		return new JsonResponse(array('error'=>0));

	}





}
