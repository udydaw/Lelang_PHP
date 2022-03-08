<!DOCTYPE html>
<html>
  <head>
    <title>Input Lelang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            max-width: 99vw;
        }
    </style>
  </head>
  <body>
    <?php include "sidebar.php"; ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Add Lelang</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="../model/add_lelang.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Penjual</label>
                  <select class="form-control" name="id_user">
                      <?php 
                        include "../config/database_connaction.php"; 
                        $qry_masyarakat=mysqli_query($db,"select * from tb_masyarakat");
                        while($data_masyarakat=mysqli_fetch_array($qry_masyarakat)){
                        ?>
                        <option value="<?=$data_masyarakat['id_user']?>"><?=$data_masyarakat['nama']?></option>
                      <?php } ?>
                  </select>
              </div>
              <div class="mb-3">
                  <label class="form-label">Barang</label>
                  <select class="form-control" name="id_barang">
                      <?php 
                        $qry_lelang=mysqli_query($db,"select * from tb_barang");
                        while($data_lelang=mysqli_fetch_array($qry_lelang)){
                        ?>
                        <option value="<?=$data_lelang['id_barang']?>"><?=$data_lelang['nama_barang']?></option>
                      <?php } ?>
                  </select>
              </div>
              <div class="mb-3">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
              </div>
              <div class="mb-3">
                  <label class="form-label">Harga Akhir</label>
                  <input type="text" class="form-control" name="harga_akhir">
              </div>
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </body>
</html>