@extends('layout.bingkaiadmin')

@section('content')
<div class="container">
    <h1>Edit Explore Service</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada kesalahan pada input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('exploreservice.update', $exploreservice->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Icon (opsional)</label><br>
            <img src="{{ asset($exploreservice->icon) }}" width="100" class="mb-2"><br>
            <input type="file" name="icon" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $exploreservice->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $exploreservice->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="text_button" class="form-label">Text Button</label>
            <input type="text" name="text_button" class="form-control" value="{{ old('text_button', $exploreservice->text_button) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('settingservice.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
