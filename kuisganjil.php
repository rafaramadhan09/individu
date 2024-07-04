<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="outputkuis.php" method="post">
        <div class="container mt-5">
        <h1 class="mb-3">Tambah Data Rak</h1>
    <div class="mb-3">
    <form action="hasil.php" method="post" class="needs-validation" novalidate>
            <label for="nama_gedung" class="form-label">Nama Gedung</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>Pilih Gedung</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            </select>
        </div>
    <div class="mb-3">
            <label for="nama_lantai" class="form-label">Nama Lantai</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>Pilih Lantai</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_ruang" class="form-label">Nama Ruang</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>Pilih Ruang</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kode_rak" class="form-label">Kode Rak</label>
            <input type="text" class="form-control" id="kode_rak" name="kode_rak" required>
        </div>
        <div class="mb-3">
            <label for="nama_rak" class="form-label">Nama Rak</label>
            <input type="text" class="form-control" id="nama_rak" name="nama_rak" required>
        </div>
        <div class="mb-3">
            <label for="kapasitas_baris" class="form-label">Kapasitas (baris)</label>
            <input type="text" class="form-control" id="kapasitas_baris" name="kapasitas_baris" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-secondary me-md-2" type="submit">Tutup</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>