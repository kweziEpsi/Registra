<?php
    
    include('../../app/model/form.php');
    
    $name = $email = ""; //varaibles
    /*Recieve data from form and write on txt file*/
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"]." ";
        $email =$_POST["email"]."\n";
        write($name,$email);
        header('Location: ../../app/view/redirect.html'); //redirect to diffent page
    }
?>