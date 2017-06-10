<?php
namespace AppBundle\Classes;



class ResponseHelper {
	
	public static function ApiErrorFields(){
		return array('error'=>1,'desc'=>'Wrong fields');		
	}
	
	
	public static function ApiCreateInv($unq){
		return array('error'=>0,'link'=>'http://127.0.0.1/app.php/inv?unq='.$unq);
	}
	
}