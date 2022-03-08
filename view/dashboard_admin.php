<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>

    <!-- Embedding CSS -->
    <link rel="stylesheet" href="../asset/css/dashboard_admin.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
    <body>
        <?php
            include "sidebar.php";
            include "../config/database_connaction.php"; 
            $qry_user=mysqli_query($db,"select * from tb_petugas");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
            }
            $qry_produk=mysqli_query($db,"select * from tb_masyarakat");
            $no1=0;
            while($data_produk=mysqli_fetch_array($qry_produk)){
                $no1++;
            }
            $qry_lelang=mysqli_query($db,"select * from tb_lelang");
            $no2=0;
            while($data_lelang=mysqli_fetch_array($qry_lelang)){
                $no2++;
            }
            $qry_barang=mysqli_query($db,"select * from tb_barang");
            $no3=0;
            while($data_barang=mysqli_fetch_array($qry_barang)){
                $no3++;
            }
        ?>
        <section class="home-section">
            <div class="text">Dashboard</div>
            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" >
                        <div class="right-side">
                            <div class="box-topic">Total Petugas</div>
                            <div class="number"><?=$no?></div>
                        </div>
                        <i class="fas fa-user cart"></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total User</div>
                            <div class="number"><?=$no1?></div>
                        </div>
                        <i class="fas fa-users cart tree"></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Lelang</div>
                            <div class="number"><?=$no2?></div>
                        </div>
                        <i class="fas fa-shopping-cart cart two"></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Barang</div>
                            <div class="number"><?=$no3?></div>
                        </div>
                        <i class="fas fa-box-open cart four"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>