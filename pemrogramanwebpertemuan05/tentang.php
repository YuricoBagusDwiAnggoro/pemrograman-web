<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tetang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .row-isi p {
            text-align: justify;
        }
    </style>
</head>

<body>

    <div class="container-fluid text-center mt-4">

        <div class="row mb-3">
        <div class="text-center">
        <a href="homes.php" class="btn btn-primary">Home</a>
        <a href="tentang.html" class="btn btn-success ms-2">About</a>
        <a href="kontak.php" class="btn btn-info ms-2">Contact</a>
            </div>
        </div>


        <div class="row mb-3">
            <h1 class="fw-bold">About</h1>
        </div>



        <div class="row row-isi">
            <div class="col-4 mx-auto text-justify">
                <?php
                echo '
                    <p>The Leopard 2A7 is a modernized version of the Leopard 2A6 main battle tank. The main features of this new upgrade of the Leopard 2 tank include new armor, an energy system, a crew compartment cooling system, and a new weapon engagement system. The Leopard 2A7 is fundamentally different from the KMW variant 2A7+ and is not optimized for combat in urban terrain. The first tanks were delivered to the German army in December 2014. A total of 14 vehicles were produced for Tank Battalion 203, plus four more going to the Armoured Corps Training Centre and one vehicle at the Technical School for Land Systems and School for Technology of the Army. In May 2017, Germany and the Company Kraus-Maffei Wegmann signed a contract to upgrade the 20 existing Leopard 2A7s into the Leopard 2A7V variant. According to pictures and video published on Twitter on January 10, 2022, two Leopard 2A7NO, a Norwegian improved version of the Leopard 2A7 Main Battle Tanks were sent to Norway to conduct trial tests in the framework of a program launched by the Norwegian Ministry of Defense to acquire a new fleet of tanks. In May 2022, the Czech Minister of Defense Jana Černochová announced negotiations with Germany for the purchase of 40 Leopard 2A7 tanks. The Norwegian government officially announced on Friday, February 3, that it has decided to acquire 54 tanks of the Leopard 2A7NO type from Krauss-Maffei Wegmann (KMW). On February 10, 2023, the Greek government approved the upgrade of 123 Leopard 2A4 tanks of the Hellenic army to the 2A7 version. Citing information published on Twitter on March 8, 2023, Italy looks to purchase 250 Leopard 2A7 tanks. The first of the Leopard 2A7HU Main Battle Tanks were officially delivered to the Bulgarian armed forces on December 14, 2023. The Hungarian Ministry of Defense signed a contract with the German defense company Krauss-Maffei Wegmann (KMW) for the purchase of Leopard 2A7+ main battle tanks. This contract, signed on December 19, 2018, was part of Hungarys "Zrínyi 2026" Defense and Military Development Program. The contract was valued at more than $565 million and included the delivery of 44 new Leopard 2A7+ main battle tanks.</p>
                ';
                ?>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>