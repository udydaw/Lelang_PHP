<?php
if ($_POST) {
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $telp=$_POST['telp'];
    
    include "../config/database_connaction.php";
        $update=mysqli_query($db, "update tb_masyarakat set nama='".$nama."', username='".$username."', password='".md5($password)."', telp='".$telp."' where id_user = '".$id_user."'");
    if ($update) {
        echo "<script>alert('Sukses update');location.href='../view/user_admin.php';</script>";
    } else {
        echo "<script>alert('Gagal update');location.href='../view/user_admin.php';</script>";
    }
}
?>