<?php

namespace AppBundle\Classes;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController;
use Edrone\V2Bundle\Classes\MenuHelper;

class KernelControlerEvent {
	
	public function onKernelController(FilterControllerEvent $event) {
		
		//Menu generation
		//SetLocal
		$controller = $event->getController();
		if ((isset($controller[0])) && (!($controller[0] instanceof ProfilerController)) && (!($controller[0] instanceof ExceptionController))) {
			
			
			/*if(method_exists($controller[0], 'before')){
				$data = call_user_func(array($controller[0],'before'));
				if($data){
					exit;
					return $data;
				}
			}*/
			
			
			if (method_exists($controller[0], "getUser")) {
				$user = $controller[0]->getUser();
				if ($user !== null) {
					$temp = $_SERVER["HTTP_HOST"];
					if (strpos($temp, 'demo-control') !== false) {
						$request = $event->getRequest();
						$session = $request->getSession();
						if (isset($_GET['lang'])) {
							if ($_GET['lang'] == 'pl') {
								$session->set('lang', 'pl');
							} else {
								$session->set('lang', 'en');
							}
						}
						if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
							$find_lang = 'en';
						}else{
							$find_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
						}
						
						$lang = ($session->get('lang') !== null) ? $session->get('lang') : $find_lang;
						$session->set('lang', $lang);
						$controller[0]->get('translator')->setLocale($lang);
					} else {
						$controller[0]->get('translator')->setLocale($user->getLanguage());
					}
				}
			}
		}
	}
	
}