@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Informasi Blog</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('informasiblog.update', $informasiblog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                @if($informasiblog->gambar)
                    <div class="mb-3">
                        <img src="{{ asset($informasiblog->gambar) }}" width="120" class="rounded mb-2">
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Folder</label>
                    <input type="text" name="name_folder" class="form-control" value="{{ old('name_folder', $informasiblog->name_folder) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $informasiblog->judul) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $informasiblog->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Text Button</label>
                    <input type="text" name="text_button" class="form-control" value="{{ old('text_button', $informasiblog->text_button) }}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
