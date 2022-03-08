<?php
    include "../config/database_connaction.php";
    $id_barang= $_GET['id_barang'];
    $status = 'tutup';

    $update = mysqli_query($db,"UPDATE tb_barang SET status = '".$status."' WHERE id_barang = '".$id_barang."'");
    if ($update) {
        echo "<script>alert('Anda Berhasil menutup lelang');location.href='../view/show_lelang.php'</script>";
    }
    else{
        echo "<script>alert('Gagal menutup lelang');location.href='proses_buka_lelang.php'</script>";
        // echo mysqli_error($koneksi);
    }
?>