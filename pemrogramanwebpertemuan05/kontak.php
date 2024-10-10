<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }


        .navbar {
            margin-bottom: 20px;
        }

        .form-check-label {
            margin-left: 5px;
        }
    </style>
</head>

<body>
        <div class="row mb-3">
    <div class="text-center">
        <a href="homes.php" class="btn btn-primary">Home</a>
        <a href="tentang.php" class="btn btn-success ms-2">About</a>
        <a href="kontak.php" class="btn btn-info ms-2">Contact</a>
    </div>
</div>


        <div class="form-container">
        <form action="konfirmasi_kontak.php" method="post"> <!-- Ubah menjadi POST -->
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="hobby">Hobby:</label>
        <br>
        <input type="checkbox" name="hobby[]" value="Lari">
        <label for="lari">Lari</label><br>
        <input type="checkbox" name="hobby[]" value="Loncat">
        <label for="loncat">Loncat</label><br>
        <input type="checkbox" name="hobby[]" value="menggayming">
        <label for="menggayming">menggayming</label><br>
    </div>

    <div>
        <label for="lahir">Tgl/Lhr:</label>
        <input type="date" id="lahir" name="lahir">
        <input type="submit" value="submit">
    </div>
</form>

</body>
</html>