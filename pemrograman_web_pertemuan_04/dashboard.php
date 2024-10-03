<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            color:rgb(255, 255, 255);
        }
          
        li {
            float: left;
        }

        header nav ul li a {
            color: white;
            display: block;
            text-align: center;
            padding: 14px 16px; 
            text-decoration: none; 
        }

        .navbar-nav .nav-link:hover { 
            color: rgb(0, 0, 0);
        }

        li a:hover {
            background-color: rgb(43, 255, 0);
        }

        .centered-image {
            object-fit: cover;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        echo
        '
        <img src="port.png"
             alt="header"
             width="1900px"
             height="200px"
             class="centered-image"/>
    </header>

    <section class="container mt-4">   
        <h2>Disturbing News</h2>
        <div class="row mb-4">
            <div class="col-md-3">
                <img src="santacruz.png"
                    alt="tembaki mahasiswa"
                    class="img-fluid rounded"/>
            </div>
            <div class="col-md-9">
                <h3>Santa Cruz 1991</h3>
                <p>Pembantaian Santa Cruz adalah peristiwa penembakan terhadap kurang lebih 250 pengunjuk rasa pro-kemerdekaan Timor Timur. Pembantaian Santa Cruz terjadi di Timor Timur pada 12 November 1991, di tengah pendudukan Indonesia di Timor Leste. Peristiwa ini memakan 273 korban jiwa, dan diakui sebagai bagian dari genosida Timor Timur.</p>
                <p><a href="beritadetil1.html" class="btn btn-primary">Selengkapnya</a></p>
            </div>
        </div>
        <hr>

        <div class="row mb-4">
            <div class="col-md-3">
                <img src="downfall.png"
                    alt="pemandangan"
                    class="img-fluid rounded"/>
            </div>
            <div class="col-md-9">
                <h3>Fall of Soviet Union</h3>
                <p>After his inauguration in January 1989, George H.W. Bush did not automatically follow the policy of his predecessor, Ronald Reagan, in dealing with Mikhail Gorbachev and the Soviet Union. He ordered a strategic policy re-evaluation to establish his own plan for dealing with the Soviet Union.</p>
                <p><a href="beritadetil2.html" class="btn btn-primary">Selengkapnya</a></p>
            </div>
        </div>
        <hr>
    </section>
    ';
    ?>

    <footer class="bg-dark text-white p-3">
        <div class="container">
            <p>Link Rekomendasi</p>
            <ul class="footer-links">
                <li><a href="https://google.com">Google</a></li>
                <br>
                <li><a href="https://upj.ac.id/">UPJ</a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
