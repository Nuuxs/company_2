@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-4">Tambah Statistik</h1>

    <form action="{{ route('stats.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @include('stats.partials.form')
        <div class="text-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection
