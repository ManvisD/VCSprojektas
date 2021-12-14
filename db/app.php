<?php
require_once __DIR__ ."/db.php";

//Kontaktu forma
if( isset($_POST['vardas']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['submit']) ){

    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $stmt = $mysqli->prepare("INSERT INTO `projektas`(`vardas`, `email`, `zinute`) VALUES(?, ?, ?)");
            $stmt->bind_param("sss", $vardas, $email, $message);
            $stmt->execute();

            echo $mysqli->error;

        }
        
    }

    
}

?>