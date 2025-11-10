@extends('layout.bingkaiadmin')

@section('content')
    <div class="container">
        <h1>Setting Service</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form SettingService -->
        <form action="{{ route('settingservice.update', $settingservice->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $settingservice->judul }}" required>
            </div>
            <div class="mb-3">
                <label>Judul Service</label>
                <input type="text" name="judul_service" class="form-control" value="{{ $settingservice->judul_service }}"
                    required>
            </div>
            <div class="mb-3">
                <label>Subjudul Service</label>
                <input type="text" name="subjudul_service" class="form-control"
                    value="{{ $settingservice->subjudul_service }}" required>
            </div>
            <div class="mb-3">
                <label>Judul Testimoni</label>
                <input type="text" name="judul_testimoni" class="form-control"
                    value="{{ $settingservice->judul_testimoni }}" required>
            </div>
            <div class="mb-3">
                <label>Subjudul Testimoni</label>
                <input type="text" name="subjudul_testimoni" class="form-control"
                    value="{{ $settingservice->subjudul_testimoni }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <hr>

        <!-- Daftar ExploreService -->
        <h3 class="mt-4">Daftar Explore Service</h3>
        <form  action="{{ route('exploreservice.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-2">
                    <input type="file" name="icon" class="form-control" accept="image/*" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="text_button" class="form-control" placeholder="Text Button" required>
                </div>
                <div class="col-md-12 mb-2">
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" rows="2" required></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th> Icon</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Text Button</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exploreservices as $item)
                    <tr>

                        <td><img src="{{ asset($item->icon) }}" alt="" width="80"> </td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->text_button }}</td>


                        <!-- Bisa tambahkan tombol edit modal jika mau -->
                        <td>
                            <a href="{{ route('exploreservice.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('exploreservice.destroy', $item->id) }}" method="POST"
                                class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                        </td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <!-- Daftar Testimonial -->
        <h3 class="mt-4">Daftar Testimonial</h3>

        <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-2">
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" rows="3" required></textarea>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="name_client" class="form-control" placeholder="Nama Client" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="profesi_client" class="form-control" placeholder="Profesi" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="file" name="gambar" class="form-control" accept="image/*" required>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success w-100">Tambah</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Profesi</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $item)
                    <tr>
                        <td><img src="{{ asset('uploads/' . $item->gambar) }}" alt="" width="80"></td>
                        <td>{{ $item->name_client }}</td>
                        <td>{{ $item->profesi_client }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{ route('testimonial.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST"
                                class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus testimonial ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
