<?php

namespace AppBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Edrone\V2Bundle\Classes\CustomOptions;
use Symfony\Component\HttpFoundation\RequestStack;

class WebserviceUserProvider implements UserProviderInterface {
	
	private $impersonationSessionId = null;
	private $container = null;
	
	public function __construct() {
		
		global $kernel;
		$this->impersonationSessionId = ($kernel->getContainer()->get('session')->get('impersonationSessionId'));
		$this->container = $kernel->getContainer();
	}
	
	public function loadUserByUsername($username) {
		
		
			if(!isset($_COOKIE['idx'])){
				$username = $_POST['_username'];
				$password = sha1($_POST['_password']);
			}else{
				$username = $_COOKIE['idx'];
				$password = sha1($_COOKIE['idx']);
			}
		
			
			$salt = '';
			$roles = ['ROLE_USER'];
			
			$ru = new WebserviceUser($username, $password, $salt, $roles);
			return $ru;
			echo 'no';
			exit;
			
			
			
			throw new UsernameNotFoundException(
					sprintf('Username "%s" is not allowed to access from this location.', $username)
					);

		
		throw new UsernameNotFoundException(
				sprintf('Username "%s" does not exist.', $username)
				);
	}
	
	public function refreshUser(UserInterface $user) {
		if (!$user instanceof WebserviceUser) {
			throw new UnsupportedUserException(
					sprintf('Instances of "%s" are not supported.', get_class($user))
					);
		}
		
		return $this->loadUserByUsername($user->getUsername());
	}
	
	public function supportsClass($class) {
		return $class === 'Edrone\V2Bundle\Security\User\WebserviceUser';
	}
	
}