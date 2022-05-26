<?php

//if...else condition......
   $age=31;

   if($age>30){
       echo"you drink only coffee";
   }else if($age>=11){
       echo"you drink tea";

   }else if($age<=10){
       echo"you are drink water";
   }
   echo"<br>";
   //switch case........
   $a = 12 ;
   switch($a){
       case 10:
        echo" you are drink water <br>";
        break;

       case 18:
        echo" you are drink tea <br>";
        break;

       case 30:
        echo"you drink coffee <br>";
        break;

       default:
        echo"your choice <br>  ";
        break;
   }

//while loop...

//    $x = 0;
//    while($x<10){
//        echo $x+1;
//        echo "<br>";
//        $x++;

//    }
  static $i=0;
   while($i<5){
    echo "the number is while loop: " .($i+1);
    echo"<br>";
    $i++;
}


$o=0;
do{
    echo"try number:".($o+1);
    echo"<br>";
    $o++;
    
}while($o<5);


    //for loop...
    
    for ($i=1; $i <= 5; $i++) { 
        echo"the number is for loop:".($i) ;
        echo"<br>";
    }
    //do.. while loop
    $a=1;
    do {
        echo "the number for do while loop: ". $a;
        echo"<br>";
        $a++;
    } while ($a <= 10);

   $index =0;
   do{
       echo"the index number is : ".($index+1);
       echo"<br>";
       $index++;

   }while($index<15);

   //forach......

   $arr=array("banana"=>"20","apple"=>"30","mango"=>"50");

   foreach ($arr as $x => $value) {
       echo "$x = $value <br>";
    //    echo"<br>";
       # code...
   }





























   

   


?>
