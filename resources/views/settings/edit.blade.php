@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-4">Edit Pengaturan Website</h1>

    <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        @include('settings.partials.form')
        <div class="text-end">
            <button type="submit" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i> Update
            </button>
        </div>
    </form>
</div>
@endsection
