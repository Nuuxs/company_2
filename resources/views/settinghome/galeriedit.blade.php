@extends('layout.bingkaiadmin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Informasi Blog</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                @if($galeri->image)
                    <div class="mb-3">
                        <img src="{{ asset($galeri->image) }}" width="120" class="rounded mb-2">
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
