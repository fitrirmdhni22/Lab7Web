<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Diri dan Pekerjaan</title>
</head>
<body>

<h2>Form Input Data Diri</h2>

<form method="post" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label>Pekerjaan:</label><br>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
        <option value="Kasir">Kasir</option>
    </select><br><br>

    <input type="submit" name="submit" value="Tampilkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung umur
    $tanggal_sekarang = new DateTime();
    $lahir = new DateTime($tanggal_lahir);
    $umur = $tanggal_sekarang->diff($lahir)->y;

    // Tentukan gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case "Programmer":
            $gaji = 8000000;
            break;
        case "Desainer":
            $gaji = 6000000;
            break;
        case "Guru":
            $gaji = 5000000;
            break;
        case "Dokter":
            $gaji = 12000000;
            break;
        case "Kasir":
            $gaji = 4000000;
            break;
        default:
            $gaji = 0;
    }

    // Tampilkan output
    echo "<h3>Hasil Output:</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
}
?>

</body>
</html>