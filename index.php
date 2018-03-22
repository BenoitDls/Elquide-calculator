<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Csutom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <title>Eliquide Calculator!</title>
</head>

<body class="container">
    <h1 id="pageTitle" class="mt-5 text-center">Eliquide Calculator!</h1>
    <h2 class="mt-5">Calculer la quantité d'arôme nécessaire a votre base</h2>
    <div class="row mt-3">
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <label>Dosage arôme</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                    <input type="number" class="form-control" id="arome" placeholder="15">
                </div>
                <small id="emailHelp" class="form-text text-muted">dosage en %</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <label>Base</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ml</div>
                    </div>
                    <input type="number" class="form-control" id="base" placeholder="200">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <label>Arôme a rajouter</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ml</div>
                    </div>
                    <input type="text" class="form-control" id="result" placeholder="30" disabled>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/calculator.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</body>

</html>