<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <h2>Nama : {{ Auth::guard('admin')->user()->name }}</h2>
        <h2>Email : {{ Auth::guard('admin')->user()->email }}</h2>
        
        @if(session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif

        <p>Welcome to the Admin Dashboard!</p>

        <!-- Tambahkan konten dashboard di sini -->

        <!-- Tombol Logout -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
