<?php
namespace AppBundle\Classes;



class UserHelper {
	
	public static function isSetuped($user,$em){
		$user = $em->getRepository('AppBundle:Users')->findByIdx($user->getUsername());
		
		if(!$user){
			return 0;
		}
		
		if(empty($user[0]->getFirstname())){ return 1; };
		if(empty($user[0]->getLastname())){ return 2; };
		if(empty($user[0]->getAddress())){ return 3; };
		if(($user[0]->getDisibility() == 0)){ return 4; };
		
		if(empty($user[0]->getEmail())){ return 5; };
		if(empty($user[0]->getPassword())){ return 6; };		
		return 10;
	}
	
}