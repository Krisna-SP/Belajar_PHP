<?php
// cek apakah tombol sumbit sudah tekan atau belum
if( isset($_POST["submit"]) ) {
    //cek username & password
    if( $_POST["username"] == "krisnasp" && $_POST["Password"] ==
        "r3n0v451" ) {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="Password">Password :</label>
                <input type="Password" name="Password" id="Password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
            

        </form>
    </ul>
</body>
</html>