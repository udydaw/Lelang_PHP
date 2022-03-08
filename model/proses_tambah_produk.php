<?php
    include "koneksi.php";
    if($_POST['simpan']){
        $nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $qty = $_POST['qty'];
        $ekstensi = array("png","jpg","jpeg","gif");
        $namafile = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
        $ukuran = $_FILES['file']['size'];

        if(!in_array($tipe_file, $ekstensi)){
            header("location:../tampil/tambah_product_admin.php?alter=gagal_ekstensi");
        }else {
            if($ukuran < 1044070){
                move_uploaded_file($tmp, '../asset/product image/'.$namafile);
                $query=mysqli_query($conn,"insert into produk (nama_produk, harga, foto_produk, deskripsi, qty)
                value ('".$nama_produk."','".$harga."','".$namafile."','".$deskripsi."','".$qty."')") or die(mysqli_error($conn));
                if($query){
                    echo "<script>alert('Sukses menambahkan produk');location.href='../tampil/product_admin.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan produk');location.href='../tampil/tambah_product_admin.php';</script>";
                }
            }
            else {
                echo "<script>alert('Ukuran File Terlalu Besar');location.href='../tampil/tambah_product_admin.php';</script>";
            }
        }
    }
?>