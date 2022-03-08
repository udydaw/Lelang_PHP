<?php
    if ($_POST) {
        $id_barang=$_POST["id_barang"];
        $nama_barang = $_POST["nama_barang"];
        $deskripsi_barang = $_POST ["deskripsi_barang"];
        $harga_awal = $_POST ["harga_awal"];
        $file_tmp = $_FILES['foto_produk']['tmp_name'];
        $file_name=rand(0,9999).$_FILES['foto_produk']['name'];
        $file_size= $_FILES['foto_produk']['size'];
        $file_type= $_FILES['foto_produk']['type'];
        $folder="foto/";

        include "../config/database_connaction.php";
        $sql=mysqli_query($db, "select * from tb_barang where id_barang='$id_barang'");
        $produk=mysqli_fetch_array($sql);
        $path=$folder.$produk["foto_produk"];
        if(file_exists($path)){
            unlink($path); 
        }
        if($file_size < 2048000 and ($file_type == "image/jpeg" or $file_type== "image/png")){
            move_uploaded_file($file_tmp, $folder.$file_name);
            if (empty($file_name)){
                $update= mysqli_query ($db, "update tb_barang set nama_barang='".$nama_barang."', deskripsi_barang ='".$deskripsi_barang."', harga_awal='".$harga_awal."' where id_barang='".$id_barang."' ") or die (mysqli_error($db));
                if ($update) {
                    echo "<script> alert ('Sukses update barang'); location.href='../view/show_barang.php' ; </script>";  
                }else{
                    echo "<script> alert ('Gagal update barang'); location.href='../view/show_barang.php' ; </script>";
                } 
            }else{
                $update= mysqli_query ($db, "update tb_barang set nama_barang='".$nama_barang."', deskripsi_barang='".$deskripsi_barang."', harga_awal='".$harga_awal."', foto_produk='".$file_name."' where id_barang='".$id_barang."' ") or die (mysqli_error($db));
                if ($update) {
                    echo "<script> alert ('Sukses update barang'); location.href='../view/show_barang.php' ; </script>";  
                }else{
                    echo "<script> alert ('Gagal update barang'); location.href='../view/show_barang.php' ; </script>";
                } 
            }
           
        }else{
            echo "<script>alert('file tidak sesuai');location.href='../view/show_barang.php';</script>";
        }
    }
?>