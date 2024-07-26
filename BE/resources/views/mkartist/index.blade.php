<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mkartist Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Mkartist Dashboard</h2>
        <h2>Nama : {{ Auth::guard('mkartist')->user()->name }}</h2>
        <h2>Email : {{ Auth::guard('mkartist')->user()->email }}</h2>
        
        @if(session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif

        <p>Welcome to the Mkartist Dashboard!</p>

        <!-- Tambahkan konten dashboard di sini -->

        <!-- Tombol Profile MUA -->
        <a href="{{ route('mua.index') }}" class="btn btn-primary">Profile MUA</a>

        <!-- Tombol Logout -->
        <form action="{{ route('mkartist.logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
