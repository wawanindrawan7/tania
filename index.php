<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="bg-light">

    <style>
        .center-cropped {
            width: 100px;
            height: 600px;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 center-cropped" src="data:image/jpeg;base64,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" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 center-cropped" src="https://png.pngtree.com/background/20211217/original/pngtree-health-care-abstract-light-effect-icon-decoration-picture-image_1591329.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang</h1>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Masuk</a>
                        <a href="register.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>