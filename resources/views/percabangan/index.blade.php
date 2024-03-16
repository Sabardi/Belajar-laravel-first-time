<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
</div>

<br>

<div class="alert alert-secondary d-inline-block">
<?php    
if (($nilai >= 0) and ($nilai< 50)){
    echo "maaf anda tidak lulus";
}else if (($nilai >= 50) and ($nilai <= 100) ){
    echo "Selamat, anda lulus";
}

    ?>
</div>