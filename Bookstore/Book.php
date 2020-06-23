<<?php

namespace Bookstore\Domain;
class Book{

  public $isbn;
  public $title;
  public $author;
  public $available;

  //Constructors
/*  public function __construct(int $isbn, string $title, string $author, int $available){
    $this->isbn=$isbn;
    $this->title=$title;
    $this->author=$author;
    $this->available=$available;
  }*/
     /**
     OR
     */

     //Constructors are on ofthe magic Methods
  public function __construct(
    int $isbn,
    string $title,
    string $author,
    int $available=0
  ){
    $this->isbn=$isbn;
    $this->title=$title;
    $this->author=$author;
    $this->available=$available;
  }
  //Encapsulation
  public function getIsbn():int{
    return $this->isbn;
  }
  public function getTitle():string{
    return $this->title;
  }
  public function getAuthor():string{
    return $this->author;
  }
  public function isAvailable():bool{
    return $this->available;
  }
  //Methods
public function getPrintableTitle():string{
   $result='<i>'.$this->$title.'</i> -'.$this->author;
   if(!$this->available){
     $result.='<b>Not available</b>';
   }
   return $result;
 }

//Magic Method __toString
 /**public function __toString(){
   $result='<i>'.$this->$title.'</i> -'.$this->author;
   if(!$this->available){
     $result.='<b>Not available</b>';
   }
   return $result;
 }
 */
 public function getCopy():bool{
   if($this->available<1){
     return false;
   }else{
     $this->available--;
     return true;
   }
 }
 public function addCopy(){
   $this->available++;
 }
}


/*$book= new Book();
$book->title="1984";
$book->author = "George Orwell";
$book->isbn=9785267006323;
$book->available=12;
//$book->available= true;
//var_dump($book);
*/

$book =new Book("1984", "George Orwell",9785267006323,12);
$book1 =new Book("1984", "George Orwell",9785267006323,12);
$book2 =new Book("1984", "George Orwell",9785267006323);


/**$book =new Book("1234", "title","author");#For __toString Magic method
$string = (string) $book;//title-author Not available
var_dump($book);
*/

var_dump($book1);
var_dump($book2);


//Calling the get copy method
if ($book->getCopy()){
  echo "Here,Your copy";
}else {
  echo "I am afraid that book is not available";
}


#Creating mUltiple instances of an object and assigning values to their properties,nooverride
/**$book1=new Book();
$book1->title="1984";
$book2 =new Book();
$book2->title="To Kill a Mockingbird";
var_dump($book1,$book2);
*/
