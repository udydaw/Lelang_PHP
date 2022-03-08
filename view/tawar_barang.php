<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet_beli_produk.css">
</head>
<body>
    <?php
        include "sidebar.php";
        include "../config/database_connaction.php"; 
        $query_detail_barang = mysqli_query($db, "SELECT * FROM tb_barang where id_barang = '".$_GET['id_barang']."' ");
        $data_barang= mysqli_fetch_array($query_detail_barang);
    ?>
    <section class="container">
    <section class="text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Tawar Barang</h1>
        </div>
    </section>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 mt-4 pt-1 mx-2">
                <img src="../model/foto/<?=$data_barang['foto_produk']?>" class="img-fluid rounded-start" alt="..." >
                </div>
                <div class="col-md-7">
                <div class="card-body">
                <form action="../model/proses_tawar.php?" method="POST">
                    <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                    <input type="hidden" name="harga_awal" value="<?=$data_barang['harga_awal']?>">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Produk</td>
                                <td><?=$data_barang['nama_barang']?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?=$data_barang['deskripsi_barang']?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><?=$data_barang['tgl']?></td>
                            </tr>
                            <tr>
                                <td>Harga Awal</td>
                                <td><?=$data_barang['harga_awal']?></td>
                            </tr>
                            <?php
                            if($data_barang['status']=='buka'){ ?>
                                <tr>
                                    <td>Status</td>
                                    <td><?=$data_barang['status']?></td>
                                </tr>
                                <tr>
                                <td>Pembeli</td>
                                <td><select name="id_user" class="form-control">
                                    <option></option>
                                    <?php 
                                        include "../config/database_connaction.php"; 
                                        $qry_masyarakat=mysqli_query($db,"select * from tb_masyarakat");
                                        while($data_masyarakat=mysqli_fetch_array($qry_masyarakat)){
                                            echo '<option value="'.$data_masyarakat['id_user'].'">'.$data_masyarakat['username'].'</option>';    
                                        }
                                    ?>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Masukkan Penawaran anda</td>
                                <td><input type="number" name="harga_tawar" value="<?=$data_barang['harga_awal']?>"></td>
                            </tr>
                            <td colspan="2"><button type="submit" class="btn btn-secondary">Tawar</button></td>
                            <tr>
                                <td><a href="../model/proses_tutup_lelang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-outline-danger">TUTUP</a></td>
                            </tr>
                            <?php
                            }else{?>
                                <tr>
                                    <td>Lelang Ditutup</td>
                                </tr>
                                <tr>
                                    <td>
                                    <a href="../model/proses_buka_lelang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-outline-primary">BUKA</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
                </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-3">History Lelang<h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Penawaran</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../config/database_connaction.php"; 
                            $query_history= mysqli_query($db,"select * from history_lelang join tb_masyarakat on tb_masyarakat.id_user = history_lelang.id_user where id_barang = '".$_GET['id_barang']."' order by penawaran_harga desc");
                            $no=0;
                            while($data_history= mysqli_fetch_array($query_history)) {
                                $no++; 
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data_history["nama"]; ?></td>
                                    <td><?php echo $data_history["penawaran_harga"]; ?></td>
                                    <td><?php echo $data_history["tgl_lelang"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>