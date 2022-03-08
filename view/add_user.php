<!DOCTYPE html>
<html>
  <head>
    <title>Input Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            max-width: 99vw;
        }
    </style>
  </head>
  <body>
    <?php include "sidebar.php" ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Add Member</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="../model/add_user.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_member" value="<?=$dt_user['id_member']?>">
              <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama">
              </div>
              <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username">
              </div>
              <div class="mb-3">
                  <label class="form-label">password</label>
                  <input type="password" class="form-control" name="password">
              </div>
              <div class="mb-3">
                  <label class="form-label">Telephone</label>
                  <input type="number" class="form-control" name="telp">
              </div>  
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </body>
</html>