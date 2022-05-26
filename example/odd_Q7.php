<?php
echo"================Q:7==========<br><br>";
 class it_industry{


     public $admin;
     public $employee;

public function __construct($admin,$employee){
    $this -> admin =$admin;
    $this -> employee =$employee;
}
public function display(){
    return  $this->admin."is the admin user. So he is responsible for 
    office maintenance and security.<br>";
}
public function abc(){
  return  $this->employee." has the only access to office security.";
   
}

 }

 $it_industry = new it_industry("Williamson","Sarah");
 echo $it_industry -> display() . $it_industry -> abc();
//  echo $it_industry -> abc();
?>