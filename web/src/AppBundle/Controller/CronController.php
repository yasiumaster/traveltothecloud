<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Events;

class CronController extends Controller {
	public function readMailsAction() {
		$em = $this->get ( 'doctrine' )->getManager ();
		$req = $this->getRequest ();
		
		$users = $em->getRepository ( 'AppBundle:Users' )->findAll ();
		
		foreach ( $users as $user ) {
			
			/* connect to gmail */
			$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
			$username = $user->getEmail ();
			$password = $user->getPassword ();
			
			/* try to connect */
			$inbox = \imap_open ( $hostname, $username, $password ) or die ( 'Cannot connect to Gmail: ' . imap_last_error () );
			
			/* grab emails */
			$emails = imap_search ( $inbox, 'ALL' );
			
			/* if emails are returned, cycle through each... */
			if ($emails) {
				
				
				$output = '';
				
				
				rsort ( $emails );
				
				
				foreach ( $emails as $email_number ) {
					
					
					$message = strip_tags ( imap_fetchbody ( $inbox, $email_number, 2 ) );
					
					$output .= '<div class="body">' . $message . '</div>';
					$re = '/http:\/\/127\.0\.0\.1\/app\.php\/\?unq=(([a-zA-Z0-9])*)/';
					$str = $message;
					preg_match_all ( $re, $str, $matches, PREG_SET_ORDER, 0 );
					
					if ((isset ( $matches [0] )) && ($matches [0] [1])) {
						$unq = $matches [0] [1];
						var_dump('kl');
						$li = $em->getRepository ( 'AppBundle:Events' )->findByLink($unq);
						var_dump(count($li));
						if(count($li) == 0){
							$curl = curl_init();
							
							curl_setopt_array($curl, array(
									CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
									CURLOPT_RETURNTRANSFER => true,
									CURLOPT_ENCODING => "",
									CURLOPT_MAXREDIRS => 10,
									CURLOPT_TIMEOUT => 30,
									CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									CURLOPT_CUSTOMREQUEST => "POST",
									CURLOPT_POSTFIELDS => "{\n    \"notification\":{\n      \"title\": \"New event recived\",\n      \"body\": \"Message content body\",\n      \"icon\": \"https://d3vhsxl1pwzf0p.cloudfront.net/images/v2/faces/2.jpg\",\n      \"click_action\": \"http://127.0.0.1/traveltothecloud/web/web/inv?=".$unq."\"\n    },\n    \"to\" : \"".($user->getDeviceToken())."\"\n}",
									CURLOPT_HTTPHEADER => array(
											"authorization: key=AIzaSyBRIpoy5XfGdwvAtBIUlG_vqUxMmxzb0c0",
											"cache-control: no-cache",
											"content-type: application/json",
											"postman-token: 53b7fc4a-b95a-8c58-8de8-6bf2a7bae05a"
									),
							));
							
							$response = curl_exec($curl);
							$err = curl_error($curl);
							
							curl_close($curl);
							
							
								echo $response;
							
							$event = new Events();
							$event->setDate(new \DateTime("now"));
							$event->setLink($unq);
							$event->setRuned(1);
							$event->setUserid($user->getIdx());
							$event->setTitle('Inv');
							$em->persist($event);
							$em->flush();
						}
					}
				}
				
				// echo $output;
			}
			
			/* close the connection */
			imap_close ( $inbox );
			
		}
	}
}
	
	