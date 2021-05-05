<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body>
    <h1>Hello World</h1>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <h2>Welcome</h2>
                <form class='register home_page' id='register' action='form_data.php' method='POST'>
                    <div class='name_in'>
                        <label for="exampleInputUsername">username</label>
                        <input required name='username' type="username">
                    </div>
                    <div class="email_in">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input required name='email' type="email" class="email_input" id="email">
                    </div>
                    <div class="password_in">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input required name='password' type="password" class="password_input" id="password">
                    </div>
                    <div class='introduction_in'>
                        <label for="">Introduction</label>
                        <input name='introduction' type="text">
                    </div>
                    <div class="mb-3 form-check">
                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>