<?php
    function write($name,$email){
        $register = fopen("register.txt", "a")or die("Unable to open file!"); //create .txt file
        fwrite($register, $name); //write name to .txt file 
        fwrite($register, $email); //write email to .txt
        fclose($register); 
    }

?>