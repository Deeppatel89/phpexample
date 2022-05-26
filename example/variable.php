 <?php
  $name = "deep"; //global variables:

  function my() {

    global $name;  //globle functin is declare with global:
      // $name = "rudra"; //local variables:
    echo "my name is inside the function:".$name;
    echo"<br>";
 }

my();
echo "my name is outside the function :".$name;
echo"<br>";


//when the global is declare then outside the function the variable not take global veriable
//?>


<?php

//static variable:
  function static_a(){
      $a = 3;    //non static variable:
      static $b =4;  // static variable:
      echo"non static ".$a ."<br>";
      echo"static ".$b ."<br>";
      $a++;  //incrimant variable:
      $b++;  //incrimant variable: 


  }

  static_a(); //first time function call

  static_a(); //second time function call
  static_a();
 
  $a = 15; 
  function show() { 
  $a = 20; 
  echo "$a"; 
  } 
  show(); 
  echo "$a"."<br>";
 print_r($a);
 print($a);


?>