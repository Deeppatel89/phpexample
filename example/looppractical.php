<?php

// $p=0;
// $s=0;

// while ($p<5) {

//     while($s<=5){

//         echo "nested".$s."<br>";
//         ++$s;
//     }
//     while($s<=10){
//         echo "inner nested".$s."<br>";
//         $s++;
//     }
//     echo "while". $p."<br>";
//     ++$p;

//     # code...
// }
// $s=0;
// do{
//     echo "do while". $s."<br>";
//     $s++;

// }while("");


// Php code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
//===================================================================================================
for ($i=1; $i<=8; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
// echo $j." ";	 
echo"*";
}	  	
echo "<br/>";   	
}  
//=====================================================================================================
for($i=0;$i<=8;$i++)
{  
// for($j=8-$i;$j>=1;$j--)
for ($j=1+$i; $j <=8 ; $j++)
{  
echo "$j ";  
}  
echo "<br>";  
}  

