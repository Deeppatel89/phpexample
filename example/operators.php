<?php

echo"===============Arithmetic Operators====================<br><br>";
$x = 10;
$y = 50;
$z = 15;
$a = 15;
$b = 20;
echo "Addition is: ". ($x+$y)."<br>";
echo "Subtraction is: ". ($x-$y)."<br>";
echo "Multiplication is: ". ($x*$y)."<br>";
echo "Division is: ". ($x/$y)."<br>";
echo "Modulus is: ". ($x%$y)."<br>";
echo "Exponentiation is: ". ($x**$y)."<br><br>";

echo"===============Assignment Operators====================<br><br>";
echo "x value is $x <br>";
echo "y value is $y <br>";
echo "z value is $z <br>";
echo "a value is $a <br>";
echo "b value is $b <br>";


echo "= operators: ".$x."<br>";
$x += 20;
echo "+= operators: ".$x."<br>";
$y -= 20;
echo "-= operators: ".$y."<br>";
$z *= 20;
echo "*= operators: ".$z."<br>";
$a /= 3;
echo "-= operators: ".$a."<br>";
$b %= 3;
echo "%= operators: ".$b."<br><br>";

echo"===============Comparison Operators====================<br><br>";

$p = 100;
$q = "100";


echo var_dump($p==$q); //p and q are same 100,so o/p is true
echo"p and q are same 100,so o/p of == is true <br><br>";
echo var_dump($p===$q);// p and q are same 100 but p is int and q is string so o/p is false
echo"p and q are same 100 but p is int and q is string so o/p of === is false <br><br>";
echo var_dump($p!=$q);// o/p is false because the value is equal
echo"o/p of != is false because the value is equal<br><br>";
echo var_dump($p<>$q);// o/p is false because the value is equal
echo "o/p of <> is false because the value is equal<br><br>";
echo var_dump($p!==$q);// o/p is true because the types are different 
echo "o/p of !== is true because the types are different <br><br>";

echo"===============Logical Operators====================<br><br>";
echo"===============AND Operators====================<br><br>";

$r = 10;
$s = 80;

if ($r==10 AND $s==80) {
    echo "hello<br>";         
    # code...
}
echo"===============OR Operators====================<br><br>";

if ($r==100 OR $s==80) {
    echo "hello<br>";
    # code...
}
echo"===============XOR Operators====================<br><br>";
 if ($r==100 xor $s==80){
     echo "hello<br>";
 }

//and gate
// 0 0 0
// 0 1 0
// 1 0 0
// 1 1 1

//or gate
// 0 0 0
// 0 1 1
// 1 0 1
// 1 1 1

//xor gate
// 0 0 0
// 0 1 1
// 1 0 1
// 1 1 0

echo"===============Ternary Operators====================<br><br>";
$user="";
$output = $user ? "have value <br>" :"no value <br>";
echo $output;
$color = $color?? "red<br>";
echo $color;
echo"===============array====================<br><br>";
$array = array("red","green","yellow","blue");

 for ($i=0; $i <count($array) ; $i++) { 
    print_r($array[$i]) ;
 
   
    
}
echo"<br>";
$a=0;
while ($a <count($array)) {
    print_r($array[$a]) ;
    $a++;
    
}
echo"<br>";
foreach ($array as $b) {
    print_r($b);
    # code...
}

?>