<?php
    include "../config/database_connaction.php";
    $id_barang= $_GET['id_barang'];
    $status = 'buka';

    $update = mysqli_query($db,"UPDATE tb_barang SET status = '".$status."' WHERE id_barang = '".$id_barang."'");
    if ($update) {
        echo "<script>alert('Anda Berhasil Membuka lelang');location.href='../view/show_lelang.php'</script>";
    }
    else{
        echo "<script>alert('Gagal membuka lelang');location.href='proses_buka_lelang.php'</script>";
        // echo mysqli_error($koneksi);
    }
?>