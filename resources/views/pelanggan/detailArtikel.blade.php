<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Detail Artikel</title>
</head>
<body>
    <div class="container mt-5">
      <div class="row">
            {{-- <img src="{{ $artikel->gambar }}" alt="" class="card-top-img" style="height: :400px"> --}}
            <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="{{asset('img/baru.jpg')}}" class="card-img-top" alt="...">
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="{{asset('img/see.jpg')}}" class="card-img-top" alt="...">
              </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/dua.jpg')}}" class="card-img-top" alt="...">
            </div>
        </div>
          </div>
          <div class="col-md-12">
            <h5 class="card-text">{{ $artikel->berita }}</h5>
            <div class="col-12 d-flex">
              <a class="ms-auto btn btn-danger" href="/" role="button">Exit</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="{{ asset('js/bootsrap.min.js') }}"></script>
    
</body>
</html>