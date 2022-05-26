<?php

//if...else example..////


$age=25;
if ($age>60) {
    echo"you are not drive a car";
    # code...
}elseif ($age>18) {
    echo"you are drive a car";
    # code...
}else {
    echo" you have no licience";
}
echo"<br>";

//while loop example..///

$i=0;
while ($i < 10) {
    echo"while loop number: ".($i+1);
    echo"<br>";
    $i++;

    # code...
}
echo"<br>";

//for loop example...//

$i=0;
for ($i=0; $i <10; $i++){ 
 echo"for loop number: ".($i+1);
 echo"<br>";
}
echo"<br>";

//do....while loop example...//

$j=0;
do {
    echo"do while loop number: ".($j);
    echo"<br>";
    # code...
    $j++;
} while ($j < 10);
echo"<br>";

//foreach loop example...//

$arr=array("banana"=>"20","apple"=>"30","mango"=>"50");

foreach ($arr as $x => $value) {
    echo"foreach ". "$x = $value";
    echo"<br>";
    # code...
}
echo"<br>";

//brake statement..//
   for ($i=0; $i <10; $i++) { 
       if($i == 9){
           
           break;

       } 
           echo"the number is:: " .($i+1);
           echo"<br>";
       }    # code...
//continue statement..//

for ($i=0; $i < 10; $i++) { 
    if($i == 3){
        continue;
    }
    echo"the number is ".($i+1);
    echo"<br>";
}
   


?>