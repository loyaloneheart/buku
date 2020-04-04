<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Array</title>
</head>
<body>
    <h1>Urutan hari dengan array</h1>
    <?php 
        $data = [
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jum'at",
                "Sabtu",
                "Minggu"
             ];
        print_r($data);
        echo '<br><h3>data hari sebelum dihapus<br><br><br></h3>';
        unset($data[4]);
        print_r($data);
        echo'<br><h3>data hari setelah dihapus salah satu array atau index ke 4</h3>';
    ?>    
</body>
</html>