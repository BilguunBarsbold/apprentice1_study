<?php
    $dbserverip='localhost';
    $dbusername='root';
    $dbpassword='bilguun0207';
    $dbname='sutdy';

    //Create connection
    $conn=new mysqli($dbserverip, $dbusername, $dbpassword, $dbname);

    // Check connection
    if($conn->connect_error){
        header('Location: /register.php?error=database');
    }
    //echo 'Connected successfully' . '<br>';
?>