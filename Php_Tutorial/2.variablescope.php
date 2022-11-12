<?php
// $edtech = "Great Learning";
    function student(){
        // global $edtech;
     static $marks = 90;
     $marks++;
        echo " the marks of the student is ".$marks;
        echo "</br>";
    }
    student();
    student();
    student();
    echo "</br>";

    // echo "the edtech company name outside the fxn".$edtech;

?>