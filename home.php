<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1>Welcome</h1>
                    <?php include 'navbar.php'; ?>
                    <form action='/register.php' method='POST'>
                        <div class="name">
                            <label for="exampleInputName">Enter your name</label>
                            <input type="text" name='name' required id="exampleInputUsername">
                        </div>
                        <div class="username">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" name='username' required id="exampleInputUsername">
                        </div>
                        <div class="email">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name='email' required id="exampleInputEmail1">
                        </div>
                        <div class="password">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name='password' required id="exampleInputPassword1">
                        </div>
                        <div class="conf_password">
                            <label for="exampleInputPassword1">Confirm password</label>
                            <input type="password" name='conf_password' required id="exampleInputPassword1">
                        </div>
                        <div class="button form-check">
                            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Terms and </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>



       
    </body>
</html>