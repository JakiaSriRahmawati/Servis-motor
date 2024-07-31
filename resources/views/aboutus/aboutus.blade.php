<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>About Us</title>
</head>
<body>
    @include('templat.nav')

    <div class="container mt-5">
        <h1>Welcome to the about us Page</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('img/baru.jpg')}}" class="card-img-top" alt="" style="height: 300px">
                </div>
            </div>
            <div class="col-9">
            <h4 class="text-dark mb-12 text-center card-title">Servis Motor Zackk</h4>
            </div>
            <p class="card-text">Zackk adalah toko ritel modern yang mengkhususkan diri dalam menyediakan 
            suku cadang berkualitas tinggi untuk sepeda motor. Dengan fokus utama pada penyediaan ban motor 
            berkualitas dan tahan lama, kami juga menawarkan layanan unggulan seperti Servis Motor, Ganti Oli 
            dan Suku Cadang Otomotif.Komitmen Kami pada Indonesia: Dengan lebih dari 1100 toko Planet Ban 
            tersebar di seluruh Indonesia,kami hadir lebih dekat dengan masyarakat Indonesia. Dukungan dari 7 
            Juta pelanggan di seluruh negeri membuktikan kepercayaan yang diberikan kepada kami untuk memenuhi 
            kebutuhan suku cadang sepeda motor. Ini memotivasi kami untuk terus berinovasi dan menyediakan 
            produk-produk terbaik serta berkualitas bagi pemilik sepeda motor di Indonesia.</p>
            <h4 class="text-dark mb-12 text-center card-title">SEJARAH</h4>
            <h5 class="text-dark mb-12 text-center card-title">PT Servis Motor Zackk</h5>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
                       

                       