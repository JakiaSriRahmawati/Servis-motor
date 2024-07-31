<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
    @include('templat.nav')

    <div class="container mt-5">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-4">
                <center>
                    <img src="{{ asset('img/logo (1).png') }}" alt="" style="width: 100px">
                </center>
                <div class="card"> 
                    <form action="{{ route('postLogin') }}" method="POST" class="form-group mt-2">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <label for="role">Role:</label>
                        <select id="role" name="role" class="form-control" required>
                            <option value="admin">Admin</option>
                            <option value="pengguna">Pengguna</option>
                            <option value="mekanik">Mekanik</option>
                            <option value="owner">Owner</option>
                            <option value="kasir">Kasir</option>
                        </select>
                        <label for="kontak">No_HP</label>
                        <input type="text" name="kontak" class="form-control" required>
                        <label for="cover">Cover</label>
                        <input type="file" accept="img/*" required  name="cover" class="form-control">

                        @if(Session::has('notifikasi'))
                            <p style="color: red">{{ Session::get('notifikasi') }}</p>
                        @endif

                        <button type="submit" class="btn btn-success mt-5">Login</button>
                        <button type="reset" class="btn btn-secondary mt-5">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html> 
