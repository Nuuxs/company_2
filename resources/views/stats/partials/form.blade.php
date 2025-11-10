<div class="mb-3">
    <label class="form-label">Icon</label>
    <input type="text" name="icon" value="{{ old('icon', $stat->icon ?? '') }}" class="form-control @error('icon') is-invalid @enderror" placeholder="contoh: bi bi-people" required>
    @error('icon') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Data Angka</label>
    <input type="number" name="data_angka" value="{{ old('data_angka', $stat->data_angka ?? '') }}" class="form-control @error('data_angka') is-invalid @enderror" required>
    @error('data_angka') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Keterangan</label>
    <input type="text" name="keterangan" value="{{ old('keterangan', $stat->keterangan ?? '') }}" class="form-control @error('keterangan') is-invalid @enderror" required>
    @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
