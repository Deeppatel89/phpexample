
<?php

use student as GlobalStudent;

class car{
          public $name;
          public $color;
          //method
        function set_name($name,$color){
            $this->name = $name;
            $this->color= $color;
        }
        function get_name(){
          return "my name is $this->name and $this->color" ;
        }
      }
      $bmw = new car();
      $bmw->set_name("Reshma", "23");
     
      
      
      echo  $bmw->get_name();
      echo "<br>";
    
?>

<?php

class student{
  public $stdname;
  public $stdid;

 public function __construct($stdname,$stdid){
    $this->stdname = $stdname;
    $this->stdid = $stdid;

  }
  public function std(){
    return "student name is : ".$this->stdname."  student id is:".$this->stdid;
  }
}
$student = new student("deep",1);
echo $student -> std();
echo "<br>";




?>
<?php
class hello{
  public $a;
  public $b;

  public function __construct($a,$b){
    $this->a =$a;
    $this->b =$b;

  }
  public function world(){  
    return $this->a.$this->b;
  }
}
     $hello = new hello ("HELLO","world");
     echo $hello->world();
     echo "<br>";
  
?>
<?php
class deep{
  public $x;
  public $y;
  public $z;

  public function __construct($x,$y,$z){

    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
    
  }
public function abc(){
  return "hello this is a ".$this->x." and ".$this->y ."  ".$this->z;
}

 
}
$deep = new deep("deep","rudra","yagnesh");
echo $deep->abc();
echo"<br>";




?>
<?php
 class m{
   public $u;
   public $i;

   public function __construct($u,$i)
   {
     $this -> u =$u;
     $this -> i =$i;
    }
    public function a(){
      echo"hello".$this -> u.$this -> i;
    }
 }
   $m = new m("  ","world");
   echo $m->a();
?>