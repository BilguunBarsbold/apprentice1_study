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
    /*echo 'Connected successfully' . '<br>';

    $sql="SELECT * FROM `users` WHERE `email`='$email';";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        header('Location: /register.php?error=email');
        //while($row=$result->fetch_assoc()){
            //print_r($row);
    }

    $sql="SELECT * FROM `users` WHERE `username`='$username';";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        header('Location: /register.php?error=username');
    }
    
    $insertsql="INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUE ('$name', '$username', '$email', '$password');";
    $result=$conn->query($insertsql);

    if($result == TRUE){
        //login user
        header('Location: /login.php');
    }
    else{
        header('Location: /register.php?error=unknown');
    }
    $conn -> close();*/
else{
    header('Location: /register.php?');
}
?>