<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php include 'form_buttons.php'; ?>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <form action="buttons.php?haanaas=buttons" method="POST">
                    <input type="checkbox" name='hobby1' value="Hicheel" id="hobby1">
                    <label for="hobby1">
                        Hicheel
                    </label><br>
                    <input type="checkbox" name='hobby2' value="Kino" id="hobby2">
                    <label for="hobby2">
                        Kino
                    </label><br>
                    <input type="checkbox" name='hobby3' value="Duu" id="hobby3">
                    <label for="hobby3">
                        Duu
                    </label><br>
                    <input type="checkbox" name='hobby4' value="Sport" id="bohhy4">
                    <label for="hobby4">
                        Sport
                    </label>

                    <hr>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Love" value='Anhnii hair' id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Anhnii hair
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Love" value='Unench setgel' id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Unench setgel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Love" value='Dassan setgel' id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Dassan setgel
                        </label>
                    </div>

                    <hr>

                    <label for="customrange" class='form-label'>Example Range</label>
                    <input type="range" name='range' class='form-range' min='0' max='10'>

                    <hr>

                    <input type='submit'>

                    <hr>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>