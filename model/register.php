<?php
    if($_POST){
        $nama_petugas = $_POST['nama_petugas'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_level = $_POST['id_level'];
        
        include "../config/database_connaction.php";
        $insert=mysqli_query($db,"insert into tb_petugas (nama_petugas, username, password, id_level)
        value ('".$nama_petugas."','".$username."','".md5($password)."', '".$id_level."')") or die(mysqli_error($db));
        if($insert){
            echo "<script>alert('Sukses membuat akun');location.href='../view/login.php';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun');location.href='../view/login.php';</script>";
        }
    }
?>