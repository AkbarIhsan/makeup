<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil MUA</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Profil MUA</h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ $profileMua ? route('mua.update', $profileMua->id) : route('mua.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($profileMua)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="male" {{ $profileMua && $profileMua->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $profileMua && $profileMua->gender == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture" class="form-control">
                @if($profileMua && $profileMua->picture)
                    <img src="{{ asset('storage/' . $profileMua->picture) }}" alt="Profile Picture" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $profileMua->alamat ?? '' }}">
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" name="provinsi" id="provinsi" class="form-control" value="{{ $profileMua->provinsi ?? '' }}">
            </div>

            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control" value="{{ $profileMua->kota ?? '' }}">
            </div>

            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{ $profileMua->kecamatan ?? '' }}">
            </div>

            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" name="kode_pos" id="kode_pos" class="form-control" value="{{ $profileMua->kode_pos ?? '' }}">
            </div>

            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $profileMua->no_hp ?? '' }}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $profileMua->deskripsi ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary d-none" id="updateButton">Simpan</button>
            <button type="button" class="btn btn-secondary" id="editButton" onclick="toggleEditMode()">Edit</button>
        </form>
    </div>
</body>
</html>
