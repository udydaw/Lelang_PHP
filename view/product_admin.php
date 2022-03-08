<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product | Admin</title>

        <!-- Embedding CSS -->
        <link rel="stylesheet" href="../asset/css/dashboard_admin.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            include "sidebar.php";
        ?>
        <section class="home-section">
                <div class="text">Product Detail</div>
                <div class="col-11 py-3 justify-content-end text-end">
                    <a href="tambah_product_admin.php"><div class="btn btn-primary">
                        <div class="d-inline-flex align-items-center">
                            <i class="fas fa-cart-plus"></i>
                            <div class="ps-2">
                                Tambah
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="home-content table">
                    <div class="col-11 position-relative start-50 translate-middle-x">
                        <table class="table table-hover table-striped table-bordered striped text-center">
                            <thead>
                                <tr class="table-top text-white">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "../proses/koneksi.php"; 
                                    $qry_product=mysqli_query($conn,"select * from produk");
                                    $no=0;
                                    while($data_product=mysqli_fetch_array($qry_product)){
                                    $no++;
                                ?>
                                <tr>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$data_product['nama_produk']?></td>
                                    <td><?=$data_product['harga']?></td>
                                    <td><?=$data_product['deskripsi']?></td>
                                    <td><?=$data_product['qty']?></td>
                                    <td><img src="<?php echo "../asset/product image/".$data_product['foto_produk']; ?>"width="150" height="150"></td>
                                    <td class="align-middle">
                                        <a href="ubah_produk.php?id_produk=<?=$data_product['id_produk']?>" class="btn btn-success"><i class="fas fa-edit pe-2"></i>Ubah</a> | 
                                        <a href="../proses/proses_hapus_produk.php?id_produk=<?=$data_product['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt pe-2"></i>Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- MDB -->
            <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"
            ></script>
            <!-- AOS -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
    </body>
</html>