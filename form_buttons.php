<?php
    if(isset($_GET['haanaas']) && $_GET['haanaas'] != ''){
        echo 'origin: ' . $_GET['haanaas'];
    }
    print_r($_POST);
?>