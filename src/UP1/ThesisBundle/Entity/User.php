<?php

namespace UP1\ThesisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userFirstName;

    /**
     * @var string
     */
    private $userLastName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subscriptionEvent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subscriptionEvent = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     * @return User
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string 
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set userFirstName
     *
     * @param string $userFirstName
     * @return User
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    /**
     * Get userFirstName
     *
     * @return string 
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * Set userLastName
     *
     * @param string $userLastName
     * @return User
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    /**
     * Get userLastName
     *
     * @return string 
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add subscriptionEvent
     *
     * @param \UP1\ThesisBundle\Entity\Event $subscriptionEvent
     * @return User
     */
    public function addSubscriptionEvent(\UP1\ThesisBundle\Entity\Event $subscriptionEvent)
    {
        $this->subscriptionEvent[] = $subscriptionEvent;
        //$subscriptionEvent->addSubscriptionUser($this);
        return $this;
    }

    /**
     * Remove subscriptionEvent
     *
     * @param \UP1\ThesisBundle\Entity\Event $subscriptionEvent
     */
    public function removeSubscriptionEvent(\UP1\ThesisBundle\Entity\Event $subscriptionEvent)
    {
        $this->subscriptionEvent->removeElement($subscriptionEvent);
    }

    /**
     * Get subscriptionEvent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptionEvent()
    {
        return $this->subscriptionEvent;
    }
    
    public function __toString()
    {
        return $this->getUserLogin();
    }
}
