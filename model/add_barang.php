<?php
    session_start();
    if($_POST){
        $nama_barang = $_POST['nama_barang'];
        $tgl = $_POST['tgl'];
        $harga_awal = $_POST['harga_awal'];
        $deskripsi_barang = $_POST['deskripsi_barang'];
        $file_tmp = $_FILES['foto_produk']['tmp_name'];
        $file_name=rand(0,9999).$_FILES['foto_produk']['name'];
        $file_size= $_FILES['foto_produk']['size'];
        $file_type= $_FILES['foto_produk']['type'];

        include "../config/database_connaction.php";
        if($file_size < 2048000 and ($file_type == "image/jpeg" or $file_type== "image/png")){
            move_uploaded_file($file_tmp, 'foto/'.$file_name);
            $insert=mysqli_query($db,"insert into tb_barang (nama_barang, tgl, harga_awal, deskripsi_barang, foto_produk) value ('".$nama_barang."', '".$tgl."', '".$harga_awal."', '".$deskripsi_barang."', '".$file_name."')") or die(mysqli_error($db));
            if($insert){
                echo "<script>alert('Sukses menambahkan barang');location.href='../view/show_barang.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan barang');location.href='../view/show_barang.php';</script>";
            } 
        }else{
            echo "<script>alert('file tidak sesuai');location.href='show_barang.php';</script>";
        }
    }

    // if($_POST){
    //     $qry_barang=mysqli_query($db,"select * from tb_barang   where id_buku = '".$_GET['id_buku']."'");
    //     $dt_buku=mysqli_fetch_array($qry_get_buku);
    //     $_SESSION['cart'][]=array(
    //     'id_buku'=>$dt_buku['id_buku'],
    //     'nama_buku'=>$dt_buku['nama_buku'],
    //     'qty'=>$_POST['jumlah_pinjam']
    //     );
    // }
?>