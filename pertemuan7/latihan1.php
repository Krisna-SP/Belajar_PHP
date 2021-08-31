<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "krisna Surya Putra",
        "nrp" => "07372672",
        "email" => "krisnasp@gmail.com",
        "jurusan" => "Sistem informatika",
        "gambar" => "krisna.png"
    ],
    [
        "nama" => "Aziz Putranto",
        "nrp" => "27347672",
        "email" => "Putra23@gmail.com",
        "jurusan" => "Tekni informatika",
        "gambar" => "aziz.jpg"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php ? 
        nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>
        &email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>
        ">
        <?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
    
</body>
</html>