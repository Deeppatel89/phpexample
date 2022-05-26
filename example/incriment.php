<form action="" method="POST">

<input type="text" name="click" id=""><br>
<button type="submit">submit</button>
</form>
<?php
if(!empty($_POST)){

    $i=$_POST["click"];

    if($i == $i){
        $i++;
        echo"$i";
        
    }
    

   
}

function deep($i,$a){
    echo "deep patel ".$i."".$a;

}

deep(" hello"," good mornig");
?>
