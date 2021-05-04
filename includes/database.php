<?php
    $serverip='localhost';
    $username='root';
    $password='bilguun0207';
    $dbname='sutdy';

    $conn=new mysqli($serverip, $username, $password, $dbname);

    if($conn->connect_error){
        die('Connection failed: ' . $conn->connect_error);
    }
    echo 'Connected successfully' . '<br>';

    $sql="SELECT * FROM users";
    $result = $conn -> query($sql);
        
    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " -Email: " . $row["email"]. "<br>";
            print_r ($row);
            echo '<br>';
        }
    }else{
        echo 'result0';
    }
    $conn -> close();
?>