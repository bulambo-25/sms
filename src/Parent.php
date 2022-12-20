<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="Parent")
*/
class Parent
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
   /** @ORM\OneToOne(
    * targetEntity="sms\src\Student", 
    * inversedBy="lessons*removethis : name of the variable in Student.php*")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * */
   public $student_Id; 
   /** @ORM\OneToOne(
    * targetEntity="sms\src\Teacher", 
    * inversedBy="lessons*removethis : name of the variable in Teacher.php*")
    * @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
    * */
   public $teacher_Id; 
}
