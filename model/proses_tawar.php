<?php
    session_start();
    include "../config/database_connaction.php";
    $id_user = $_POST['id_user']; 
    $id_barang = $_POST['id_barang'];
    // echo $id_barang;
    $harga_tawar = $_POST['harga_tawar'] ;
    $id_petugas=1;
    $harga = $_POST['harga_awal'];
    $tgl_lelang = date('Y-m-d');

        if ($harga_tawar <= $harga) {
            echo "<script>alert('Tawaran anda dibawah harga lelang');location.href='../view/tawar_barang.php?id_barang=$id_barang'</script>";
        }else {
            $qry = mysqli_query($db,"select * from history_lelang where id_user = '".$id_user."' and id_barang = '".$id_barang."' ");
            if(mysqli_num_rows($qry) > 0){
                mysqli_query($db,"UPDATE history_lelang SET penawaran_harga = '".$harga_tawar."', WHERE id_user = '".$id_user."'");

                $query_lelang = mysqli_query($db, "INSERT INTO tb_lelang (id_barang, tgl_lelang, harga_akhir, id_user, id_petugas)
                VALUES ('".$id_barang."', '".$tgl_lelang."', '".$harga_tawar."', '".$id_user."', '".$id_petugas."' )");
                mysqli_query($db,"UPDATE tb_barang SET harga_awal = '".$harga_tawar."', id_pemenang = '".$id_user."' WHERE id_barang = '".$id_barang."'");
                
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='../view/tawar_barang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='../view/tawar_barang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($koneksi);
                }
            }else {       

                $query_history_lelang = mysqli_query($db, "INSERT INTO history_lelang (id_barang, id_user, penawaran_harga, tgl_lelang)
                VALUES ('".$id_barang."', '".$id_user."', '".$harga_tawar."', '".$tgl_lelang."' )");

                $query_lelang = mysqli_query($db, "INSERT INTO tb_lelang (id_barang, tgl_lelang, harga_akhir, id_user, id_petugas)
                VALUES ('".$id_barang."', '".$tgl_lelang."', '".$harga_tawar."', '".$id_user."', '".$id_petugas."')");

                mysqli_query($db,"UPDATE tb_barang SET harga_awal = '".$harga_tawar."', id_pemenang = '".$id_user."' WHERE id_barang = '".$id_barang."'");

        
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='../view/tawar_barang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='../view/tawar_barang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($koneksi);
                }

            }    
        }