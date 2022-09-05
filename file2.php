<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Halaman Tujuan </title>
    <style>
        body{
            background: url(jw.jpg) no-repeat;
            background-size: cover;
            font-family: sans-serif ;
            text-align: center;
            color: #E64848; 
            margin-top: 250px;

        }
    </style>
</head>
<body>

    <h1> ANDA BERHASIL LOGIN!!! </h1>

</body>
</html>
<?php 
    session_start();
    $un = $_POST['uname'];
    echo "username = ".$un." ";
    $mail = $_POST['em'];
    echo "Email = ".$mail." ";
    $ps = $_POST['pw'];
    echo "password = ".$ps." ";
    $_SESSION['nama'] = $un;
    $_SESSION['eaddres'] = $mail;
    $_SESSION['sandi'] = $ps;

    ?>
