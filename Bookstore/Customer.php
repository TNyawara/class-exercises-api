<?php

namespace Bookstore\Domain;
class Customer {
   private $id;
   private $firstname;
   private  $surname;
   private $email;
   private static $lastId=0;

   public function __construct(
     int $id,
     string $firstname,
     string $surname,
     string $email
   )
   {
     if ($id == null){
       $this->id=++self::$lastId;
     }else {
       $this->id=$id;
       if($id>self::$lastId){
         self::$lastId=$id;
        //We use self and not this because it is not tied to any instance but to the class itself
       }
     }
     $this->$id=$id;
     $this->$firstname=$firstname;
     $this->$surname=$surname;
     $this->$email=$email;
   }
  //Encapsulation
  public function getId():id{
    return $this->$id;
  }
  public function getFirstname():string{
    return $this->$firstname;
  }
  public function getSurname():string{
    return $this->$surname;
  }
  public function getEmail():string{
    return $this->$email;
  }
  public function setEmail(string $email){
    return $this->$email = $email;
  }
  public static function getLastId():int{
    return self::$lastId;
  }
}
$customer1= new Customer(3,'John','Doe','johndoe@email.com');
$customer2= new Customer(null,'Mary','Poppins','mp@mail.com');
$customer3 =new Customer(7.'James','Bond','007@mail.com');

Customer::getLastId();
$customer1::getLastId();
