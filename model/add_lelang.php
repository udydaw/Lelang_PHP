<?php
    if($_POST){
        session_start();
        $tanggal=$_POST['tanggal'];
        $harga=$_POST['harga_akhir'];
        $id_petugas=$_SESSION['id_petugas'];
        $id_barang=$_POST['id_barang'];
        $id_user=$_POST['id_user'];
        $status = "buka";

        include "../config/database_connaction.php";
        $insert=mysqli_query($db,"insert into tb_lelang (id_barang, id_user, tgl_lelang, harga_akhir, id_petugas, status) value ('".$id_barang."', '".$id_user."' , '".$tanggal."', '".$harga."', '".$id_petugas."', '".$status."')") or die(mysqli_error($db));

        if($insert){
            echo "<script>alert('Sukses menambahkan lelang');location.href='../view/show_lelang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan lelang');location.href='../view/add_lelang.php';</script>";
        }
    }
?>
