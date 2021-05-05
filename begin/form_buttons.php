<?php
    if(isset($_GET['haanaas']) && $_GET['haanaas'] != ''){
        echo 'origin: ' . $_GET['haanaas'] . '<br>';
    }

    if(isset($_POST) > 0){
        print_r($_POST);
        echo '<br>';
        foreach($_POST as $index => $value){
            echo $index . ':'. $value . '<br>';
        }
    }
?>