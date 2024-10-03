<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
    function fungsiku(){
        echo "variabel X didalam function adalah ".$GLOBALS['x'];
    }
    fungsiku();
    echo "<br> variabel X diluar function adalah ".$x;
    ?>
</body>
</html>