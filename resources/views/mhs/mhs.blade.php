<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasisaw</title>
    <link rel="shortcut icon" href="/img/a.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body> -->
@extends('layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa', 'active')

@section('content')

    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($mahsiswa as $val)
                    <li class="list-group-item"> {{$val}} </li>
                    @empty
                    <div class="alert alert-dark d-inline-block"> Tidak ada Data... </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection
<!-- @include('layout.footer') -->
</body>
</html>