<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>admin</title>
    <style>
        <style>
        .search-input {
            background-color: blue; /* Warna latar belakang biru */
            color: white; /* Warna teks putih agar terlihat jelas */
            border: 1px solid #ccc; /* Tambahkan border */
            padding: 10px; /* Tambahkan padding */
            border-radius: 5px; /* Tambahkan border radius */
            font-size: 16px; /* Ukuran font */
        }

        .search-input::placeholder {
            color: rgb(197, 23, 23); /* Warna placeholder */
        }
    </style>
    </style>
</head>
<body>
    @include('templat.nav')

    <div class="container mt-5">
        <h1>Welcome to the Booking Page</h1>
        <!-- Konten halaman booking Anda di sini -->
        <div class="m-5 d-flex justify-content-center">
            {{-- <a href="" class="btn btn-dark btn-rounded">Daftar mekanik</a>
            <a href="" class="btn btn-dark btn-rounded">Daftar booking</a> --}}
            <a href="" class="btn btn-dark btn-rounded">Daftar kasir</a>
            <a href="" class="btn btn-dark btn-rounded">laporan</a>
          </div>
        <div class="col-md-4">
            <a href="" class="btn btn-dark btn-rounded">Daftar mekanik</a>
            <a href="" class="btn btn-dark btn-rounded">Daftar booking</a>
            <br>
            <form action="" method="get" >
              <input type="search" placeholder="Search Kontak User" name="kontak" id="" >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
            </form>
      </div>
        <div class="row">
            @if(Session::has('notifikasi'))
          <p>{{ Session::get('notifikasi') }}</p>
          @endif
          <div class="container mt-5">
            <table class="table table-striped" style="background-color: #ffffff">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Kontak</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $booking)
                    <tr>
                    <td><img src="{{ asset($booking->cover) }}" alt="" class="card-img-top" style="width: 70px"></td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->role }}</td>
                    <td>{{ $booking->kontak }}</td>
                    {{-- <td>
                        <a href="{{ route('editKomik', $item->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('deleteKomik', $item->id) }}" onclick="return confirm ('Yakin Mau Dihapus??')" class="btn btn-danger">Hapus</a>
                    </td> --}}
                </tr>
                </tbody>
                @endforeach
            </table>
          </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>