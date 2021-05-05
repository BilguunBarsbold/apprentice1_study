<?php
    $email=$_POST['email'];
    $name=$_POST['username'];
    $password=$_POST['password'];
    $intro=$_POST['introduction'];

    print_r($_POST);
    echo '<hr>';

    print_r($name);
    echo '<br>';
    print_r($email);
    echo '<br>';
    print_r($password);
    echo '<hr>';

    echo 'My name is ' . $name . '<br>';
    echo 'The email is (' . $email . ')'. '<hr>';

?>