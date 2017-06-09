<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketsRepository")
 */
class Tickets
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
     * @var string
     *
     * @ORM\Column(name="unq", type="string", length=32, unique=true)
     */
    private $unq;

    /**
     * @var string
     *
     * @ORM\Column(name="ticketno", type="string", length=255)
     */
    private $ticketno;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="_long", type="float")
     */
    private $long;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="friend", type="integer")
     */
    private $friend;
    
    /**
     * @var int
     *
     * @ORM\Column(name="vdate", type="datetime")
     */
    private $vdate;
    
    


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
     * Set unq
     *
     * @param string $unq
     * @return Tikets
     */
    public function setUnq($unq)
    {
        $this->unq = $unq;
    
        return $this;
    }

    /**
     * Get unq
     *
     * @return string 
     */
    public function getUnq()
    {
        return $this->unq;
    }

    /**
     * Set ticketno
     *
     * @param string $ticketno
     * @return Tikets
     */
    public function setTicketno($ticketno)
    {
        $this->ticketno = $ticketno;
    
        return $this;
    }

    /**
     * Get ticketno
     *
     * @return string 
     */
    public function getTicketno()
    {
        return $this->ticketno;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Tikets
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
     * Set name
     *
     * @param string $name
     * @return Tikets
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Tikets
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set long
     *
     * @param float $long
     * @return Tikets
     */
    public function setLong($long)
    {
        $this->long = $long;
    
        return $this;
    }

    /**
     * Get long
     *
     * @return float 
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Tikets
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set friend
     *
     * @param integer $friend
     * @return Tikets
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;
    
        return $this;
    }

    /**
     * Get friend
     *
     * @return integer 
     */
    public function getFriend()
    {
        return $this->friend;
    }
    
    
    /**
     * Get vdate
     *
     * @return integer
     */
    public function getVdate()
    {
    	return $this->vdate;
    }
    
    
    /**
     * Set vdate
     *
     * @return Tikets
     */
    public function setVdate($vdate)
    {
    	$this->vdate= $vdate;
    	
    	return $this;
    }
    
    
}
