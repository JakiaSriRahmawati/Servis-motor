<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Booking</title>
</head>
<body>
    @include('templat.nav')

    <div class="container mt-5">
        <h1>Welcome to the Booking Page</h1>
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-4">
                <center>
                    <img src="{{ asset('img/logo (1).png') }}" alt="" style="width: 50px">
                </center>
                <div class="card">
                    <form action="{{ route('inputanbooking') }}" method="POST" class="form-group mt-2">
                        @csrf
                        <label for="merk_motor">Merk Motor</label>
                        <input type="text" name="merk_motor" class="form-control">
                        <label for="mesin_motor">Mesin Motor</label>
                        <input type="text" name="mesin_motor" class="form-control">
                        <label for="seri_motor">Seri Motor</label>
                        <input type="text" name="seri_motor" class="form-control">
                        <label for="no_plat">No Plat</label>
                        <input type="text" name="no_plat" class="form-control">
                        <label for="jenis_service">Jenis Servis</label>
                        <input type="text" name="jenis_service" class="form-control">
                        <label for="tgl_booking">Tanggal Booking</label>
                        <input type="date" name="tgl_booking" class="form-control">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">

                        @if(Session::has('notifikasi'))
                        <p style="color: red">{{ Session::get('notifikasi') }}</p>
                    @endif
                    <button type="submit" class="btn btn-success mt-5">Kirim</button>
                    <button type="reset" class="btn btn-secondary mt-5">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
                       

                       
