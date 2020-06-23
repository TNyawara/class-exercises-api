<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';
$book1 = new Book ("1984","George Orwell",9785267006323,12);
$book2 = new Book ("1111", "Harper Lee", 9780061120084,2);

$customer1 = new Customer(1,'John', 'Doe','johndoe@mail.com');
$customer2 = new Customer(2,'Mary', 'Poppins','mp@mail.com');

$book1 =2;//OK
$customer1->id=3;//Error Cannot access private property Customer::$id in


/**
The properties of the Book class' objects are public, and
therefore, editable from outside. But when trying to change a value from Customer,
PHP complains, as its properties are private.
*/
