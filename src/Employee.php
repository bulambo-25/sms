<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="employees")
*/
class Employee
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
   public $middle_name;
   /**
    * @ORM\Column(type="string", nullable=true)
    */
   public $last_name;
   /**
    * @ORM\Column(type="date", nullable=false)
    */
   public $date_of_birth;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $gender;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $email;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
    public $password;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $position;  
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $phone_number; 
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $address_name;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $Address_number;
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $suburb;
   /**
    * @ORM\Column(type="date", nullable=false)
    */
   public $city; 
}
