<?php 
    include('config.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah'";
        $query = mysqli_query($db, $sql);

        if($query)
        {
            header('Location: list-siswa.php');
        } else {
            die ('Gagal mengubah..');
        }
    }

    else {
        die ('Akses dilarang');
    }
?>