@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-4">Edit Statistik</h1>

    <form action="{{ route('stats.update', $stat->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        @include('stats.partials.form')
        <div class="text-end">
            <button type="submit" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i> Update
            </button>
        </div>
    </form>
</div>
@endsection
