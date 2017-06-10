<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idx", type="integer")
     */
    private $idx;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="disibility", type="integer")
     */
    private $disibility;

    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="deviceToken", type="string", length=255)
     */
    private $deviceToken;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idx
     *
     * @param integer $idx
     * @return Users
     */
    public function setIdx($idx)
    {
        $this->idx = $idx;
    
        return $this;
    }

    /**
     * Get idx
     *
     * @return integer 
     */
    public function getIdx()
    {
        return $this->idx;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set disibility
     *
     * @param integer $disibility
     * @return Users
     */
    public function setDisibility($disibility)
    {
        $this->disibility = $disibility;
    
        return $this;
    }

    /**
     * Get disibility
     *
     * @return integer 
     */
    public function getDisibility()
    {
        return $this->disibility;
    }
    
    
    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
    	$this->email = $email;
    	
    	return $this;
    }
    
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
    	return $this->email;
    }
    
    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
    	$this->password = $password;
    	
    	return $this;
    }
    
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
    	return $this->password;
    }
    
    
    
    /**
     * Set deviceToken
     *
     * @param string $password
     * @return Users
     */
    public function setDeviceToken($deviceToken)
    {
    	$this->deviceToken= $deviceToken;
    	
    	return $this;
    }
    
    /**
     * Get deviceToken
     *
     * @return string
     */
    public function getDeviceToken()
    {
    	return $this->deviceToken;
    }
    
}
