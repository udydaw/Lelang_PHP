<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $telp=$_POST['telp'];
        include "../config/database_connaction.php";

        $insert=mysqli_query($db,"insert into tb_masyarakat (nama, username, password, telp) value ('".$nama."', '".$username."' , '".md5($password)."', '".$telp."')") or die(mysqli_error($db));

        if($insert){
            echo "<script>alert('Sukses menambahkan User');location.href='../view/user_admin.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan User');location.href='../view/user_admin.php';</script>";
        }
    }
?>
