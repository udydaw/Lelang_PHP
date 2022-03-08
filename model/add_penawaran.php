<?php
    if($_POST){
        $id_lelang=$_POST['id_lelang'];
        $penawaran_harga=$_POST['penawaran'];

        include "../config/database_connaction.php";
        
        $qry_lelang=mysqli_query($db,"SELECT * FROM tb_lelang");
        $data_lelang=mysqli_fetch_assoc($qry_lelang);
        $id_barang = $data_lelang['id_barang'];
        $id_user = $data_lelang['id_user'];

        $insert=mysqli_query($db,"insert into history_lelang (id_lelang, id_barang, id_user, penawaran_harga) value ('".$id_lelang."', '".$id_barang."', '".$id_user."', '".$penawaran_harga."' )") or die(mysqli_error($db));

        if($insert){
            echo "<script>alert('Sukses menambahkan penawaran');location.href='../view/show_lelang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan penawaran');location.href='../view/add_penawaran.php';</script>";
        }
    }
?>
