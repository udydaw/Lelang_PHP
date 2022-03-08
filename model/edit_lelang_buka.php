<?php
if ($_POST) {
    $id_lelang=$_POST['id_lelang'];
    $status=$_POST['status'];
    

    include "../config/database_connaction.php";
        $update=mysqli_query($db, "update tb_lelang set status='".$status."' where id_lelang = '".$id_lelang."' ");
    if ($update) {
        echo "<script>alert('Sukses update');location.href='../view/show_lelang.php';</script>";
    } else {
        echo "<script>alert('Gagal update');location.href='../view/edit_lelang.php';</script>";
    }
}
?>