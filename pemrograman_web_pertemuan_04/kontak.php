<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container-fluid mt-4">
   
        <div class="row mb-3">
            <div>
                <a href="home.html">Home</a>
                <span>|</span>
                <a href="tentang.html">About</a>
                <span>|</span>
                <a href="kontak.html">Contact</a>
            </div>
        </div>

        <div>

                <form action="konfirmasi_kontak.php" method="get">

                    <div>
                        <label for="inputNama">Nama:</label>
                        <input type="text" name="nama" id="inputNama">
                    </div>

                    <div>
                        <label for="inputUrl">URL:</label>
                        <input type="text" name="url" id="inputUrl">
                    </div>
                    
                    <div>
                        <label>Hobi:</label><br>
                        <input type="checkbox" id="joging" name="hobi" value="Joging">
                        <label for="joging">Joging</label><br>
                        <input type="checkbox" id="badminton" name="hobi" value="Badminton">
                        <label for="badminton">Badminton</label><br>
                        <input type="checkbox" id="menggaming_ria" name="hobi" value="Menggaming ria">
                        <label for="menggaming_ria">Menggaming ria</label><br>
                    </div>
                    

                    
                    <div>
                        <label>Jenis Kelamin:</label><br>
                        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                        <label for="laki_laki">Laki-laki</label><br>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                 

              
                    <div>
                      
                        <button type="submit">Submit</button>

                        
                        <button type="reset">Reset</button>
                    </div>
                   
                </form>
                
            </div>
        </div>
  
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
