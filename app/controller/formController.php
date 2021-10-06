<?php
    
    include('../../app/model/form.php');
    
    $name = $email = ""; //varaibles

    /*Start recieve data*/
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"]." ";
        $email =$_POST["email"]."\n";
        write($name,$email); //submit data to form model
        header('Location: ../../app/view/redirect.html'); //redirect to thank you page
    }
    /*End recieve data*/
?>