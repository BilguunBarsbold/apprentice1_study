<?php
    function notempty($field){
        if($field != ''){
            return true;
        }
        return false;
    }

    if(isset($_POST['email'])) {
        foreach($_POST as $index => $data) {
            if(notempty($data) == false) {
                die($data . ' medeelel hooson bna');
            }
        }
        if($_POST['password'] != $_POST['conf_password']){
            header ('Location: /register.php?error=confirmation');
        }
        
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

        include 'includes/logincheck.php';
            //die('Ready to connect');
            $sql="SELECT * FROM `users` WHERE `email`='$email';";
            $result = $conn -> query($sql);
            if($result -> num_rows > 0){
                header('Location: /register.php?error=email');
                //while($row=$result->fetch_assoc()){
                    //print_r($row);
            }
        
            $sql="SELECT * FROM `users` WHERE `username`='$username';";
            $select_result = $conn -> query($sql);
        
            if($select_result -> num_rows > 0){
                header('Location: /register.php?error=username');
            }
            
            $insertsql="INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUE ('$name', '$username', '$email', '$password');";
            print_r($insertsql);
            die();
            
            $insert_result=$conn->query($insertsql);
        
            if($insert_result == TRUE){
                //login user
                header('Location: /login.php');
            }
            else{
                header('Location: /register.php?error=unknown');
            }
            $conn -> close();
        }else{
            header('Location: /register.php');
        }

//end
/*    INSERT INTO `users` 
    (`username`, `email`, `name`, `password`, `created_at`, `updated_at`, `email_verified`) 
    VALUES 
    ('username', 'email@example.com', 'name', 'password', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '0');
*/    




/*        //Hihceel deer 0-5 hurtel user nemsen
    for($x=0; $x<5; $x++){
        $sql = "INSERT INTO `users` (`username`, `email`, `name`, `password`) VALUES ('username$x', 'email$x@gamil.com', 'name$x', 'password$x');";
        echo $x;

        $hariu = $conn->query($sql);
        if ($hariu === TRUE){
            echo ' New account created succesfully' . '<hr>' ;
        }else{
            echo 'Error: ' . $sql . '<hr>' . $conn -> query($sql);
            die();
        }
    }
*/
?>



