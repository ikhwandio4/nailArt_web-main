<?php
include 'koneksi.php';
$query = "SELECT * from katalog_harga";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="seni kuku, kuku, nail art">
  <link rel="shortcut icon" href="./assets/images/lainnya/logo.jpg" type="icon">
  <meta property="og:title" content="Website Resmi Ohmynailart">
  <meta property="og:description" content="Nikmati Pleayanan Terbaik kami">
  <meta property="og:image" itemprop="image" content="https://github.com/saifulrizal17/parfumku_web/blob/main/assets/images/about/toko1.jpg?raw=true">
  <meta property="og:type" content="website" />

  <title>ohMy.nailArt</title>

  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Font Google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <!-- AOS Animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <!-- Swiper CSS -->
  <!-- <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.6/swiper-bundle.min.css">
  <link rel="stylesheet" href="path/to/swiper.min.css">
  <script src="path/to/swiper.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7/dist/sweetalert2.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Custom CSS (SASS) -->
  <link rel="stylesheet" href="./assets/css/style-navbar.css">
  <link rel="stylesheet" href="./assets/css/style-about.css">
  <link rel="stylesheet" href="./assets/css/style-service.css">
  <link rel="stylesheet" href="./assets/css/style-product.css">
  <link rel="stylesheet" href="./assets/css/style-testimoni.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="./assets/css/style-faq.css">
  <link rel="stylesheet" href="./assets/css/style-hero.css">
  <!-- modal -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <button id="open-modal" class="btn btn-warning rounded-circle" title="join reseller">
    <i class="fa-regular fa-hand fa-xl"></i>
  </button>

  <!-- Awalan saiful assist salsabila -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">OhMy.NailArt</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Gallery</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#testimoni">Ulasan & Best Seller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="hero" class="hero">
    <div class="container">
      <h1 class=".font-large" data-aos="fade-down-right">Selamat Datang di <span id="typing-text"></span><span id="cursor">|</span></h1>
      <p class=".font-medium" data-aos="zoom-in-down">Temukan berbagai pilihan seni kuku terbaik kami dan nikmati desain yang menawan. <br>
        Dapatkan penawaran eksklusif dan pengalaman layanan di toko kami.</p>
      <a href="#about" type="button" class="button btn-hero" data-aos="fade-up-right">Get Started</a>
    </div>
  </section>
  <!-- Akhiran saiful assist salsabila -->

  <!-- Awalan salma -->
  <section id="about">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <h1 class="section-heading">Tentang Kami</h1>
          <p class="section-deskripsi">
            Oh My Nail Art adalah usaha perseorangan yang bergerak di bidang jasa melukis kuku, yang fokus menyajikan aneka variasi melukis kuku dan perawatan kuku yang belakangan ini sedang marak berkembang di dunia kecantikan. Prospek pengembangan usaha ini cukup menjanjikan, dilihat dari pangsa pasar yang cukup besar, khususnya kaum wanita yang tidak dibatasi oleh umur. Didirikan sejak tahun 2020 tepatnya pada Bulan Februari.
          </p>
          <p class="section-deskripsi">
            Oh My Nail Art berlokasi di Jl. Perumahan Taman Landungsari Indah No.K-15, Dusun Bend., Landungsari, Kec. Dau, Kabupaten Malang, Jawa Timur. Memberikan layanan seperti manicure, nail art dengan simple design hingga hard design, nail tip extension, remove dan tentunya memiliki home studio untuk melayani jasa tersebut.
          </p>
        </div>
        <div class="col-lg-6" data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
          <img id="dynamicImage" src="" alt="Gambar Toko" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <!-- Akhiran salma -->

  <!-- Awalan saiful -->
  <section id="services">
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Layanan Kami</h2>
            <p class="section-deskripsi">Ini adalah berbagai layanan yang kami tawarkan:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 text-center" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="service-bg-card1 service-box">
              <i class="fas fa-paint-brush fa-4x text-primary mb-4"></i>
              <h3 class="mb-3">Nail Art Design</h3>
              <p class="text-muted">Dapatkan desain kuku yang unik dan personal sesuai dengan keinginan Anda.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="service-bg-card1 service-box">
              <i class="fas fa-spa fa-4x text-primary mb-4"></i>
              <h3 class="mb-3">Manicure & Pedicure</h3>
              <p class="text-muted">Nikmati perawatan manicure dan pedicure profesional untuk kuku yang sehat dan indah.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="service-bg-card1 service-box">
              <i class="fas fa-calendar-alt fa-4x text-primary mb-4"></i>
              <h3 class="mb-3">Jadwal Janji Temu</h3>
              <p class="text-muted">Buat janji temu dengan mudah melalui sistem online kami untuk kenyamanan Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="product" class="product">
    <div class="container">

      <div class="section-title">
        <h2>Gallery Desain Kami </h2>
        <p>Berikut adalah beragam desain kuku yang kami tawarkan:</p>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <ul id="product-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-Desain-Sederhana">Desain Sederhana</li>
            <li data-filter=".filter-Desain-Floral">Desain Floral</li>
            <li data-filter=".filter-Desain-Glitter">Desain Glitter</li>
            <li data-filter=".filter-Desain-3D">Desain 3D</li>
          </ul>
        </div>
      </div>

<style>
  .product-wrap {
    position: relative;
    overflow: hidden;
}

.product-image {
    width: 100%;
    height: 400px; /* Adjust the height as needed */
    object-fit: cover;
    display: block;
}

.product-info {
    padding: 10px;
}

.product-text-style-4 {
    font-size: 1.2em;
    margin-bottom: 10px;
    font-weight: bold;
}

.bold {
    font-weight: bold;
}

figure {
    width: 100%;
    height: 400px; /* Ensure figure has the same height as the image */
    margin: 0; /* Remove default margin */
}

</style>
<?php
include 'desaincadangan.php';

$designs = ambilDesain2();
?>
<div class="row product-container">
<?php foreach ($designs as $design): ?>
    <?php
    // Use null coalescing operator to provide default values
    $id_desain = htmlspecialchars($design['id_desain'] ?? '');
    $nama_desain = htmlspecialchars($design['nama_desain'] ?? 'Nama tidak tersedia');
    $deskripsi_desain = htmlspecialchars($design['deskripsi_desain'] ?? 'Deskripsi tidak tersedia');
    $gambar = htmlspecialchars($design['gambar'] ?? './assets/images/default.jpg'); // Default image
    $category = htmlspecialchars($design['category'] ?? 'Uncategorized'); // Assuming you have a category field
    $harga = htmlspecialchars($design['harga'] ?? 'Harga tidak tersedia');
    ?>
    <div class="col-lg-4 col-md-6 product-item filter-<?php echo $category; ?>" data-aos="zoom-in" data-aos-delay="200" data-id="<?php echo $id_desain; ?>" data-name="<?php echo $nama_desain; ?>" data-price="<?php echo $harga; ?>">
        <div class="product-wrap">
            <figure>
                <img src="<?php echo $gambar; ?>" class="img-fluid product-image" alt="">
            </figure>
            <div class="product-info">
                <h4 class="product-text-style-4"><a href="#" class="open-modal" data-toggle="modal" data-target="#orderModal"><?php echo $nama_desain; ?></a></h4>
                <span class="bold">Harga:</span><br><?php echo $harga; ?><br>
                <span class="bold">Deskripsi:</span><br><?php echo $deskripsi_desain; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>


<!-- Modal Pemesanan -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Form Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="orderForm" method="POST">
                    <input type="hidden" id="productId" name="productId">
                    <input type="hidden" id="productName" name="productName">
                    <input type="hidden" id="productPrice" name="productPrice">
                    <input type="hidden" id="orderTime" name="orderTime">
                    <!-- Customer Information Fields -->
                    <div class="form-group">
                        <label for="customerName">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">No Telp</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Masukkan nomor telepon Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan alamat Anda" required>
                    </div>
                    <!-- Quantity and Price Fields -->
                    <div class="form-group">
                        <label for="quantity">Jumlah</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Masukkan jumlah pesanan" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Total Harga</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="orderForm">Submit Order</button>
            </div>
        </div>
    </div>
</div>

<!-- Form Ulasan -->
<div id="reviewFormContainer" style="display:none;">
    <h3>Form Ulasan</h3>
    <form id="reviewForm" action="review.php" method="POST">
          <div class="form-group">
            <label for="rating">Rating</label>
            <div class="star-rating">
                <span class="star" data-value="1" title="Sangat Buruk">&#9733;</span>
                <span class="star" data-value="2" title="Buruk">&#9733;</span>
                <span class="star" data-value="3" title="Biasa Saja">&#9733;</span>
                <span class="star" data-value="4" title="Bagus">&#9733;</span>
                <span class="star" data-value="5" title="Sangat Bagus">&#9733;</span>
            </div>
            <input type="hidden" id="rating" name="rating" required>
        </div>

        <div class="form-group">
            <label for="review">Ulasan</label>
            <textarea class="form-control" id="review" name="review" placeholder="Masukkan ulasan Anda" required></textarea>
        </div>
        <button type="submit" name="submitReview" class="btn btn-primary">Submit Review</button>
    </form>
</div>

<!-- Testimoni -->
<article id="testimoni" class="card judul">
    <div class="testimonial-container" id="testimonials-container">
        <!-- Testimonials will be inserted here -->
    </div>
    <h1 class="text-center">Ulasan Pelanggan</h1>
    <div class="testimonial-cards-container">
        <!-- Testimonial cards will be inserted here -->
    </div>
</article>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            ratingInput.value = value;
            console.log('Rating set to: ' + value);  // Untuk debug

            stars.forEach(s => {
                s.classList.remove('selected');
            });

            this.classList.add('selected');
            let previousSibling = this.previousElementSibling;
            while (previousSibling) {
                previousSibling.classList.add('selected');
                previousSibling = previousSibling.previousElementSibling;
            }
        });
    });
});

$(document).ready(function() {
    var unitPrice = 0;

    $('.open-modal').on('click', function() {
        var productItem = $(this).closest('.product-item');
        var productId = productItem.data('id');
        var productName = productItem.data('name');
        var productPrice = productItem.data('price');

        unitPrice = parseFloat(productPrice); // Store the unit price

        $('#productId').val(productId);
        $('#productName').val(productName);
        $('#productPrice').val(productPrice);
        $('#price').val(productPrice); // Set the price field with unit price
        $('#orderTime').val(new Date().toISOString()); // Set the current time
    });

    $('#quantity').on('input', function() {
        var quantity = $(this).val();

        // Calculate the total price based on quantity
        var totalPrice = unitPrice * quantity;
        $('#price').val(totalPrice);
    });

    $('#orderForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Send the form data using AJAX
        $.ajax({
            url: 'order.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Display success message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Order Berhasil',
                        text: 'Your order is being processed. Please wait for admin confirmation.',
                        showCancelButton: true,
                        confirmButtonText: 'Beri Ulasan',
                        cancelButtonText: 'Tidak, Terima Kasih'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Close order modal
                            $('#orderModal').modal('hide');
                            // Show review form
                            $('#reviewFormContainer').show();
                        } else {
                            window.location.href = 'index.php'; // Redirect to homepage
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Order Failed',
                        text: response.message,
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Something went wrong with the order submission.'
                });
            }
        });
    });

    $('#reviewForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Validate form data
        var rating = $('#rating').val();
        var review = $('#review').val().trim();

        if (rating === '' || review === '') {
            Swal.fire({
                icon: 'warning',
                title: 'Isi Semua Field',
                text: 'Mohon isi rating dan ulasan Anda.',
            });
            return;
        }

        // Send review data using AJAX
        $.ajax({
            url: 'review.php', // Ganti dengan URL yang sesuai untuk menerima data ulasan
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                Swal.fire({
                    icon: response.success ? 'success' : 'error',
                    title: response.success ? 'Ulasan Berhasil Dikirim' : 'Gagal Mengirim Ulasan',
                    text: response.message,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Clear form fields
                        $('#rating').val('');
                        $('#review').val('');

                        // Hide the review form
                        $('#reviewFormContainer').hide();

                        // Fetch and display testimonials again
                        fetchTestimonials();
                    }
                });
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Something went wrong with the review submission.'
                });
            }
        });
    });

    // Fetch testimonials
    function fetchTestimonials() {
        fetch('fetch_testimoni.php')
        .then(response => response.json())
        .then(data => {
            const cardsContainer = document.querySelector('.testimonial-cards-container');
            let currentIndex = 0;

            function createStarRating(rating) {
                const starContainer = document.createElement('div');
                starContainer.classList.add('star-rating');

                for (let i = 1; i <= 5; i++) {
                    const star = document.createElement('span');
                    star.innerHTML = '&#9733;'; // Unicode for star character
                    star.classList.add('star');
                    if (i <= rating) {
                        star.classList.add('filled');
                    }
                    starContainer.appendChild(star);
                }

                return starContainer;
            }

            function displayTestimonials() {
                cardsContainer.innerHTML = ''; // Clear the cards container
                for (let i = 0; i < data.length; i++) {
                    const testimonial = data[i];

                    const card = document.createElement('div');
                    card.classList.add('testimonial-card');

                    const img = document.createElement('img');
                    img.src = './assets/images/lainnya/person.jpg'; // Add the image source

                    const name = document.createElement('h3');
                    name.textContent = testimonial.review;

                    const review = document.createElement('p');
                    review.textContent = testimonial.rating;

                    const ratingStars = createStarRating(testimonial.rating);

                    const date = document.createElement('span');
                    date.textContent = testimonial.waktu;

                    card.appendChild(img); // Append the image
                    card.appendChild(name);
                    card.appendChild(review);
                    card.appendChild(ratingStars); // Append the star rating
                    card.appendChild(date);

                    cardsContainer.appendChild(card);
                }
            }

            displayTestimonials(); // Initial display

            function scrollTestimonials() {
                const firstCardWidth = document.querySelector('.testimonial-card').offsetWidth;
                cardsContainer.scrollBy({ left: firstCardWidth, behavior: 'smooth' });

                currentIndex = (currentIndex + 1) % data.length;

                if (currentIndex === 0) {
                    cardsContainer.scrollTo({ left: 0, behavior: 'smooth' });
                }
            }

            setInterval(scrollTestimonials, 5000); // Scroll every 5 seconds
        })
        .catch(error => console.error('Error fetching testimonials:', error));
    }

    // Initial fetch of testimonials
    fetchTestimonials();
});

    var unitPrice = 0;

    $('.open-modal').on('click', function() {
        var productItem = $(this).closest('.product-item');
        var productId = productItem.data('id');
        var productName = productItem.data('name');
        var productPrice = productItem.data('price');

        unitPrice = parseFloat(productPrice); // Store the unit price

        $('#productId').val(productId);
        $('#productName').val(productName);
        $('#productPrice').val(productPrice);
        $('#price').val(productPrice); // Set the price field with unit price
        $('#orderTime').val(new Date().toISOString()); // Set the current time
    });

    $('#quantity').on('input', function() {
        var quantity = $(this).val();

        // Calculate the total price based on quantity
        var totalPrice = unitPrice * quantity;
        $('#price').val(totalPrice);
    });

  </script>


  </section>

<style>
  /* Star Rating */
.star-rating {
    direction: rtl;
    display: inline-block;
}

.star {
    font-size: 2em;
    color: lightgray;
    cursor: pointer;
}

.star:hover,
.star:hover ~ .star,
.star.selected {
    color: gold;
}

/* Testimoni */
.testimonial-card {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin: 15px;
    text-align: center;
    flex: 0 0 auto;
    width: 300px;
}

.testimonial-card img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 10px;
}

.testimonial-cards-container {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
}

.star-rating {
    display: flex;
}

.star {
    font-size: 1.5em;
    color: lightgray;
    text-align: center;
}

.star.filled {
    color: gold;

}

/* Optional: Custom tooltip styles */
.star:hover::after {
    content: attr(title);
    position: absolute;
    background-color: #333;
    color: #fff;
    padding: 5px;
    border-radius: 3px;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
}
  
    .card-img-top {
    width: 100%;
    height: 200px; /* Adjust the height as needed */
    object-fit: cover; /* Ensures the image covers the space while maintaining its aspect ratio */
}

.card {
    margin-bottom: 20px; /* Adds some space between cards */
}

</style>
<?php
include 'koneksi.php';

// Memanggil file PHP yang berisi fungsi-fungsi
require_once 'pelanggan.php';

// Mengambil data pelanggan
$pelanggan = ambilPelanggan();

// Query untuk mendapatkan data desain yang sering dibeli termasuk gambar
$query = "
SELECT 
    dc.nama_desain AS nama_item,
    dc.gambar AS image,
    COUNT(*) AS jumlah_pembelian,
    COUNT(DISTINCT p.id_pelanggan) AS jumlah_pelanggan
FROM 
    penjualan p
JOIN 
    desain_cadangan dc ON p.id_desain = dc.id_desain
GROUP BY 
    p.id_desain
ORDER BY 
    jumlah_pembelian DESC;
";

$result = mysqli_query($koneksi, $query);

// Mendapatkan hasil query ke dalam bentuk array
$items = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="card-title fw-semibold mb-4">Desain/Treatment yang Sering Dibeli</h5>
        </div>
    </div>
    <div class="row">
        <?php foreach ($items as $index => $item) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo htmlspecialchars($item['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['nama_item']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($item['nama_item']); ?></h5>
                        <p class="card-text">Jumlah Pembelian: <?php echo $item['jumlah_pembelian']; ?></p>
                        <p class="card-text">Jumlah Pelanggan: <?php echo $item['jumlah_pelanggan']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <section id="location">
      <div class="section-title">
        <h2>Temukan Lokasi Kami</h2>
        <p>Kami menyediakan peta lokasi toko beserta informasi kontak yang dapat Anda hubungi:</p>
      </div>
      <div class="container mt-5">
        <div class="row rounded-3 border">
          <div class="col-md-5 m-0 p-0">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.6495252517984!2d112.5955793!3d-7.9316242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788321e96749ef%3A0x9d8855b1ab5aac5e!2sOhmynailart!5e0!3m2!1sid!2sid!4v1718200098057!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-md-7 m-0 p-3 keterangan-maps">
            <div class="contact-info">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3><b><u>Contact Info</u></b></h3>
                  <div class="icon-and-text">
                    <i class="bi bi-geo-alt-fill" style="font-size: 30px; color: red; margin-right: 10px;"></i>
                    <p class="alamat"><b>ADDRESS:</b> Jl. Perumahan Taman Landungsari Indah No.K-15, DusunBend., Landungsari, Kec. Dau, Kabupaten Malang, Jawa Timur</p>
                  </div>
                  <div class="icon-and-text">
                    <div class="telephone-icon">
                      <i class="bi bi-telephone-fill" style="font-size: 30px; color: rgb(0, 0, 0); margin-right: 10px;"></i>
                      <p class="telp"><b>Phone:</b> +621333770901</p>
                    </div>
                  </div>
                  <div class="icon-and-text">
                    <div class="envelope-icon">
                      <i class="bi bi-envelope" style="font-size: 30px; color: rgb(0, 0, 0); margin-right: 10px;"></i>
                      <p class="envelop"><b>Email:</b> Ohmynailart@gmail.com</p>
                    </div>
                  </div>
                  <div class="social-links">
                    <a href="https://www.instagram.com/ohmy.nailart/" title="link instagram" target="_blank"><i class="fab fa-instagram" style="color: #000000;"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=6281333770901&text&type=phone_number&app_absent=0" title="link whatsapp" target="_blank"><i class="fab fa-whatsapp" style="color: #000000;"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="kontak">
      <div class="f-item-con">
        <div class="app-info">
          <div class="footer-title">Company</div>
          <ul>
            <li><a style="text-decoration: none;" href="#about">About Us</a></li>
            <li><a style="text-decoration: none;" href="#services">Our Service</a></li>
            <li><a style="text-decoration: none;" href="#product">Product</a></li>
            <li><a style="text-decoration: none;" href="#testimonial">Testimonials</a></li>
          </ul>
        </div>
        <div class="useful-links">
          <div class="footer-title">Get Help</div>
          <ul>
            <li><a style="text-decoration: none;" href="#">Feedback</a></li>
            <li><a style="text-decoration: none;" href="#">Report an Issue / Bug</a></li>
          </ul>
        </div>
        <div class="g-i-t">
          <div class="footer-title">CONTACT US</div>
          <form action="/" method="post" class="space-y-2" onsubmit="sendWhatsAppMessage(event)">
            <input type="text" name="g-name" class="g-inp" id="g-name" placeholder='Name' />
            <input type="email" name="g-email" class="g-inp" id="g-email" placeholder='Email' />
            <textarea type="text" name="g-msg" class="g-inp h-40 resize-none" id="g-msg" placeholder='Message...'></textarea>
            <button type="submit" class='f-btn'>Submit</button>
          </form>
        </div>
      </div>
      <div class='cr-con'>Copyright &copy; 2024 | Made OhMyNailArt</div>
    </footer>
    <!-- Akhiran rajendra -->

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="bootstrap-5.3.2/dist/js/bootstrap.bundle.js"></script>
    <!-- Script AOS Animate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Swiper JS -->
    <!-- <script src="./assets/js/swiper-bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.6/swiper-bundle.min.js"></script>
    <!--Sweet alert update by Rajendra-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- My Script -->
    <script src="./assets/js/scripts.js"></script>
</body>

</html>