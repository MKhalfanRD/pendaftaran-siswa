<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list-siswa</title>
</head>
<body>
    <head>
        <h2>Siswa yang usdah mendaftar</h2>
    </head>
    <nav>
        <a href="form-daftar.php">
            <h4>Tambah Baru</h4>
        </a>
    </nav>

    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from calon_siswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                echo "<td>";
                    echo "<a href = 'form-edit.php?id= ".$siswa['id']."'>Edit</a> |";
                    echo "<a href = 'proses-hapus.php?id= ".$siswa['id']."'>Hapus</a>";
                "</td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>