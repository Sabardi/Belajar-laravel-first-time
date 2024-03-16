<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="/css/my-style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <ol>
        <?php
        foreach ($mahasiswa as $nama){
            echo "<li> $nama</li>";
        }
        ?>
    </ol>
    <div>
        Copyright © <?php echo date("Y"); ?> Duniailkom
    </div>

    <script src="/js/main.js"></script>
</body>
</html>