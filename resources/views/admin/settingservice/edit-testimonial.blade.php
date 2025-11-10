@extends('layout.bingkaiadmin')

@section('content')
<div class="container">
    <h1>Edit Testimonial</h1>

    <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $testimonial->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Nama Client</label>
            <input type="text" name="name_client" class="form-control" value="{{ old('name_client', $testimonial->name_client) }}" required>
        </div>

        <div class="mb-3">
            <label>Profesi</label>
            <input type="text" name="profesi_client" class="form-control" value="{{ old('profesi_client', $testimonial->profesi_client) }}" required>
        </div>

        <div class="mb-3">
            <label>Gambar (opsional)</label><br>
            <img src="{{ asset('uploads/'.$testimonial->gambar) }}" width="100" class="mb-2"><br>
            <input type="file" name="gambar" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('settingservice.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
