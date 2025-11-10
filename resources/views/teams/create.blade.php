@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-4">Tambah Anggota Tim</h1>

    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @include('teams.partials.form')
        <div class="text-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection
