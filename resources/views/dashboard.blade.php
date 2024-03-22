<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <div class="mb-3">Halaman Dashboard</div>
        <div class="row">
            <div class="col-12">
                @component('layout.alert2')
                @slot('class')
                warning
                @endslot

                @slot('judul')
                pringatan
                @endslot
                100 data mahasiswa perlu perbaikan
                @endcomponent

                @component('layout.alert2')
                @slot('class')
                danger
                @endslot

                @slot('judul')
                awas
                @endslot
                Hari ini deadline  laporan perjalanan dinas!
                @endcomponent

                <h1>menggunakan asosiatip array </h1>
                @component('layout.alert2', ['class'=>'warning', 'judul'=> 'peringatan'])
                anda tidak senang
                @endcomponent

                @component('layout.alert2', ['class'=>'danger', 'judul'=> 'awas'])
                anda tidak senang
                @endcomponent

                @component('layout.alert2', ['class'=>'success', 'judul'=> 'Kabar Baik'])
                anda tidak senang
                @endcomponent
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
