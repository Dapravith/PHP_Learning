<?php
    // function student($name){
    //     echo " the name is $name</br>";
    // }
    // student("tony");
    // student("vith");
    // student("edwin");

    function edt(&$a){
        $a = "gl";
    }
    $b = "great learning";
    edt($b);
    echo $b;
?>