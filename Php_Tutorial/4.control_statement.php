<?php
    $age = 47;
    if ($age < 18) {
        echo " person is not eligible for vaccination";
    }
    else if ($age >= 18) {
        echo " person will get the vaccination on priority";
    }
    else {
        echo " not eligible";
    }
    

?>

<?php 

    $x= 35;
    switch ($x){
        case 15:
            echo "the no is 15";
            break;
        case 14:
            echo " the no is 14";
            break;
        default:
            echo " other value";
    }

?>