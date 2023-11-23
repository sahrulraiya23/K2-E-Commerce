<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Akun
                            Saya</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Sign in</button>
                            <button class="dropdown-item" type="button">Sign up</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">E-</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Commerce</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Produk">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Kategori</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Produk</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Halaman <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Keranjang</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="cart.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Menyediakan Berbagai
                                        macam pilihan fashion untuk pria</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="shop.php?pp">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Menyediakan Berbagai
                                        macam pilihan fashion untuk wanita</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="shop.php?pw">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Wanita</h6>
                            <small class="text-body">10 Produk</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-5.jpeg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Pria</h6>
                            <small class="text-body">10 Produk</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <?php

    class Productwanita
    {
        private $id;
        private $name;
        private $price;
        private $image;

        public function __construct($id, $name, $price, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function getImage()
        {
            return $this->image;
        }
    }

    class ProductwanitaRepository
    {
        private $koneksi;

        public function __construct($koneksi)
        {
            $this->koneksi = $koneksi;
        }

        public function getProductById($productId)
        {
            $query = "SELECT * FROM tb_produk_wanita WHERE id = $productId";
            $hasil = mysqli_query($this->koneksi, $query);
            $data = mysqli_fetch_array($hasil);

            return new Productwanita($data['id'], $data['nama_produk'], $data['harga'], $data['gambar']);
        }
    }

    // Penggunaan
    ?>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "ecommerce");
    $productRepository = new ProductwanitaRepository($koneksi);
    ?>

    <div class='container-fluid pt-5 pb-3'>
        <h2 class='section-title position-relative text-uppercase mx-xl-5 mb-4'><span class='bg-secondary pr-3'>Produk
                Wanita</span></h2>

        <div class='row'>
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <?php $product = $productRepository->getProductById($i); ?>
                <div class='col-lg-3 col-md-4 col-sm-6 pb-1'>
                    <div class='product-item bg-light mb-4'>
                        <div class='product-img position-relative overflow-hidden'>
                            <img class='img-fluid w-100' src='img/<?= $product->getImage() ?>' alt=''
                                style='height: 1000px; object-fit: cover;'>
                            <div class='product-action'>
                                <a class='btn btn-outline-dark btn-square' href=''><i class='fa fa-shopping-cart'></i></a>
                                <a class='btn btn-outline-dark btn-square' href='detail.php?idw=<?php echo $i ?>'><i
                                        class='fa fa-search'></i></a>
                            </div>
                        </div>
                        <div class='text-center py-4'>
                            <a class='h6 text-decoration-none text-truncate' href=''>
                                <?= $product->getName() ?>
                            </a>
                            <div class='d-flex align-items-center justify-content-center mt-2'>
                                <h5>Rp.
                                    <?= number_format($product->getPrice(), 0, ',', '.') ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="container text-center">
        <p class="mt-4"><a href='shop.php?pw' class="btn btn-primary">Produk Lainnya</a></p>
    </div>



    </div>
    </div>
    <!-- Products End -->

    <!-- Products Start -->
    <?php

    class Productpria
    {
        private $id;
        private $name;
        private $price;
        private $image;

        public function __construct($id, $name, $price, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function getImage()
        {
            return $this->image;
        }
    }

    class ProductpriaRepository
    {
        private $koneksi;

        public function __construct($koneksi)
        {
            $this->koneksi = $koneksi;
        }

        public function getProductById($productId)
        {
            $query = "SELECT * FROM tb_produk_pria WHERE id = $productId";
            $hasil = mysqli_query($this->koneksi, $query);
            $data = mysqli_fetch_array($hasil);

            return new Productpria($data['id'], $data['nama_produk'], $data['harga'], $data['gambar']);
        }
    }

    // Penggunaan
    ?>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "ecommerce");
    $productRepository = new ProductpriaRepository($koneksi);
    ?>

    <div class='container-fluid pt-5 pb-3'>
        <h2 class='section-title position-relative text-uppercase mx-xl-5 mb-4'><span class='bg-secondary pr-3'>Produk
                Pria</span></h2>

        <div class='row'>
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <?php $product = $productRepository->getProductById($i); ?>
                <div class='col-lg-3 col-md-4 col-sm-6 pb-1'>
                    <div class='product-item bg-light mb-4'>
                        <div class='product-img position-relative overflow-hidden'>
                            <img class='img-fluid w-100' src='img/<?= $product->getImage() ?>' alt=''
                                style='height: 650px; object-fit: cover;'>
                            <div class='product-action'>
                                <a class='btn btn-outline-dark btn-square' href=''><i class='fa fa-shopping-cart'></i></a>
                                <a class='btn btn-outline-dark btn-square' href='detail.php?idp=<?php echo $i ?>'><i
                                        class='fa fa-search'></i></a>
                            </div>
                        </div>
                        <div class='text-center py-4'>
                            <a class='h6 text-decoration-none text-truncate' href=''>
                                <?= $product->getName() ?>
                            </a>
                            <div class='d-flex align-items-center justify-content-center mt-2'>
                                <h5>Rp.
                                    <?= number_format($product->getPrice(), 0, ',', '.') ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="container text-center">
        <p class="mt-4"><a href='shop.php?pp' class="btn btn-primary">Produk Lainnya</a></p>
    </div>


    </div>
    </div>



    <!-- Products End -->


    <!-- Vendor Start -->
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5 ">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Kontak Kami</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jln.H.E.A.Mokodompit, Kendari,
                    Sulawesi Tenggara </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>E-commerce@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 6789</p>
            </div>
            <div class="col-lg-8 col-md-12 mb-5">
                <div class="row justify-content-end">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Produk
                                Kami</a>
                            <a class="text-secondary mb-2" href="cart.php"><i
                                    class="fa fa-angle-right mr-2"></i>Keranjang</a>
                            <a class="text-secondary mb-2" href="checkout.php"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>