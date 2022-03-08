<?php
    if($_GET['id_user']){
    include "../config/database_connaction.php";
        $qry_hapus=mysqli_query($db,"delete from tb_masyarakat where id_user='".$_GET['id_user']."'") or die(mysqli_error($db));
            if($qry_hapus){
                echo "<script>alert('Sukses hapus user');location.href='../view/user_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus user');location.href='../view/user_admin.php';</script>";
            }
    }
?>