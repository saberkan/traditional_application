<?php

namespace UP1\ThesisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var string
     */
    private $eventTitle;

    /**
     * @var string
     */
    private $eventDescription;

    /**
     * @var string
     */
    private $eventImageLink;

    /**
     * @var \DateTime
     */
    private $eventDate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \UP1\ThesisBundle\Entity\User
     */
    private $eventCreator;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subscriptionUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subscriptionUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set eventTitle
     *
     * @param string $eventTitle
     * @return Event
     */
    public function setEventTitle($eventTitle)
    {
        $this->eventTitle = $eventTitle;

        return $this;
    }

    /**
     * Get eventTitle
     *
     * @return string 
     */
    public function getEventTitle()
    {
        return $this->eventTitle;
    }

    /**
     * Set eventDescription
     *
     * @param string $eventDescription
     * @return Event
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string 
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Set eventImageLink
     *
     * @param string $eventImageLink
     * @return Event
     */
    public function setEventImageLink($eventImageLink)
    {
        $this->eventImageLink = $eventImageLink;

        return $this;
    }

    /**
     * Get eventImageLink
     *
     * @return string 
     */
    public function getEventImageLink()
    {
        return $this->eventImageLink;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return Event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

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
     * Set eventCreator
     *
     * @param \UP1\ThesisBundle\Entity\User $eventCreator
     * @return Event
     */
    public function setEventCreator(\UP1\ThesisBundle\Entity\User $eventCreator = null)
    {
        $this->eventCreator = $eventCreator;

        return $this;
    }

    /**
     * Get eventCreator
     *
     * @return \UP1\ThesisBundle\Entity\User 
     */
    public function getEventCreator()
    {
        return $this->eventCreator;
    }

    /**
     * Add subscriptionUser
     *
     * @param \UP1\ThesisBundle\Entity\User $subscriptionUser
     * @return Event
     */
    public function addSubscriptionUser(\UP1\ThesisBundle\Entity\User $subscriptionUser)
    {
        $this->subscriptionUser[] = $subscriptionUser;
        return $this;
    }

    /**
     * Remove subscriptionUser
     *
     * @param \UP1\ThesisBundle\Entity\User $subscriptionUser
     */
    public function removeSubscriptionUser(\UP1\ThesisBundle\Entity\User $subscriptionUser)
    {
        $this->subscriptionUser->removeElement($subscriptionUser);
    }

    /**
     * Get subscriptionUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptionUser()
    {
        return $this->subscriptionUser;
    }
    
    public function __toString()
    {
        return $this->getEventTitle();
    }
}
