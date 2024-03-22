<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="/img/a.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
    </div>
    <div class="row">
        <div class="col-12">
            @component('layout.alert')
            <!-- <div class="alert alert-warning alert-dismissible fad show"> -->
                @slot('class')
                    warning
                @endslot
                100 data mahasiswa perlu di perbaiki
            @endcomponent        
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
            <!-- </div> -->

            <!-- <div class="alert alert-danger alert-dismissible fade show"> -->
            @component('layout.alert')
                @slot('class')
                    danger
                @endslot
                hari ini deadline laporan perjalanan dinas!
            @endcomponent      

            @component('layout.alert')
                @slot('class')
                    success
                @endslot
            Bulan depan cuti panjang...
            @endcomponent  
                
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>