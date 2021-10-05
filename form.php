<?php
    header('Location: redirect.html'); //redirect to diffent page

    $name = $email = ""; //varaibles

    /*Recieve data from form and write on txt file*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]." ";
    $email =$_POST["email"]."\n";
    $register = fopen("register.txt", "a")or die("Unable to open file!"); //create .txt file
    fwrite($register, $name); //write name to .txt file 
    fwrite($register, $email); //write email to .txt
    fclose($register);
    }
?>