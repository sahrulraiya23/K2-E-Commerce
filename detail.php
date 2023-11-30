<?php
// Include header.php file
include('header.php');
// Buatlah sebuah instance dari kelas header dan render
$header = new header();
$header ->render();
?>



    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop.php">Produk</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <?php
    // Periksa apakah 'idp' diatur dalam string kueri
    if (isset($_GET['idp'])) {
    ?>

        <?php
        // Mendefinisikan kelas Product pria
        class Productpria
        {
            // Properties
            private $id;
            private $name;
            private $price;
            private $image;
            private $shortDescription;
            private $longDescription;
            
            // Konstruktor untuk menginisialisasi properti
            public function __construct($id, $name, $price, $image, $shortDescription, $longDescription)
            {
                $this->id = $id;
                $this->name = $name;
                $this->price = $price;
                $this->image = $image;
                $this->shortDescription = $shortDescription;
                $this->longDescription = $longDescription;
            }

            // Metode pengambil
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

            public function getShortDescription()
            {
                return $this->shortDescription;
            }

            public function getLongDescription()
            {
                return $this->longDescription;
            }
        }

        // Mendefinisikan kelas ProductpriaRepository
        class ProductpriaRepository
        {
            // Properties
            private $connection;

            // Konstruktor untuk menginisialisasi koneksi
            public function __construct($connection)
            {
                $this->connection = $connection;
            }

            // Metode untuk mendapatkan produk berdasarkan ID dari database
            public function getProductById($id)
            {
                // Implement logic to fetch product from the database by ID (Menerapkan logika untuk mengambil produk dari database berdasarkan ID)
                $id = $_GET['idp'];
                $query = "SELECT * FROM tb_produk_pria WHERE id = $id";
                $result = mysqli_query($this->connection, $query);

                if ($result) {
                    $productData = mysqli_fetch_assoc($result);

                    return new Productpria(
                        $productData['id'],
                        $productData['nama_produk'],
                        $productData['harga'],
                        $productData['gambar'],
                        $productData['detail_singkat'],
                        $productData['detail_lengkap']
                    );
                } else {
                    // Handle database query error( Menangani kesalahan permintaan basis data)
                    return null;
                }
            }
        }

        ?>

        <!-- Shop Detail Start -->
        <div class="container-fluid pb-5">
            <?php
            // Menginstansiasi koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "ecommerce");
            // Membuat sebuah instance dari ProductpriaRepository
            $productRepository = new ProductpriaRepository($koneksi);
            // Dapatkan ID produk dari string kueri
            $i = $_GET['idp'];

            // Dapatkan produk berdasarkan ID
            $product = $productRepository->getProductById($i);
            ?>
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div class="text-center">
                        <img class="w-50 h-50" src="img/<?= $product->getImage() ?>" alt="Image">
                    </div>
                </div>

                <div class="col-lg-7 h-auto mb-30">
                    <div class="h-100 bg-light p-30">
                        <h3>
                            <?= $product->getName() ?>
                        </h3>
                        <h3 class="font-weight-semi-bold mb-4">Rp.
                            <?= number_format($product->getPrice(), 0, ',', '.') ?>
                        </h3>
                        <p class="mb-4">
                            <?= $product->getShortDescription() ?>
                        </p>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">Sizes:</strong>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-1" name="size">
                                    <label class="custom-control-label" for="size-1">XS</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                                    <label class="custom-control-label" for="size-2">S</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                                    <label class="custom-control-label" for="size-3">M</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                                    <label class="custom-control-label" for="size-4">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-5" name="size">
                                    <label class="custom-control-label" for="size-5">XL</label>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <a href="beli.php?id=<?php echo $i ?>"><button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="bg-light p-30">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <h4 class="mb-3">Deskripsi Produk</h4>
                                <p>
                                    <?= $product->getLongDescription() ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Detail End -->


    <?php
    // Akhir dari if (isset($_GET['idp']))
    }?>


<?php
// Include footer.php file
include('footer.php');
// Buat sebuah instance dari kelas footer dan render
$footer = new footer();
$footer->render();
?> 