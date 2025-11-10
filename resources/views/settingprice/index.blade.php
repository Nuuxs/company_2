@extends('layout.bingkaiadmin')

@section('title', 'Setting Price')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Setting Price</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('settingprice.update') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Halaman</label>
                    <input type="text" name="nama_halaman" class="form-control"
                        value="{{ old('nama_halaman', $settingprice->nama_halaman ?? '') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Text Price</label>
                    <input type="text" name="text_price" class="form-control"
                        value="{{ old('text_price', $settingprice->text_price ?? '') }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Keterangan Price</label>
                    <textarea name="ket_price" class="form-control" rows="2" required>{{ old('ket_price', $settingprice->ket_price ?? '') }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Judul Price</label>
                    <input type="text" name="judul_price" class="form-control"
                        value="{{ old('judul_price', $settingprice->judul_price ?? '') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Text Discount</label>
                    <input type="text" name="text_discount" class="form-control"
                        value="{{ old('text_discount', $settingprice->text_discount ?? '') }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Discount</label>
                    <input type="text" name="discount" class="form-control"
                        value="{{ old('discount', $settingprice->discount ?? '') }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Keterangan Discount</label>
                    <input type="text" name="ket_discount" class="form-control"
                        value="{{ old('ket_discount', $settingprice->ket_discount ?? '') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Deskripsi Discount</label>
                    <textarea name="deskripsi_discount" class="form-control" rows="3" required>{{ old('deskripsi_discount', $settingprice->deskripsi_discount ?? '') }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Text Button</label>
                    <input type="text" name="text_button" class="form-control"
                        value="{{ old('text_button', $settingprice->text_button ?? '') }}" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>




        <hr>
        <h3 class="mt-4 mb-3">Daftar Price</h3>

        <!-- Tombol Tambah -->
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createDaftarPriceModal">
            + Tambah Daftar Price
        </button>

        <!-- Modal Create -->
        <div class="modal fade" id="createDaftarPriceModal" tabindex="-1" aria-labelledby="createDaftarPriceModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createDaftarPriceModalLabel">Tambah Daftar Price</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('daftarprice.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Price -->
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Kategori</th>
                    <th>Harga</th>
                    <th width="160px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($daftarprices as $dp)
                    <tr>
                        <td>
                            @if ($dp->gambar)
                                <img src="{{ asset($dp->gambar) }}" alt="gambar" width="60">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td>{{ $dp->nama_kategori }}</td>
                        <td>$ {{ number_format($dp->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('daftarprice.edit', $dp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('daftarprice.destroy', $dp->id) }}" method="POST"
                                style="display:inline-block;" onsubmit="return confirm('Hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
