<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @var int
     *
     * @ORM\Column(name="event_type", type="integer")
     */
    private $eventType;

    /**
     * @var int
     *
     * @ORM\Column(name="exec", type="integer")
     */
    private $exec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;


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
     * @return Events
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
     * Set eventType
     *
     * @param integer $eventType
     * @return Events
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    
        return $this;
    }

    /**
     * Get eventType
     *
     * @return integer 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set exec
     *
     * @param integer $exec
     * @return Events
     */
    public function setExec($exec)
    {
        $this->exec = $exec;
    
        return $this;
    }

    /**
     * Get exec
     *
     * @return integer 
     */
    public function getExec()
    {
        return $this->exec;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Events
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
