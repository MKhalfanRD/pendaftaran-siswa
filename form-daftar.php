<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-daftar</title>
</head>
<body>
    <header>
        <h2>Formulir Pendaftaran</h2>
    </header>
    <form action="proses-daftar.php" method="post">
        <div class="nama">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="nama lengkap"/>
        </div>
        <div class="alamat">
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" id="alamat" placeholder="alamat"></textarea>
        </div>
        <div class="jenis-kelamin">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <label> Laki-laki
                <input type="radio" name="jenis_kelamin" value="L">
            </label>
            <label> Perempuan
                <input type="radio" name="jenis_kelamin" value="P">
            </label>
        </div>
        <div class="agama">
            <label for="agama">Agama :</label>
            <select name="agama" id="agama">
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="budha">Budha</option>
                <option value="hindu">Hindu</option>
            </select>
        </div>
        <div class="sekolah_asal">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="nama sekolah"/>
        </div>
        <div class="submit">
            <input type="submit" name="daftar" id="daftar" value="Daftar">
        </div>
    </form>
</body>
</html>