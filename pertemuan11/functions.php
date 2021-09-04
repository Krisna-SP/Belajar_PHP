<?php
$conn = mysqli_connect("localhost", "root", "toor", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES (DEFAULT, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
    /*
    $query = " INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) 
        VALUES 
        ('$nama', '$nrp', '$email', '$jurusan', '$gambar') 
    ";
    
    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        echo("Error description: " . $conn->error);
    }
    */
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = " UPDATE mahasiswa SET
                nrp ='$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'

            WHERE id = $id
    ";
    
    mysqli_query($conn, $query);
     
    return mysqli_affected_rows($conn);
}


?>