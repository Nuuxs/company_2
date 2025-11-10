@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Pengaturan Kontak</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('settingcontact.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', $settingcontact->judul ?? '') }}">
                    @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Subjudul</label>
                    <input type="text" name="subjudul" class="form-control @error('subjudul') is-invalid @enderror"
                        value="{{ old('subjudul', $settingcontact->subjudul ?? '') }}">
                    @error('subjudul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Text Link</label>
                    <input type="text" name="text_link" class="form-control"
                        value="{{ old('text_link', $settingcontact->text_link ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $settingcontact->deskripsi ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="url" name="link" class="form-control"
                        value="{{ old('link', $settingcontact->link ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Text Button</label>
                    <input type="text" name="text_button" class="form-control"
                        value="{{ old('text_button', $settingcontact->text_button ?? '') }}">
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
