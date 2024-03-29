<?php
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * from kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($con, "SELECT * from produk");
$jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background: #fffdd0;
        border-radius: 15px;
    }

    .summary-produk {
        background-color: #fffdd0;
        border-radius: 15px;
    }

    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa-solid fa-house-chimney"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Hello, <?php echo $_SESSION['username']; ?></h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-bars fa-7x text-black-65"></i>
                            </div>
                            <div class="col-6">
                                <h3 class="fs-2">Category</h3>
                                <p class="fs-4"><?php echo $jumlahKategori; ?> Categories</p>
                                <p><a href="kategori.php" class="text-black">See Details</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="kotak summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-box fa-7x text-black-65"></i>
                            </div>
                            <div class="col-6">
                                <h3 class="fs-2">Product</h3>
                                <p class="fs-4"><?php echo $jumlahProduk; ?> Products</p>
                                <p><a href="produk.php" class="text-black">See Details</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>