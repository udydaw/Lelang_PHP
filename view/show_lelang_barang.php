<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard_admin.css">
</head>
<body>
    <?php
        include "sidebar.php";
    ?>
    <section class="home-section">
        <div class="home-content">
            <div class="container">
                <h3 class="text">Barang Yang Dilelang</h3>
            </div>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-3">
                        <?php
                        include "../config/database_connaction.php"; 
                        $query_barang = mysqli_query($db, "select * from tb_barang");
                        while($data_barang = mysqli_fetch_array($query_barang)){
                        ?>  
                        <div class="col mb-3">
                            <div class="card shadow-sm">
                                <img src="../model/foto/<?=$data_barang['foto_produk']?>" class="card-img-top" width="231px" height="259px" ><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/></img>
                                <div class="card-body">
                                    <p class="card-text judul-produk"><b><?=$data_barang['nama_barang']?></b></p>
                                    <p class="card-text harga-produk">RP. <?=$data_barang['harga_awal']?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="tawar_barang.php?id_barang=<?=$data_barang['id_barang']?>"><button type="submit" class="btn btn-secondary">Tawar</button></a>
                                        </div>
                                        <!-- <small class="text-muted"><?=$data_barang['merek']?></small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>