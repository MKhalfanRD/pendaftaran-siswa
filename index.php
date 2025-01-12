<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>
    <h4>menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">
            <p>daftar baru</p>
        </a></li>
            <li><a href="list-siswa.php">
            <p>pendaftar</p>
        </a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
            <p>
                <?php 
                    if($_GET['status'] == 'sukses'){
                        echo 'Pendaftaran berhasil';
                    } else {
                        echo 'Pendaftaran gagal';
                    }
                ?>
            </p>
    <?php endif; ?>
</body>
</html>