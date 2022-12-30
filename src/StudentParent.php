<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="student_parents")
*/
class StudentParent
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
   public $relationship;
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
   public $phone_number; 
   /**
    * @ORM\Column(type="string", nullable=false)
    */
   public $address_name;
   /**
    * @ORM\ManyToOne(targetEntity="Student", fetch="EAGER")
    * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
   public $student; 
}
