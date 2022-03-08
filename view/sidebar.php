<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Embedding CSS -->
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <!-- Embedding JQuery -->
    <script src="../asset/js/jquery-3.4.1.min.js"></script>
    <!-- Font Awoseme -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "../config/database_connaction.php";
          $qry_user=mysqli_query($db,"select * from petugas");
          session_start();
          if($_SESSION['status_login'] != true){
              header('location:login.php');
          }
    ?>
    <div class="sidebar1">
        <div class="logo-details">
            <div class="logo_name">Y2K fashion auction</div>
            <i class="fas fa-bars" id="btn"></i>
        </div>
        <ul class="nav-list1">
        <li>
            <i class="fas fa-search"></i>
            <form id="form">
                <input type="text" placeholder="Search..." id="input" name="value" required>
            </form>
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="dashboard_admin.php">
            <i class="fas fa-tachometer-alt"></i>
            <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
        <a href="user_admin.php">
            <i class="fas fa-users"></i>
            <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
        </li>
        <li>
        <a href="show_barang.php">
            <i class="fas fa-box-open"></i>
            <span class="links_name">Barang</span>
        </a>
        <span class="tooltip">Barang</span>
        </li>

        <li>
        <a href="show_lelang.php">
        <i class="fas fa-coins"></i>
            <span class="links_name">Lelang</span>
        </a>
        <span class="tooltip">Lelang</span>
        </li>
        <li>
        <a href="show_lelang_barang.php">
        <i class="fas fa-coins"></i>
            <span class="links_name">Lelang Barang</span>
        </a>
        <span class="tooltip">Lelang Barang</span>
        </li>
        <li class="profile1">
            <div class="profile-details1">
            <div class="name_job">
                <div class="name">Selamat Datang</div>
                <div class="name"><?=$_SESSION['username']?></div>
            </div>
            </div>
            <a href="../model/logout.php"><i class="fas fa-sign-out-alt" id="log_out"></i></a> 
        </li>
        </ul>
    </div>

    <!-- Embedding JS -->
    <script src="../asset/js/sidebar.js"></script>
</body>
</html>