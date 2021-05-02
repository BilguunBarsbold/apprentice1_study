<?php
    if( ugugdul($_POST['nomer1']) && ugugdul($_POST['nomer2']) && ugugdul($_POST['uildel'])) 
    {
        $hariu = calculate($_POST['nomer1'], $_POST['nomer2'], $_POST['uildel']);
        if(ugugdul($hariu)) 
        {
            echo $hariu;
        }
    }


    function calculate($nom1, $nom2, $uildel){
        switch($uildel) 
        {
            case "+":
                return $nom1 + $nom2;
            break;
            case "-":
                return $nom1 - $nom2;
            break;
            case "*":
                return $nom1 * $nom2;
            break;
            case "/":
                return $nom1 / $nom2;
            break;

            default:
                return 'Aldaa';
        }
        return 'Mash tom aldaa';
    }
    function ugugdul($field) {
        if($field != "") {
            return 1; //true
        }
        return 0; //false
    }
?>
