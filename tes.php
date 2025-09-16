<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba tambah</title>
</head>
<body>


    <form action="tambahsiswa.php" method="post">
        <div class="ff">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis">
        </div>
        <div class="ff">
            <label for="namasiswa">Nama Siswa</label>
            <input type="text" name="namasiswa" id="namasiswa">
        </div>
        <div class="ff">
            <label for="jk">Jenis Kelamin</label>
            <input type="text" name="jk" id="jk">
        </div>
        <div class="ff">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div class="ff">
            <label for="tanggallahir">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" id="tanggallahir">
        </div>
        <div class="ff">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <button type="submit">Sumbit</button>
    </form>
</body>
</html>