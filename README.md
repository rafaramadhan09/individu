# DuitKu

DuitKu adalah aplikasi pencatat keuangan pribadi sederhana untuk membantu memantau pemasukan, pengeluaran, dan saldo.

## Fitur

- Mencatat pemasukan dan pengeluaran.
- Mengelompokkan transaksi berdasarkan kategori.
- Menghitung saldo keseluruhan secara otomatis.
- Menampilkan ringkasan pemasukan dan pengeluaran bulan berjalan.
- Menampilkan grafik arus kas enam bulan terakhir.
- Melihat, mencari, dan memfilter transaksi.
- Menghapus transaksi yang sudah tidak diperlukan.
- Mengekspor seluruh transaksi ke file CSV.

## Menjalankan aplikasi

Aplikasi ini dibuat menggunakan HTML, CSS, dan JavaScript biasa tanpa proses instalasi dependensi.

1. Unduh atau clone repository.
2. Buka file `index.html` di browser.
3. Tambahkan transaksi melalui formulir di sebelah kanan dashboard.

## Penyimpanan data

Data transaksi disimpan di `localStorage` browser pada perangkat yang digunakan. Versi awal ini belum memakai akun, server, atau sinkronisasi antarperangkat. Menghapus data situs atau penyimpanan browser dapat menghapus catatan, jadi ekspor CSV secara berkala untuk membuat cadangan.

## Struktur file

- `index.html` — struktur halaman aplikasi.
- `styles.css` — tampilan responsif.
- `app.js` — logika transaksi, ringkasan, grafik, penyimpanan, dan ekspor.

## Catatan

DuitKu merupakan alat pencatatan sederhana, bukan layanan perbankan dan tidak terhubung ke rekening bank.
