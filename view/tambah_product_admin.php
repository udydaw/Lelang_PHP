<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tambah Product | Y2K</title>

        <!-- Embedding CSS -->
        <link rel="stylesheet" href="../asset/css/tambah_product.css">
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid" style="background-color: #E9FFFB;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center my-5">
                        <h2 class="main-text"  data-aos="fade-in" data-aos-duration="1500">Tambah Product</h2>
                    </div>
                    <div class="col-8 position-relative top-0 start-50 translate-middle-x">
                        <form action="../proses/proses_tambah_produk.php" method="POST" enctype="multipart/form-data" class="product-text"  data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
                            <input type="hidden" name="id_pengguna" value="<?=$dt_user['id_pengguna']?>">
                            <div class="mb-4">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama_produk" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Jumlah</label>
                                <input type="text" class="form-control" name="qty" required>
                            </div>
                            <div>
                                <label class="form-label">Foto</label>
                                <input class="form-control" type="file" name="file" required>
                            </div>
                            <a href="product_admin.php" class="btn btn-danger mt-5 product-text"><i class="far fa-window-close pe-2"></i>Back</a>
                            <button type="submit" name="simpan" value="simpan" class="btn btn-success mt-5 product-text"><i class="far fa-check-square pe-2"></i>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>