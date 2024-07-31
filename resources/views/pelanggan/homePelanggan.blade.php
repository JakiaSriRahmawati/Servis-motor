<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>HomePelanggan</title>
   <style>
     .card {
        transition: transform 0.2s;
        }
        .card:hover {
        transform: scale(1.05);
        }
   </style>
    @include('templat.nav')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/servis.jpg')}}" class="d-block w-100" alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/service.jpg')}}" class="d-block w-100" alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/mtr3.jpg')}}" class="d-block w-100" alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/mtr4.jpg')}}" class="d-block w-100" alt="..." style="height: 500px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/mtr5.jpg')}}" class="d-block w-100" alt="..." style="height: 500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="{{asset('img/baru.jpg')}}" class="card-img-top" alt="..." style="height: 300px">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="{{asset('img/baru.jpg')}}" class="card-img-top" alt="..." style="height: 300px">
                </div>
            </div>
        </div>
        <h4 class="text-dark mb-4 text-center card-title">Selamat Datang di Zackk</h4>
        <p class="card-text">Zackk adalah toko ritel modern yang mengkhususkan diri dalam menyediakan 
            suku cadang berkualitas tinggi untuk sepeda motor. Dengan fokus utama pada penyediaan ban motor 
            berkualitas dan tahan lama, kami juga menawarkan layanan unggulan seperti Servis Motor, Ganti Oli 
            dan Suku Cadang Otomotif.Komitmen Kami pada Indonesia: Dengan lebih dari 1100 toko Planet Ban 
            tersebar di seluruh Indonesia,kami hadir lebih dekat dengan masyarakat Indonesia. Dukungan dari 7 
            Juta pelanggan di seluruh negeri membuktikan kepercayaan yang diberikan kepada kami untuk memenuhi 
            kebutuhan suku cadang sepeda motor. Ini memotivasi kami untuk terus berinovasi dan menyediakan 
            produk-produk terbaik serta berkualitas bagi pemilik sepeda motor di Indonesia.</p>
        <div class="container mt-5">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $item->gambar }}" alt="" class="card-img-top" style="height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $item->judul }}</h5>
                            <a href="{{ route('detailArtikel', $item->id) }}" class="btn btn-dark d-block">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star">&#9733;</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-success">
            <div class="mt-5 d-flex justify-content-center">
                <span>mau servis motor ? ayoo booking sekarang</span>
            </div>
            <div class="m-5 d-flex justify-content-center">
                <a href="{{ route('login',['id']) }}" class="btn btn-dark btn-rounded">Booking Sekarang !</a>
              </div>
        </div>
          
    </div>
    @include('templat.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>