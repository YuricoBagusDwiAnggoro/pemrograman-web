<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    </style>
</head>

<body>

    <div class="container-fluid text-center mt-4">

        <div class="row mb-3">
            <h1 class="fw-bold"><u>Willkommen auf meiner Website</u></h1>
        </div>


 
        <div class="row mb-3">
    <div class="text-center">
        <a href="homes.php" class="btn btn-primary">Home</a>
        <a href="tentang.php" class="btn btn-success ms-2">About</a>
        <a href="kontak.php" class="btn btn-info ms-2">Contact</a>
    </div>
</div>


        <div class="row">
            <?php
            echo '
            <h1><b>Home</b></h1>
            ';
            ?>
            
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>