<?php
$age = 18;
$gender = "female";

if ($gender == "male"){
    if ($age == 21){
        echo "You are male Debutant";
    } else {
        echo "Not Debutant";
    }  
}
elseif($gender == "female"){
    if ($age == 18) {
        echo "You are Female Debutant";
    } else {
        echo "Not Debutant";
    }    
}
else {
    echo "Invalid Bruhh!!";
}
?>