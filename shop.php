<?php
include('header.php');
$header = new header();
$header->render();
?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop.php">Produk</a>
                    <span class="breadcrumb-item active">Daftar Produk</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


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

        $queryCount = "SELECT COUNT(*) as total FROM tb_produk_pria";
        $resultCount = mysqli_query($koneksi, $queryCount);
        $rowCount = mysqli_fetch_assoc($resultCount);
        $totalProducts = $rowCount['total'];
        ?>
        <div class='row'>
            <?php for ($i = 1; $i <= $totalProducts; $i++): ?>
                <?php $product = $productRepository->getProductById($i); ?>
                <div class='col-lg-3 col-md-4 col-sm-6 pb-1'>
                    <div class='product-item bg-light mb-4'>
                        <div class='product-img position-relative overflow-hidden'>
                            <img class='img-fluid w-100' src='img/<?= $product->getImage() ?>' alt=''
                                style='height: 650px; object-fit: cover;'>
                            <div class='product-action'>
                                <a class='btn btn-outline-dark btn-square' href='beli.php?id=<?php echo $i ?>'><i class='fa fa-shopping-cart'></i></a>
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


        </div>
        </div>


    <!-- Products End -->


<?php
include('footer.php');
$footer = new footer();
$footer->render();
?>