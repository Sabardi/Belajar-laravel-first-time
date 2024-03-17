<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('title')</title> -->
    <!-- jika lupa menuliskan nama title nya nilai defalut nya yg akan di jalankan -->
    <title>@yield('title', Sistem Informasi)</title>
    <link rel="shortcut icon" href="/img/a.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('menuMahasiswa')"  href="/mhs">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuDosen')" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGalery')" href="/galery">Galery</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | copyright @ {{date("Y")}} Dunia Ilkom
        </div>
    </footer>
</body>
</html>