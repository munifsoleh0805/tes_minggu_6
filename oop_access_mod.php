<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */


class Nama{

    //PROPERTIES
    public $name;
    private $address;

    //METHOD
    public function name()
    {
        echo "\nStudent nama";
    }

    // STATIC METHOD
    public static function names()
    {
        echo "\nStatic Methods\n";
    }

    //SETTERS
    public function setAddress($address)
    {
        $this->address=$address;
    }

    //GETTERS
    public function getAddress()
    {
        return $this->address;
    }
}


$student=new Nama();// INSTANTIATED CLASS

$student->name();// INVOKE METHOD

// INVOKE STATIC METHOD

Nama::names();

// INVOKE SETTERS & GETTERS

$student->setAddress("Wonocoyo,Kaliangkrik,Magelang"); // set

echo $student->getAddress();  //get