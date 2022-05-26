<?php
// array_chunk
echo"========================array_chunk========================";
$array = array('a','b','c','d','e');
$new_array = array_chunk($array,3,true);
echo"<pre>";
print_r($new_array);
echo"</pre>";


//array_combine
echo"========================array_combine========================<br><br>";
$array1 = array('1','2','3','4','5');
 $array3 = array_combine($array,$array1);
 echo"<pre>";
 print_r($array3);

 //array_count_values
 echo"========================array_count_values========================<br><br>";
 $array4 = array('1','2','3','4','5','4','3','2','4');
 print_r(array_count_values($array4));

//array_diff_assoc 
echo"========================array_diff_assoc========================<br><br>";
print_r(array_diff_assoc($array4,$array1));


//array_filter
echo"========================array_filter========================<br><br>";

function odd($num){
    return ($num&1);
   
}
print_r(array_filter($array4,"odd"));


//array_key_exists
echo"========================array_key_exists========================<br><br>";
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists(9,$array4))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!"."<br>";
  }

  //array_map
  echo"========================array_map========================<br><br>";
  function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2,3,4,5,6,30];
$b = array_map('cube', $a);
print_r($b);

//array_merge
echo"========================array_merge========================<br><br>";
$x = array('1'=>"red",'2'=>"blue");
print_r(array_merge($a,$array));

//array_push
echo"========================array_push========================<br><br>";

$empty = [];

 $newarray = array_push($empty,$a);
 print_r($newarray);
 echo"<br>";
 print_r($empty);
 
 //array_pop
 echo"========================array_pop========================<br><br>";
 $my_array = ["red","green","blue","yellow","purple"];
// print_r($array_pop);
$abc=(array_pop($my_array));
// print_r($abc);
print_r($my_array);
echo $abc;



?>