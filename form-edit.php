<?php
    include('config.php');

    if(!isset($_GET['id'])){
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die('data tidak ditemukan...');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-edit</title>
</head>
<body>
    <header>
        <h3>Formulir Edit</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id']?>">

        <div class="nama">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" value="<?php echo $siswa['nama']?>">
        </div>
        <div class="alamat">
            <label for="alamat">Alamat :</label>
            <textarea name="alamat"><?php echo $siswa['alamat']?></textarea>
        </div>
        <div class="jenis_kelamin">
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="L" <?php echo $siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="P" <?php echo $siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan</label>
        </div>
        <div class="agama">
            <label for="agama">Agama : </label>
            <select name="agama">
                <option value="islam" <?php echo $siswa['agama'] == 'islam' ? 'selected' : '' ?>>Islam</option>
                <option value="katolik" <?php echo $siswa['agama'] == 'katolik' ? 'selected' : '' ?>>Katolik</option>
                <option value="budha" <?php echo $siswa['agama'] == 'budha' ? 'selected' : '' ?>>Budha</option>
                <option value="hindu" <?php echo $siswa['agama'] == 'hindu' ? 'selected' : '' ?>>Hindu</option>
            </select>
        </div>
        <div class="sekolah_asal">
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal']?>">
        </div>
        <div class="simpan">
            <input type="submit" value="Simpan" name="simpan">
        </div>
    </form>
</body>
</html>