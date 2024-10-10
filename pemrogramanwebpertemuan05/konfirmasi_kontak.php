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
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Pastikan sesuai dengan method POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
    $lahir = $_POST['lahir'];

    // Mengonversi tanggal lahir menjadi format bulan string
    $lahirDate = strtotime($lahir);
    $formattedDate = date('d F Y', $lahirDate);

    // Mengambil tahun lahir dan menghitung umur
    $birthYear = date('Y', $lahirDate);
    $currentYear = date('Y');
    $age = $currentYear - $birthYear;

    echo "<p>Nama: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Hobi: " . implode(", ", $hobbies) . "</p>";
    echo "<p>Tanggal Lahir: " . htmlspecialchars($formattedDate) . "</p>";
    echo "<p>Berarti umur anda sudah " . htmlspecialchars($age) . " tahun</p>";
} else {
    echo "<p>Data tidak ditemukan.</p>";
}
?>
