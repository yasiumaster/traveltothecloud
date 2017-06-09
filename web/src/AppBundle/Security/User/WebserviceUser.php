<?php

namespace AppBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

class WebserviceUser implements UserInterface, EquatableInterface {

	
	public function __construct($username, $password, $salt, array $roles) {
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->roles = $roles;
		return $this;
	}
	
	
	public function getRoles(){
		return $this->roles;
	}
	
	public function getLanguage(){
		return 'pl';	
	}
	
	
	public function getPassword(){
		return $this->password;
	}
	
	public function getUsername(){
		return $this->username;
	}
	
	public function getSalt(){
		return $this->salt;
	}
	
	
	public function eraseCredentials() {
		
	}
	
	public function isEqualTo(UserInterface $user) {
		
		if ($user instanceof WebserviceUser &&
				$this->password === $user->getPassword() &&
				$this->salt === $user->getSalt() &&
				$this->username === $user->getUsername()) {
					return true;
				}
				
				return false;
	}
	
}