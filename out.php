<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Nilai Mahasiswa</h1>
    <?php
    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai1'], $_POST['nilai2'], _POST['nilai_uts'], _POST['nilai_uas'], _POST['nilai_absen'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai1 = $_POST['nilai1']*0.15;
        $nilai2 = $_POST['nilai2']*0.15;
        $nilai_uts = $_POST['nilai_uts']*0.20;
        $nilai_uas = $_POST['nilai_uas']*0.30;
        $nilai_absen = $_POST['nilai_absen']*0.20;
        $total_nilai = $nilai1 + $nilai2 + $nilai_uts + $nilai_uas + $nilai_absen;
        
        echo "total nilai: $total_nilai";

        if ($nilai >= 0 && $nilai < 50) {
            $grade = "E";
        } elseif ($nilai >= 50 && $nilai < 60) {
            $grade = "D";
        } elseif ($nilai >= 60 && $nilai < 75) {
            $grade = "C";
        } elseif ($nilai >= 75 && $nilai < 85) {
            $grade = "B";
        } elseif ($nilai >= 85 && $nilai <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "Nilai: $nilai, dikonversi menjadi Grade: $grade";
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>