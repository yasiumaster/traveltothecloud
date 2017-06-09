<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Classes\ResponseHelper;
use AppBundle\Entity\Tickets;

class ApiController extends Controller{
	
	
	public function createInvAction(){
		
		$em = $this->get('doctrine')->getManager();
		$req = $this->getRequest();
		
		$ticketno = $req->get('ticketno');
		$adress   = $req->get('address');
		$name     = $req->get('name');
		$lat 	  = $req->get('lat');
		$long	  = $req->get('long');
		$ff		  = $req->get('ff');
		$date     = $req->get('date');
		
		if( 	($ticketno == null) ||
				($adress== null) ||
				($name== null) ||
				($lat== null) ||
				($long== null) ||
				($ff== null) ){
			return new JsonResponse(ResponseHelper::ApiErrorFields());
		
		}
		$unq = md5(random_int(10000000, 99999999));
		
		$ticket = new Tickets();
		$ticket->setAddress($adress);
		$ticket->setTicketno($ticketno);
		$ticket->setName($name);
		$ticket->setLat($lat);
		$ticket->setLong($long);
		$ticket->setFriend($ff);
		$ticket->setVdate($date);
		$em->persist($ticket);
		$em->flush();
		return new JsonResponse(ApiCreateInv($unq));
	}
	
	
}

