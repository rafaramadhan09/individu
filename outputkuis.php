<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Tambah Data Rak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Tambah Data Rak</h1>
    <?php
    if (isset($_POST['nama_gedung'], $_POST['nama_lantai'], $_POST['nama_ruang'], $_POST['kode_rak'], $_POST['nama_rak'], $_POST['kapasitas_baris'], $_POST['keterangan'])) {
        $nama_gedung = $_POST['nama_gedung'];
        $nama_lantai = $_POST['nama_lantai'];
        $nama_ruang = $_POST['nama_ruang'];
        $kode_rak = $_POST['kode_rak'];
        $nama_rak = $_POST['nama_rak'];
        $kapasitas_baris = $_POST['kapasitas_baris'];
        $keterangan = $_POST['keterangan'];

        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama Gedung : $nama_gedung<br>";
        echo "Nama Lantai : $nama_lantai<br>";
        echo "Nama Ruang : $nama_ruang<br>";
        echo "Kode Rak : $kode_rak<br>";
        echo "Nama Rak : $nama_rak<br>";
        echo "Kapasitas (baris) : $kapasitas_baris<br>";
        echo "Keterangan : $keterangan<br>";
        echo "</div>";
    }   else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>