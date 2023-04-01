<?php 
    require('../models/db.php');

    $json = json_decode($_GET['myjson']);

    // echo $json->card_number;

    $card_number = $json->card_number;
    $card_name = $json->card_name;
    $expiry = $json->expiry;
    $cvv = $json->cvv;
    $username = $json->username;

    if (empty($card_number) or empty($card_name)) {
        echo "Please fill out all the forms";
    }
    else if(strlen($card_number) != 2){
        echo "Credit card number must be 16 character";
    }
    else if(strlen($cvv) != 3){
        echo "CVV must be 3 numbers";
    }
    else {
        $con = getConnection();
        $sql = "insert into payments values(NULL, '$card_number', '$card_name', '$expiry', '$cvv', '$username')";
        if(mysqli_query($con, $sql)){
            echo " Inserted Sucessfully";
        }else{
            echo "Could not be inserted into database. Try again";
        }
    }
?>