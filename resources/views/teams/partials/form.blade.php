<div class="mb-3">
    <label class="form-label">Gambar</label>
    @if (!empty($team->gambar))
        <div class="mb-2">
            <img src="{{ asset($team->gambar) }}" class="img-thumbnail" style="max-height:150px;">
        </div>
    @endif
    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
    @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Divisi</label>
    <input type="text" name="divisi" value="{{ old('divisi', $team->divisi ?? '') }}" class="form-control @error('divisi') is-invalid @enderror" required>
    @error('divisi') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $team->nama ?? '') }}" class="form-control @error('nama') is-invalid @enderror" required>
    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Instagram</label>
    <input type="url" name="link_ig" value="{{ old('link_ig', $team->link_ig ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Facebook</label>
    <input type="url" name="link_fb" value="{{ old('link_fb', $team->link_fb ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">LinkedIn</label>
    <input type="url" name="link_in" value="{{ old('link_in', $team->link_in ?? '') }}" class="form-control">
</div>
