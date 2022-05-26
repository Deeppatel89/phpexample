<?php
//echo"hello world";
//varibales
$name="deep";
$a=200;

echo $a;
echo"<br>";

echo "my name is " . $name. "<br>"."i have a ".$a;
echo"<br>";
?>


<?php

//datatype:


//STRING:

$name="deep";
echo"<br>";

echo "$name";
echo"<br>";

echo var_dump($name);
echo"<br>";


//integer:

$a=1235;

echo var_dump($a);
echo"<br>";

//float:

$b=12.3;

echo var_dump($b);
echo"<br>";

//boolean:

$x=true;
$z=false;

echo var_dump($x);
echo"<br>";

echo var_dump($z);
echo"<br>";

// array

$player = array("player1","player2","player3","player4");
echo "<pre>";
echo var_dump($player);
echo"<br>";

echo var_dump($player[0]);
echo"<br>";

echo var_dump($player[1]);
echo"<br>";

echo var_dump($player[2]);
echo"<br>";

echo var_dump($player[3]);
echo"<br>";

echo var_dump($player[0]);
echo"<br>";

//null:
$name=null;
echo var_dump($name);

//string:

$name= "helloooo today is a good day";
echo"<br>";

echo $name;
echo"<br>";

echo strlen($name); 
echo"<br>";

echo str_word_count($name);
echo"<br>";

echo strrev($name);
echo"<br>";

echo strpos($name,"is");
echo"<br>";

echo str_replace("helloooo","hello",$name);
echo"<br>";

echo str_repeat($name,3);
echo"<br>";

echo"<pre>";

   echo rtrim("    this is     ");
   echo"<br>";

   echo ltrim("     this is        jhjilhlhkhh");
   echo"</pre>";

   $abc="hello world";
    $xyz = array("deep","patel");

    $x=explode(" ",$abc);
    print_r($x);

   echo implode(" ",$x)."<br>"; 

    echo "==========================================================="  ."<br>";
    $pass = "Deep@123";

    echo md5($pass)."<br>";
    echo sha1($pass)."<br>";
    echo "===========================bin2hex==========================<br>";
    $hex = bin2hex($pass)."<br>";
     echo $hex;
    echo "===========================hex2bin==========================<br>";
    $hax = 0101010101111010101;
    echo hex2bin($hax)."<br>";
    echo "===========================hex2bin==========================<br>";

   echo trim($abc,"hd")."<br><br>";

   echo ltrim($abc,"hell")."<br><br>";

   echo rtrim($abc,"ld")."<br><br>";
   echo "===========================strstr==========================<br>";

 echo  strstr($abc,"w")."<br><br>";
 echo "===========================substr==========================<br>";
 echo  substr($abc,7,10)."<br><br>";
 echo "===========================str_split==========================<br>";
 print_r (str_split($abc,1));
?>
