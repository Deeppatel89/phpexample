<?php
  class stud{
    public $student_name;
    public $student_id;

    public function __construct($student_name,$student_id){

      $this->student_name = $student_name;
      $this->student_id = $student_id;
    }

    public function display(){
      return "student name is : ".$this->student_name." student id is : ".$this->student_id;
    }
    
      
    
  }
  $stud = new stud("deep",12);
  echo $stud->display();





?>