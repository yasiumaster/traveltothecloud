<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller{
	
	public function indexAction(){
		return new JsonResponse(array('ok'=>true));
	}
	
	
}