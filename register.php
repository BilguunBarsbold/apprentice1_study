<?php include 'includes/header.php'; ?>
    <?php //include 'registration.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php 
        if(isset($_GET['error'])){
            if($_GET['error'] == 'confirmation'){
        ?>
            <div class="alert alert-danger" role="alert">
                Password Confirmation Alert!
            </div>
        <?php
            }
        }
    ?>
    <form action='registration.php' method='POST'>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your name</label>
            <input value='' type="text" name='name' required class="form-control" id="exampleInputUsername" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input value='' type="text" name='username' required class="form-control" id="exampleInputUsername" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value='' type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name='password' required class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
            <input type="password" name='conf_password' required class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Terms and Agreements</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php include 'includes/footer.php'; ?>