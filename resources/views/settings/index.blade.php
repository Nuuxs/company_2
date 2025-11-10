@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Pengaturan Website</h1>
        @if (!$setting)
            <a href="{{ route('settings.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Tambah Data
            </a>
        @endif
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if ($setting)
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center mb-3">
                        @if ($setting->gambar)
                            <img src="{{ asset($setting->gambar) }}" class="img-fluid rounded shadow-sm" alt="Gambar" style="width: 250px;">
                        @else
                            <div class="bg-light border rounded p-4 text-muted">Belum ada gambar</div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h4 class="fw-bold">{{ $setting->judul }}</h4>
                        <p class="text-muted">{{ $setting->subjudul }}</p>
                        <p>{{ $setting->deskripsi }}</p>
                        <p><strong>No HP:</strong> {{ $setting->no_hp }} ({{ $setting->ket_no_hp }})</p>
                        <p><strong>Judul Team:</strong> {{ $setting->judul_team }}</p>
                        <p><strong>Subjudul Team:</strong> {{ $setting->subjudul_team }}</p>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-end gap-2">
                    <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">
            Belum ada data, silakan tambahkan data baru.
        </div>
    @endif
</div>

@if ($stats->count() > 0)
    <div class="card shadow-sm rounded-3 mt-4 ">
        <div class="card-header  d-flex justify-content-between align-items-center">
            <span class="fw-bold">Statistik</span>
            <a href="{{ route('stats.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Stat
            </a>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                @foreach ($stats as $stat)
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <div class="display-6 mb-2">
                                    <i class="{{ $stat->icon }}"></i>
                                </div>
                                <h3 class="fw-bold">{{ $stat->data_angka }}</h3>
                                <p class="text-muted">{{ $stat->keterangan }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-center gap-2">
                                <a href="{{ route('stats.edit', $stat->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('stats.destroy', $stat->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="alert alert-info mt-4">
        Belum ada data statistik. <a href="{{ route('stats.create') }}">Tambah sekarang</a>
    </div>
@endif


@if ($teams->count() > 0)
    <div class="card shadow-sm rounded-3 mt-4">
        <div class="card-header  d-flex justify-content-between align-items-center">
            <span class="fw-bold">Tim Kami</span>
            <a href="{{ route('teams.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($teams as $team)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset($team->gambar) }}" class="card-img-top" alt="{{ $team->nama }}" >
                            <div class="card-body text-center">
                                <h5 class="fw-bold mb-1">{{ $team->nama }}</h5>
                                <p class="text-muted mb-2">{{ $team->divisi }}</p>
                                <div class="d-flex justify-content-center gap-3">
                                    @if($team->link_ig)
                                        <a href="{{ $team->link_ig }}" target="_blank" class="text-danger"><i class="bi bi-instagram fs-5"></i></a>
                                    @endif
                                    @if($team->link_fb)
                                        <a href="{{ $team->link_fb }}" target="_blank" class="text-primary"><i class="bi bi-facebook fs-5"></i></a>
                                    @endif
                                    @if($team->link_in)
                                        <a href="{{ $team->link_in }}" target="_blank" class="text-info"><i class="bi bi-linkedin fs-5"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center gap-2">
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Hapus anggota tim ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="alert alert-info mt-4">
        Belum ada anggota tim. <a href="{{ route('teams.create') }}">Tambah sekarang</a>
    </div>
@endif




@endsection


