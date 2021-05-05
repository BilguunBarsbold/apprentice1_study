<?php 
    if(isset($_GET['error'])){
        switch($_GET['error']){
            case 'confirmation':
                $error = 'Password Confirmation Error!';
                break;
            case 'database':
                $error = 'Database Error!';
                break;
            case 'username':
                $error = 'Username already taken!';
                break;
            case 'email':
                $error = 'Email already taken!';
                break;
            case 'unknown':
                $error = 'Unknown error! Contact us for more information.';
                break;
            default:
                $error = 'Something Wrong!';
                
        }
    }
    ?>
    <?php
    if(isset($error)){
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php
    }
?>