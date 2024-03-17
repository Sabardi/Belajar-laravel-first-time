<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <link rel="shortcut icon" href="/img/a.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
    <!-- mengirim data pada include -->
@include('layout.navbar')

    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Galery</h1>
        <div class="row">
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>  
            <div class="col-4">
                <img src="/img/Logo-BAGU-color.png" alt="logo-bagu" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    @include('layout.footer')

</body>
</html>