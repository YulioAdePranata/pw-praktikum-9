<?php 
    require 'functions.php';

    if( isset($_POST["submit"])){
        if(tambah($_POST) > 0) {
            echo "berhasil";
        } else {
            echo "gagal!";
        }
    } 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>
    <form action="" method="post">
        <ul>
    
                <label for="name">Name</label>
                <input type="text" name="name">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email">
                <br>
                <label for="address">Address</label>
                <input type="text" name="address">
                <br>
                <label for="gender">Gender</label>
                <select name="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <br>
                <label for="position">Position</label>
                <input type="text" name="position">
                <br>
                <label for="status">Status</label>
                <select name="status">
                    <option>Fulltime</option>
                    <option>Parttime</option>
                </select>
                <br>
            <button type="submit" name="submit">
                Submit
            </button>
        </ul>
    </form>
    <a href="index.php">Kembali ke daftar karyawan</a>
</body>
</html>