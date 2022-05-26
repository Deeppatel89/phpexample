<?php
    function sum($mat,$en,$sci){

        $total=$mat+$en+$sci;
        return $total;
    }

    function per($totalavg){
        $avg = $totalavg/2;
        return $avg;

    }



      $abc=sum(10,30,50);

      $av=per($abc);

      echo "total marks: ". $abc;
      echo"<br>";
      echo "avg of marks: ".$av;
      echo"<br>";

?>
<?php
    function name(){
        echo"hello.......";

    }

    name();
    echo"<br>";

    function pera($fname="d",$lname="p"){
        echo "$fname "."$lname";

    }

    pera();
    echo"<br>";

    function fullname ($fname,$lname){
         echo $fname.$lname;
    }
    fullname("deep","patel");
    echo"<br>";

?>

<?php
     function total($markarr){
         $sum=0;

       foreach ($markarr as  $value) {
           $sum+=$value;
       }
        // $totalmarks=$a+$b+$c;
      return $sum;

     }

$mark= array(50,100,93);
 $summark=total($mark);
 echo"sum marks".$summark;


   function porcessavg($total){
       $avg=1;
       foreach ($total as $value);
       $avg/=$value;
        return $avg;

   }

   $deep = $summark;
   $per = porcessavg($deep);
   echo"avg marks is :".$per;
?>