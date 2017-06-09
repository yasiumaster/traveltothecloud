<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CronController extends Controller {
	
	public function readMailsAction() {
		$em = $this->get ( 'doctrine' )->getManager ();
		$req = $this->getRequest ();
		
		$users = $em->getRepository ( 'AppBundle:Users' )->findAll ();
		
		foreach ( $users as $user ) {
			
			/* connect to gmail */
			$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
			$username = $user->getEmail();
			$password = $user->getPassword();
			
			/* try to connect */
			$inbox = \imap_open ( $hostname, $username, $password ) or die ( 'Cannot connect to Gmail: ' . imap_last_error () );
			
			/* grab emails */
			$emails = imap_search ( $inbox, 'ALL' );
			
			/* if emails are returned, cycle through each... */
			if ($emails) {
				
				/* begin output var */
				$output = '';
				
				/* put the newest emails on top */
				rsort ( $emails );
				
				/* for every email... */
				foreach ( $emails as $email_number ) {
					
					/* get information specific to this email */
					//$overview = imap_fetch_overview ( $inbox, $email_number, 0 );
					$message = imap_fetchbody ( $inbox, $email_number, 2 );
					
					/* output the email header information */
					//$output .= '<div class="toggler ' . ($overview [0]->seen ? 'read' : 'unread') . '">';
					//$output .= '<span class="subject">' . $overview [0]->subject . '</span> ';
					//$output .= '<span class="from">' . $overview [0]->from . '</span>';
					//$output .= '<span class="date">on ' . $overview [0]->date . '</span>';
					//$output .= '</div>';
					
					/* output the email body */
					$output .= '<div class="body">' . $message . '</div>';
					$re = '/http:\/\/npe\.net\.pl\/app\.php\/\?unq=(([a-zA-Z0-9])*)/';
					$str = $message;
					preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);					
					if( (isset($matches[0])) && ($matches[0][1])){
						$unq = $matches[0][1];
						var_dump($unq);
						exit;
					}
				}
				
				echo $output;
			}
			
			/* close the connection */
			imap_close ( $inbox );
		}
	}
}
	
	