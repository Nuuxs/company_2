@extends('layout.bingkaiadmin')

@section('title', 'Edit Daftar Price')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Daftar Price</h1>

    <form action="{{ route('daftarprice.update', $daftarprice->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Gambar</label><br>
            @if($daftarprice->gambar)
                <img src="{{ asset($daftarprice->gambar) }}" alt="gambar" width="80" class="mb-2">
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="{{ old('nama_kategori', $daftarprice->nama_kategori) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $daftarprice->harga) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('settingprice.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
