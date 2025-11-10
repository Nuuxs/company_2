@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Pengaturan Blog</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('settingblog.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_halaman" class="form-label">Nama Halaman</label>
                    <input type="text" name="nama_halaman" id="nama_halaman"
                        class="form-control @error('nama_halaman') is-invalid @enderror"
                        value="{{ old('nama_halaman', $settingblog->nama_halaman ?? '') }}">

                    @error('nama_halaman')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>

<div class="container py-4">
    <h2 class="mb-4">Pengaturan Blog</h2>

    {{-- SettingBlog Form --}}
    {{-- <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('settingblog.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_halaman" class="form-label">Nama Halaman</label>
                    <input type="text" name="nama_halaman" id="nama_halaman"
                        class="form-control @error('nama_halaman') is-invalid @enderror"
                        value="{{ old('nama_halaman', $settingblog->nama_halaman ?? '') }}">

                    @error('nama_halaman')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div> --}}

    {{-- Informasi Blog Section --}}
    <h4 class="mb-3">Daftar Informasi Blog</h4>

    {{-- Create Form --}}
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('informasiblog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nama Folder</label>
                        <input type="text" name="name_folder" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Text Button</label>
                        <input type="text" name="text_button" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3 w-100">Tambah Informasi Blog</button>
            </form>
        </div>
    </div>

    {{-- Table Data --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Folder</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Text Button</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($informasiblog as $info)
                        <tr>
                            <td>
                                @if($info->gambar)
                                    <img src="{{ asset($info->gambar) }}" width="80" class="rounded">
                                @endif
                            </td>
                            <td>{{ $info->name_folder }}</td>
                            <td>{{ $info->judul }}</td>
                            <td>{{ $info->deskripsi }}</td>
                            <td>{{ $info->text_button }}</td>
                            <td>
                                <a href="{{ route('informasiblog.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('informasiblog.destroy', $info->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center">Belum ada data</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
