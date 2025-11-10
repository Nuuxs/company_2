<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="judul" value="{{ old('judul', $setting->judul ?? '') }}" class="form-control @error('judul') is-invalid @enderror" required>
    @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Subjudul</label>
    <input type="text" name="subjudul" value="{{ old('subjudul', $setting->subjudul ?? '') }}" class="form-control @error('subjudul') is-invalid @enderror" required>
    @error('subjudul') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Gambar</label>
    @if (!empty($setting->gambar))
        <div class="mb-2">
            <img src="{{ asset($setting->gambar) }}" class="img-thumbnail" style="max-height:150px;">
        </div>
    @endif
    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
    @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $setting->deskripsi ?? '') }}</textarea>
    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Text Button</label>
    <input type="text" name="text_button" value="{{ old('text_button', $setting->text_button ?? '') }}" class="form-control @error('text_button') is-invalid @enderror" required>
    @error('text_button') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Icon</label>
    <input type="text" name="icon" value="{{ old('icon', $setting->icon ?? '') }}" class="form-control @error('icon') is-invalid @enderror" required>
    @error('icon') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">No HP</label>
    <input type="text" name="no_hp" value="{{ old('no_hp', $setting->no_hp ?? '') }}" class="form-control @error('no_hp') is-invalid @enderror" required>
    @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Keterangan No HP</label>
    <input type="text" name="ket_no_hp" value="{{ old('ket_no_hp', $setting->ket_no_hp ?? '') }}" class="form-control @error('ket_no_hp') is-invalid @enderror" required>
    @error('ket_no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Judul Team</label>
    <input type="text" name="judul_team" value="{{ old('judul_team', $setting->judul_team ?? '') }}" class="form-control @error('judul_team') is-invalid @enderror" required>
    @error('judul_team') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Subjudul Team</label>
    <input type="text" name="subjudul_team" value="{{ old('subjudul_team', $setting->subjudul_team ?? '') }}" class="form-control @error('subjudul_team') is-invalid @enderror" required>
    @error('subjudul_team') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
