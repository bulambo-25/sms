<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="schools")
*/
class School
{
	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
   public $id;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $name;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $email;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $phone_number;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $address;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $city;
   
}