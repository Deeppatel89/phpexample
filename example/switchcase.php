<form method="POST" action="">

<input type="text" name="switch" id=""></br>
<button type="submit">submit</button>
</form>

<?php
if(!empty($_POST)){

    $p = $_POST['switch'];

    
    switch ($p) {
        case '1':
            echo "the value is:".$p;
            # code...
            break;
        
        default:
        echo "the value is default: ".$p ." is not any case";
            # code...
            break;
    }
}

    


?>