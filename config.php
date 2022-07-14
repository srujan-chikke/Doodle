<?php
ob_start();//output buffering means it will save the output untill the end

try{
    $con = new PDO("mysql:dbname=doodle;host=localhost","root",""); // Connceting our db through credentials
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO :: ERRMODE_WARNING); // it will show us warnigs
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>