<?php

$color = array("re d","ye l l ow","gr e e n");
$cars = array (
      array("Vol vo",22,18 ),
      array("BM   W",15,13),
      array("S aa  b",5,2),
      array("L an  d R ov er",17,15)
    );

function space_remover($new_arry){
    global $color;
    global $new; 
    global $cars;
    $new = [];
   
     foreach($new_arry as $value){

      
          $remove = str_replace(" ","",$value);
           

          $x= array_push($new,$remove);
          


           print_r($x."<br>");

           
      }
      print_r($new);
      print_r($x);
 }
echo"<pre>";
print_r($color);
$abc = space_remover($color);
// space_remover($x);   
print_r($abc);


?>