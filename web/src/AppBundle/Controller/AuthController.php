<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller{
	
	
	
	public function loginAction(){
		$idx = (isset($_COOKIE['idx'])) ? $_COOKIE['idx'] : random_int(10000000,999999999);
		setcookie('idx',$idx,time()+60*60*24*12*10);
		
		return $this->render('AppBundle:Auth:auth.html.twig', array(
				'idx'=>$idx
		));
	}	
	
}