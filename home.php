<?php include 'includes/header.php';?>
    <h1>Welcome</h1>
    <?php include 'includes/navbar.php'; ?>

    <form action='registration.php' method='POST'>
        <div class="name">
            <label for="exampleInputName">Enter your name</label>
            <input type="text" name='name' required class="form-control" id="exampleInputUsername">
        </div>
        <div class="username">
            <label for="exampleInputUsername">Username</label>
            <input type="text" name='username' required class="form-control" id="exampleInputUsername">
        </div>
        <div class="email">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1">
        </div>
        <div class="password">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name='password' required class="form-control" id="exampleInputPassword1">
        </div>
        <div class="conf_password">
            <label for="exampleInputPassword1">Confirm password</label>
            <input type="password" name='conf_password' required class="form-control" id="exampleInputPassword1">
        </div>
        <div class="button form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Terms and Policy</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>             
<?php include 'includes/footer.php'; ?>