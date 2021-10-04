<?php
    $name = $email = ""; //varaibles

    /*Recieve data from form and write on txt file*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $register = fopen("register.txt", "w")or die("Unable to open file!"); //create .txt file
    fwrite($register, $name); //write name to .txt file 
    fwrite($register, $email); //write email to .txt
    fclose($register);
    }
?>