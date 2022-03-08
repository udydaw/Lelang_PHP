<?php
    if($_GET['id_barang']){
    include "../config/database_connaction.php";
        $qry_hapus=mysqli_query($db,"delete from tb_barang where id_barang='".$_GET['id_barang']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus barang');location.href='../view/show_barang.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus barang');location.href='../view/show_barang';</script>";
            }
    }
?>