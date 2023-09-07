<?php
$password = $_REQUEST['password'];
//Validation system.
$finalPass = "Hamim";
if($password == $finalPass){
    echo "<h1>Password Match</h1><br>";
}else{
    echo "password Dident match<br>";
}
//PRIME NUMBER CHACK

    $number = $_REQUEST['number'];
    for ($i=1; $i<=$number; $i++){
        if($number % $i == 0){
            echo " it's a Prime Number<br>";
            break;
        }else{
            echo "it's not a prime number";
        }
    }
