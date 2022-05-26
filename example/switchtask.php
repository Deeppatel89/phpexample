<form action="" method="POST">
    <input type="text" name="calculator" id=""><br>
    <button type="submit">submit</button>
</form>
<?php
 if(!empty($_POST)){
   $p = $_POST['calculator'];
//    echo $p;

switch ($p) {
    case 'add':
        $a=10;
        $b=5;
        $c = $a+$b;
        echo $c;
        # code...
        break;
        case 'sub':
            $a=10;
            $b=5;
            $c = $a-$b;
            echo $c;
            # code...
            break;
            case 'mul':
                $a=10;
                $b=5;
                $c = $a*$b;
                echo $c;
                # code...
                break;
    
    default:
       echo "have a no case";
        break;
}
 }


?>