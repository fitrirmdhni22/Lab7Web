# Lab 7 PHP Dasar Form Data Diri dan Pekerjaan
# Nama : Fitri Ramadhani
# NIM : 312410085
# Kelas : TI.24.A.1
# Mata Kuliah : Pemrograman Web 1
# Dosen Pengampu : Agung Nugroho, S.Kom., M.Kom.

Proyek ini berisi contoh aplikasi web sederhana menggunakan PHP yang menampilkan form input data diri, menghitung umur dari tanggal lahir, serta menentukan estimasi gaji berdasarkan pilihan pekerjaan.

## Fitur
- **Form input data diri**: nama, tanggal lahir, dan pekerjaan.
- **Perhitungan umur**: menggunakan `DateTime` dan `diff()`.
- **Estimasi gaji**: pemetaan gaji berdasarkan pekerjaan yang dipilih.
- **Output terformat**: gaji ditampilkan dalam format Rupiah.

## Teknologi
- **PHP** (uji pada PHP 7+)
- **HTML** standar (tanpa framework)

## Struktur Proyek
- **php_dasar.php**: Halaman utama yang menampilkan form dan memproses input.

## Cara Menjalankan (XAMPP)
1. Pastikan XAMPP aktif (Apache berjalan).
2. Simpan folder proyek ini di: `htdocs/lab7_php_dasar/`.
3. Akses lewat browser:
   - `http://localhost/lab7_php_dasar/php_dasar.php`
4. Isi form, lalu klik "Tampilkan" untuk melihat hasil.

## Alur Kerja Kode
1. **Tampilkan Form**
   - Method `POST` dengan field: `nama`, `tanggal_lahir` (type `date`), `pekerjaan` (`select`).
2. **Tangkap Input** (saat tombol submit ditekan)
   - Mengecek `isset($_POST['submit'])`.
   - Membaca `$_POST['nama']`, `$_POST['tanggal_lahir']`, `$_POST['pekerjaan']`.
3. **Hitung Umur**
   - `DateTime()` untuk tanggal saat ini dan tanggal lahir.
   - `diff()->y` untuk mendapatkan umur dalam tahun.
4. **Pemetaan Gaji** (switch-case)
   - Programmer: 8.000.000
   - Desainer: 6.000.000
   - Guru: 5.000.000
   - Dokter: 12.000.000
   - Kasir: 4.000.000
   - Default: 0
5. **Tampilkan Hasil**
   - Menampilkan nama, tanggal lahir, umur, pekerjaan, dan gaji dengan `number_format` (format Indonesia).

## Kustomisasi
- **Tambah/ubah pekerjaan dan gaji**: edit blok `switch ($pekerjaan)` di `php_dasar.php`.
- **Validasi tambahan**: tambahkan validasi server-side (misal: rentang tanggal lahir) sesuai kebutuhan.
- **Tampilan**: tambahkan CSS di `<head>` atau file terpisah untuk UI yang lebih baik.

## Catatan Keamanan
- Contoh ini fokus pada konsep dasar. Untuk produksi:
  - Sanitasi dan validasi input lebih ketat (hindari XSS/Injection).
  - Pertimbangkan CSRF token untuk form.

<img width="1366" height="728" alt="image" src="https://github.com/user-attachments/assets/888a1c77-615b-423a-8ae0-650a528b9347" />
 
