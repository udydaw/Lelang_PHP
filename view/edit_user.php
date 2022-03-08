<!DOCTYPE html>
<html>
  <head>
    <title>Edit User</title>
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
    include "../view/sidebar.php";
    include "../config/database_connaction.php";
    $qry_get_user=mysqli_query($db, "select * from tb_masyarakat where id_user ='".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Edit User</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="../model/proses_ubah_user.php" method="POST">
              <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
              <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?=$dt_user['nama']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="email" class="form-control" name="username" value="<?=$dt_user['username']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" value="<?=$dt_user['password']?>">
              </div>
              <div class="mb-3">
                  <label class="form-label">Telepon</label>
                  <input type="number" class="form-control" name="telp" value="<?=$dt_user['telp']?>">
              </div>
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </body>
</html>