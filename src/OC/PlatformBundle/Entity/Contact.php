<?php
// src/OC/PlatformBundle/Entity/Contact.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Contact")
 */
class Contact
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
 protected $id;

  /**
   * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
 protected $user;


  /**
   * @ORM\Column(name="nom", type="string", length=255)
   */
 protected $nom;

  /**
   * @ORM\Column(name="prenom", type="string", length=255)
   */
 protected $prenom;

  /**
   * @ORM\Column(name="date", type="datetime")
   */
 protected $date;

   /**
   * @ORM\Column(name="adresse", type="string", length=255)
   */
 protected $adresse;
/**
   * @ORM\Column(name="phone", type="string", length=255)
   */
  protected $phone;

  
  public function __construct()
  {
    $this->date = new \Datetime();
  }

  public function getId()
  {
    return $this->id;
  }

  public function setnom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  public function getnom()
  {
    return $this->nom;
  }

  public function setprenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  public function getprenom()
  {
    return $this->prenom;
  }

  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setphone($phone)
  {
    $this->phone = $phone;

    return $this;
  }

  public function getphone()
  {
    return $this->phone;
  }

  public function setadresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

  public function getadresse()
  {
    return $this->adresse;
  }

   public function setUser(\OC\PlatformBundle\Entity\User $user)
    {
        $this->user = $user;
     
        return $this;
    }
 
    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}