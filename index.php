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
            <a class="nav-link" href="#testimoni">Ulasan</a>
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

      <div class="row product-container">

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Sederhana" data-aos="zoom-in" data-aos-delay="200">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku1.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Sederhana 1</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 50.000 - 150.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku sederhana dengan tampilan elegan dan minimalis. Cocok untuk sehari-hari.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Floral" data-aos="zoom-in" data-aos-delay="400">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku11.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Floral 1</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 100.000 - 200.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku floral dengan motif bunga yang indah dan berwarna-warni. Cocok untuk acara spesial.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Glitter" data-aos="zoom-in" data-aos-delay="600">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku3.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Glitter 1</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 120.000 - 250.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku dengan glitter yang memberikan efek berkilauan dan glamor. Cocok untuk pesta dan acara khusus.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-3D" data-aos="zoom-in" data-aos-delay="200">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku4.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain 3D 1</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 150.000 - 300.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku 3D dengan aksen yang menonjol dan kreatif. Memberikan tampilan yang unik dan menarik.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Sederhana" data-aos="zoom-in" data-aos-delay="400">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku5.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Sederhana 2</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 50.000 - 150.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku sederhana dengan variasi warna yang elegan dan stylish.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Floral" data-aos="zoom-in" data-aos-delay="600">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku6.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Floral 2</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 100.000 - 200.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku floral dengan sentuhan artistik yang elegan dan feminin.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-Glitter" data-aos="zoom-in" data-aos-delay="200">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku7.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain Glitter 2</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 120.000 - 250.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku glitter dengan kombinasi warna yang menawan dan mewah.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-3D" data-aos="zoom-in" data-aos-delay="400">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku8.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain 3D 2</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 150.000 - 300.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku 3D dengan detail yang rumit dan indah, menciptakan tampilan yang memikat.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-Desain-3D" data-aos="zoom-in" data-aos-delay="600">
          <div class="product-wrap">
            <figure>
              <img src="./assets/images/produk/kuku9.jpg" class="img-fluid" alt="">
            </figure>

            <div class="product-info">
              <h4 class="product-text-style-4"><a data-toggle="modal" data-target="#orderModal">Desain 3D 3</a></h4>
              <span class="bold">Harga:</span><br>Mulai Rp 150.000 - 300.000<br>
              <span class="bold">Deskripsi:</span><br>Desain kuku 3D dengan aksen yang unik dan penuh gaya, memberikan kesan yang memukau.
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- modal -->
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
            <form id="orderForm" action="order.php" method="POST">
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
                <input class="form-control" id="address" name="address" placeholder="Masukkan alamat Anda" required>
              </div>
              <div class="form-group">
                <label for="treatment">Nama Treatment</label>
                <select class="form-control" id="treatment" name="treatment" required>
                  <option value="" disabled selected>Pilih treatment</option>
                  <?php while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['nama_treatment'] . "'>" . $row['nama_treatment'] . "</option>";
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Masukkan jumlah pesanan" required>
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary" form="orderForm">Submit Order</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        var globalHarga = 0;
        $('#treatment').change(function() {
          var treatment = $(this).val();

          // Kirim permintaan AJAX untuk mendapatkan harga
          $.ajax({
            url: 'get_harga.php',
            type: 'GET',
            data: {
              treatment: treatment
            },
            success: function(response) {
              $('#price').val(parseFloat(response)); // Setel harga sesuai respons dari server
              globalHarga = parseFloat(response);
              console.log("Price: ", response);
              // console.log("Treatment: ",treatment);
            }
          });
        });

        $('#quantity').keyup(function() {
          var quantity = $(this).val();

          // Hitung total harga berdasarkan jumlah
          var totalHarga = globalHarga * quantity;
          $('#price').val(parseFloat(totalHarga));
          console.log("totalHarga: ", totalHarga);
          console.log("Quantity: ", harga);
        });
      });
    </script>

  </section>

  <style>
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
  </style>

<article id="testimoni" class="card judul">
    <div class="testimonial-container" id="testimonials-container">
      <!-- Testimonials will be inserted here -->
    </div>

    <h1 class="text-center">Ulasan</h1>

    <div class="testimonial-cards-container">
      <!-- Testimonial cards will be inserted here -->
    </div>
  </article>

  <script>
    // Fetch the ulasan
    fetch('fetch_testimoni.php')
      .then(response => response.json())
      .then(data => {
        const cardsContainer = document.querySelector('.testimonial-cards-container');
        let currentIndex = 0;

        function displayTestimonials() {
          cardsContainer.innerHTML = ''; // Clear the cards container
          for (let i = 0; i < data.length; i++) {
            const testimonial = data[i];

            const card = document.createElement('div');
            card.classList.add('testimonial-card');

            const img = document.createElement('img');
            img.src = './assets/images/lainnya/person.jpg'; // Corrected line// Add the image source

            const name = document.createElement('h3');
            name.textContent = testimonial.nama_pelanggan;

            const review = document.createElement('p');
            review.textContent = testimonial.teks_ulasan;

            const date = document.createElement('span');
            date.textContent = testimonial.tanggal_ulasan;

            card.appendChild(img); // Append the image
            card.appendChild(name);
            card.appendChild(review);
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
  </script>

<style>
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: lighter;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: flex-end;
    }

    .rating input[type="radio"] {
      display: none;
    }

    .rating label {
      color: #ccc; /* Mengubah warna bintang menjadi abu-abu sebelum ditekan */
      cursor: pointer;
      font-size: 2em;
    }

    .rating label:hover,
    .rating label:hover ~ label,
    .rating input[type="radio"]:checked ~ label {
      color: blue; /* Mengubah warna bintang menjadi biru saat dihover atau ditekan */
    }
  </style>
    <!-- <section id="testimonial-form" style="padding: 50px 0; background: #fff;"> -->
    <div style="padding: 50px 0; background: #fff;">
      <div class="container form-container">
        <div class="section-title form-title">
          <h2>Submit Your Testimonial</h2>
        </div>
        <form id="testimonial-form" action="proses_tambah_ulasan.php" method="POST" style="display: flex; flex-direction: column;">
          <table class="form-table">
            <tr>
              <td><label for="nama_pelanggan">Nama Pelanggan</label></td>
              <td><input type="text" id="nama_pelanggan" name="nama_pelanggan" required></td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
              <td><label for="no_telp">No. Telp</label></td>
              <td><input type="tel" id="no_telp" name="no_telp" required></td>
            </tr>
            <tr>
              <td><label for="teks_ulasan">Teks Ulasan</label></td>
              <td><textarea id="teks_ulasan" name="teks_ulasan" rows="4" required></textarea></td>
            </tr>
            <tr>
              <td><label for="tanggal_ulasan">Tanggal Ulasan</label></td>
              <td><input type="date" id="tanggal_ulasan" name="tanggal_ulasan" required></td>
            </tr>
            <tr>
              <!-- <td><label for="rating">Rating</label></td>
              <td>
                <div class="rating">
                  <input type="radio" id="star5" name="rating" value="5" />
                  <label for="star5" title="Sangat Baik">⭐</label>
                  <input type="radio" id="star4" name="rating" value="4" />
                  <label for="star4" title="Baik">⭐</label>
                  <input type="radio" id="star3" name="rating" value="3" />
                  <label for="star3" title="Cukup">⭐</label>
                  <input type="radio" id="star2" name="rating" value="2" />
                  <label for="star2" title="Buruk">⭐</label>
                  <input type="radio" id="star1" name="rating" value="1" />
                  <label for="star1" title="Sangat Buruk">⭐</label>
                </div>
              </td> -->
            </tr>
            <tr>
              <td colspan="2" style="text-align: center;"><button type="submit">Submit</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <!-- Awalan rajendra -->

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