<?php
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        include "../config/database_connaction.php";
        $qry_login=mysqli_query($db,"select * from tb_petugas where username = '".$username."' and password = '".md5($password)."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_petugas']=$dt_login['id_petugas'];
            $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
            $_SESSION['username']=$dt_login['username'];

            if($dt_login['id_level']=="1") {
                $_SESSION['status_login']=true;
                header("location: ../view/dashboard_admin.php");
            } else if($dt_login['id_level']=="2") {
                $_SESSION['status_login']=true;
                header("location: ../view/dashboard_admin.php");
            }
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='../view/login.php';</script>";
        }
        
    }
?>
