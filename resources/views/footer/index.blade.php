@extends('layout.bingkaiadmin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Pengaturan Footer</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ $footer ? route('footer.update', $footer->id) : route('footer.store') }}"
                  method="POST">
                @csrf
                @if($footer)
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label class="form-label">Nama Company</label>
                    <input type="text" name="nama_company" class="form-control"
                           value="{{ old('nama_company', $footer->nama_company ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $footer->deskripsi ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2">{{ old('alamat', $footer->alamat ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" name="no_hp" class="form-control"
                           value="{{ old('no_hp', $footer->no_hp ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email', $footer->email ?? '') }}">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="link_ig" class="form-control"
                               value="{{ old('link_ig', $footer->link_ig ?? '') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="link_fb" class="form-control"
                               value="{{ old('link_fb', $footer->link_fb ?? '') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="link_twitter" class="form-control"
                               value="{{ old('link_twitter', $footer->link_twitter ?? '') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">LinkedIn</label>
                        <input type="text" name="link_in" class="form-control"
                               value="{{ old('link_in', $footer->link_in ?? '') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Website</label>
                    <input type="text" name="nama_website" class="form-control"
                           value="{{ old('nama_website', $footer->nama_website ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Teks Copyright</label>
                    <input type="text" name="teks_copyright" class="form-control"
                           value="{{ old('teks_copyright', $footer->teks_copyright ?? '') }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ $footer ? 'Update' : 'Simpan' }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
