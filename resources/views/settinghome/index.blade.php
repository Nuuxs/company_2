@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Pengaturan Home</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('settinghome.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Opening</label>
                    <textarea name="opening" class="form-control" rows="2">{{ old('opening', $settinghome->opening ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', $settinghome->judul ?? '') }}">
                    @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ old('email', $settinghome->email ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" name="no_hp" class="form-control"
                        value="{{ old('no_hp', $settinghome->no_hp ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Galery</label>
                    <input type="text" name="judul_galery" class="form-control"
                        value="{{ old('judul_galery', $settinghome->judul_galery ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Subjudul Galery</label>
                    <input type="text" name="subjudul_galery" class="form-control"
                        value="{{ old('subjudul_galery', $settinghome->subjudul_galery ?? '') }}">
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>

{{-- image --}}
<div class="container mb-5">
    <h2 class="mb-4">Daftar Slider Foto</h2>

    {{-- Pesan sukses --}}
    {{-- @if(session('success'))
        <div class="alert alert-success" id="alert-success">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('alert-success').style.display = 'none';
            }, 3000);
        </script>
    @endif --}}

    {{-- Form tambah image --}}
    <div class="card mb-4">
        <div class="card-header">Tambah Image</div>
        <div class="card-body">
            <form action="{{ route('sliderfoto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Pilih Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    {{-- Tabel daftar image --}}
    <div class="card">
        <div class="card-header">Data Slider</div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sliderfotos as $key => $sliderfoto)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <img src="{{ asset($sliderfoto->image) }}" alt="slider" width="150" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{ route('sliderfoto.edit', $sliderfoto->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('sliderfoto.destroy', $sliderfoto->id) }}" method="POST"
                                      class="d-inline" onsubmit="return confirm('Yakin hapus image ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Belum ada image.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>




{{-- tot --}}

<div class="container">
    <h2 class="mb-4">Daftar Galeri</h2>

    {{-- Pesan sukses --}}
    {{-- @if(session('success'))
        <div class="alert alert-success" id="alert-success">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('alert-success').style.display = 'none';
            }, 3000);
        </script>
    @endif --}}

    {{-- Form tambah image --}}
    <div class="card mb-4 ">
        <div class="card-header">Tambah Image</div>
        <div class="card-body">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Pilih Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    {{-- Tabel daftar image --}}
    <div class="card">
        <div class="card-header">Data Galeri</div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galeris as $key => $galeri)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <img src="{{ asset($galeri->image) }}" alt="slider" width="150" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST"
                                      class="d-inline" onsubmit="return confirm('Yakin hapus image ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Belum ada image.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
