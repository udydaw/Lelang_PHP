<!DOCTYPE html>
<html>
  <head>
    <title>Ubah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            max-width: 99vw;
        }
    </style>
  </head>
  <body>
    <?php 
    include "sidebar.php";
    include "../config/database_connaction.php";
    $qry_get_barang=mysqli_query($db, "select * from tb_barang where id_barang ='".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_get_barang);
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Ubah Barang</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="../model/ubah_barang.php" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>">
              <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?=$dt_barang['nama_barang']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control" name="tgl" value="<?=$dt_barang['tgl']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Harga Awal</label>
                  <input type="text" class="form-control" name="harga_awal" value="<?=$dt_barang['harga_awal']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi_barang"><?=$dt_barang['deskripsi_barang']?></textarea>
              </div>
              <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input class="form-control" type="file" name="foto_produk">
              </div>
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </body>
</html>