<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang | Admin</title>

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
        ?>
        <section class="home-section">
            <div class="text">Barang Detail</div>
            <div class="col-11 py-3 justify-content-end text-end">
                    <a href="add_barang.php">
                        <div class="btn btn-primary">
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
                                <th>Tanggal</th>
                                <th>Harga Awal</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include "../config/database_connaction.php"; 
                                $qry_barang=mysqli_query($db,"select * from tb_barang");
                                $no=0;
                                while($data_barang=mysqli_fetch_array($qry_barang)){
                                $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data_barang['nama_barang']?></td>
                                <td><?=$data_barang['tgl']?></td>
                                <td><?=$data_barang['harga_awal']?></td>
                                <td><?=$data_barang['deskripsi_barang']?></td>
                                <td><img src="<?php echo "../model/foto/".$data_barang['foto_produk']; ?>" width='150' height='150'></td>
                                <td class="align-middle">
                                    <a href="../view/ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success"><i class="fas fa-exchange-alt pe-2"></i>Ubah</a> | <a href="../model/delate_barang.php?id_barang=<?=$data_barang['id_barang']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt pe-2"></i>Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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