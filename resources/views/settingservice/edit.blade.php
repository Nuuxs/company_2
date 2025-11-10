@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-4">Edit Pengaturan Service & Testimoni</h1>

    <form action="{{ route('settingservice.update', $settingservice->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $settingservice->judul) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Service</label>
            <input type="text" name="judul_service" value="{{ old('judul_service', $settingservice->judul_service) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subjudul Service</label>
            <input type="text" name="subjudul_service" value="{{ old('subjudul_service', $settingservice->subjudul_service) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Testimoni</label>
            <input type="text" name="judul_testimoni" value="{{ old('judul_testimoni', $settingservice->judul_testimoni) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subjudul Testimoni</label>
            <input type="text" name="subjudul_testimoni" value="{{ old('subjudul_testimoni', $settingservice->subjudul_testimoni) }}" class="form-control" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
