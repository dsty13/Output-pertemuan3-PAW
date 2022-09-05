<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Halaman pembuktian </title>
    <style>
        body{
            background: url(pjw.jpg) no-repeat;
            background-size: cover;
            font-family: sans-serif ;
            text-align: center;
            color: #E64848; 
            margin-top: 250px;

        }
    </style>
</head>
<body>
</body>
</html>
<?php
session_start();
echo"username:" . $_SESSION['nama']." ";
echo "email:".$_SESSION['eaddres']." ";
echo "password:".$_SESSION['sandi']." ";
?>