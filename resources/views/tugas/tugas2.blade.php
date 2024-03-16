<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
{{ $nama }}
    <div>
        Copyright © <?php echo date("Y"); ?> Duniailkom
    </div>

    <div>
        <img class="rounded-circle img-thumbnail m-2" src="/img/Logo-BAGU-color.png" alt="">
        <img src="/img/a.jpeg" alt="">
    </div>

    <script src="/js/main.js"></script>
</body>
</html>