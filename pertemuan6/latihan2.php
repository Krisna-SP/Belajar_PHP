<?php 
// $mahasiswa = [
//     ["krisna surya puta", "07372672", "sistem informatika", "krisnasp@gmail.com"],
//     ["02423372", "Ayu Lestari", "sistem informatika", "lestari61@gmail.com"],
//     ["Aziz Putranto", "27347672", "sistem informatika", "Putra23@gmail.com"],
// ];

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
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>