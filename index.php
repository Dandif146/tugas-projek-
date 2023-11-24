<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dandi's Company Profile</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feater icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My style -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar-Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"
        >Dandi's food<span> Company Profile</span>.</a
      >

      <div class="navbar-nav" id="nav">
        <a href="#home" class="clicked" onclick ="changeColor(this)"> Beranda</a>
        <a href="#about" onclick ="changeColor(this)">Tentang Kami</a>
        <a href="#carrier" onclick ="changeColor(this)">Lowongan</a>
        <a href="#products" onclick ="changeColor(this)">Produk Kami</a>
        <!-- <a href="#products" onclick ="changeColor(this)">Tentang Produk</a> -->
        <a href="#contact" onclick ="changeColor(this)">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <!-- <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      
      <!-- Search Form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Seacrh From End -->
    </nav>

    <!-- Navbar-End -->

    <!-- hero selection start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Hello! Selamat datang di Website <span>Dandi's food</span></h1>
        <p>
          "Kami ingin membuat makanan sehat dan lezat bagi seluruh bangsa
          indonesia".
        </p>
        <a href="#products" class="cta">Get here</a>
      </main>
    </section>
    <!-- hero selection end -->

    <!-- About us Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="img-about">
          <img src="./img/projek-bg.jpeg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <p>
            Dandi's Food adalah perusahaan yang berkarir dalam bidang industri Food,
            kami baru didirikan sejak tahun 2020, Product yang kami tawarkan
            kepada masyarakat adalah sebuah makanan yang ringan, dan tentunya
            aman di konsumsi di kalangan semua orang. kami juga ingin
            menciptakan makanan yang lezat dan bergizi, dan juga makanan yang sehat dari
            itu kami berusah mungkin untuk memberikan yang terbaik terhadap
            masyarakat.</p>
        </div>
      </div>
    </section>
    <!-- About us End -->

    <!-- Carrie us  section -->

    <section id="carrier" class="carrier">
      <!-- <h2><span>Berikut Lowongan Pekerjaan</span> di tempat kami</h2>  -->
      <div class="job-box">
        <h2>Lowongan Pekerjaan: Management</h2>
        <p><strong>Perusahaan:</strong> Dandi's Food</p>
        <p><strong>Lokasi:</strong> Bekasi, Indonesia</p>
        <p><strong>Jenis Pekerjaan:</strong> Full-time</p>
        <p><strong>Kualifikasi:</strong></p>
        <ul>
          <li>Pendidikan minimal S1 Management</li>
          <li>Pengalaman minimal 2 tahun sebagai Analisis Keuangan</li>
          <li>Bisa kerjasama antar tim</li>
        </ul>
        <a href="mailto:dandif146@gmail.com" class="apply-button">Apply Now</a>
      </div>
    </section>

    <!-- Carrie us end -->

    <!-- Menu Section -->
    <!-- <section id="menu" class="menu">
      <div>
        <h2><span>Produk</span> Kami</h2>
        <p>Berikut Product Perusahaan Kami yang telah pernah kami buat</p>
        <div class="container">
          <main class="grid">
            <article>
              <img src="./img/peyek1.png" width="300px" height="300px" />
              <div class="content">
                <h2>Peyek Kece</h2>
              </div>
            </article>
            <article>
              <img
                src="./img/pipcorn2-removebg-preview.png"
                width="300px"
                height="300px"
              />
              <div class="content">
                <h2>Pipcorn</h2>
              </div>
            </article>
            <article>
              <img
                src="./img/makan_3-removebg-preview.png"
                width="300px"
                height="300px"
              />
              <div class="content">
                <h2>Kripik Gaul</h2>
              </div>
            </article>
          </main>
        </div>
      </div>
    </section> -->
    <!-- Menu End -->
<!-- Tentang produk start -->
<section class="products" id="products">
  <h2><span>Produk</span> Kami</h2>
  <p>Berikut penjelasan produk perusahaan kami yang telah kami buat</p>
  <div class="row">
    <div class="product-card">
      <div class="product-icons">
        <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
      </div>
      <div class="product-img">
        <img src="./img/peyek1.png" alt="Produk 1">
      </div>
      <div class="product-content">
        <h3>Peyek Kece</h3>
        <div class="product-stars">
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star"></i>
          <i data-feather="star"></i>
        </div>
        <div class="product-price">IDR 15K <span>1DR 20K</span></div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-icons">
        <a href="#" class="item-detail-button2"><i data-feather="eye"></i></a>
      </div>
      <div class="product-img">
        <img src="./img/pipcorn2-removebg-preview.png" alt="Produk 2">
      </div>
      <div class="product-content">
        <h3>Pipcorn</h3>
        <div class="product-stars">
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star"></i>
        </div>
        <div class="product-price">IDR 15K <span>1DR 20K</span></div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-icons">
        <a href="#" class="item-detail-button3"><i data-feather="eye"></i></a>
      </div>
      <div class="product-img">
        <img src="./img/makan_3-removebg-preview.png" alt="Produk 3">
      </div>
      <div class="product-content">
        <h3>Kripik Gaul</h3>
        <div class="product-stars">
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star" class="star-full"></i>
          <i data-feather="star"></i>
          <i data-feather="star"></i>
        </div>
        <div class="product-price">IDR 15K <span>1DR 20K</span></div>
      </div>
    </div>
  </div>
</section>
<!--  Tentang produk End-->
    <!-- Contact -->
    <?php
    include ("config.php");

    if (isset($_POST['submit'])){
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pesan = $_POST['komen'];
      date_default_timezone_set('Asia/Jakarta');
      // waktu
      $current_timestamp = date('d M Y H:i:s');

      $sql = "INSERT INTO pesan (Nama, Email, Pesan, waktu) VALUES ('$nama', '$email', '$pesan', ' $current_timestamp')";
      if ($db->query($sql) === TRUE){
        echo "<script>alert('terkirim')</script>";
      } else{
        echo "<script>alert('tidak terkirim')</script>";
        echo "Error: " .$sql. "<br>" .$db->error;
      }
    }
    ?>
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>

      <div class="row">
      <iframe                                                                                                                                                                                                                    
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.732150767045!2d107.07861947399081!3d-6.298884793690226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699019a48c0a29%3A0x2de11c0254b13ba5!2sJl.%20Jawa%20Blok%20J%20No.10%2C%20Gandamekar%2C%20Kec.%20Cikarang%20Bar.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017530!5e0!3m2!1sid!2sid!4v1699755974652!5m2!1sid!2sid"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
          <form action="index.php" method="post">
            <div class="input-groub">
              <i data-feather="user"></i>
              <input type="text" placeholder="nama" name="nama" />
            </div>
            <div class="input-groub">
              <i data-feather="mail"></i>
              <input type="text" placeholder="email" name="email" />
            </div>
            <div class="input-message">
              <textarea name="komen" placeholder="masukan pesan"id="komen" cols="30" rows="10" ></textarea>
            </div>
            <button type="submit" class="btn" name="submit">kirim pesan</button>
          </form>
        </div>
   <h2 class="terakhir"><span>Feedback</span> Terakhir</h2>
        <div class="komen">
          <?php
            $sql = "SELECT * FROM pesan ORDER BY waktu DESC";
            $query = mysqli_query($db, $sql);
            $row= mysqli_fetch_array($query);
            ?>
        
                
                <?php echo "<div class = 'komentar'>";?>
                <?php echo "<h3>".$row['Nama']."</h3>"; ?>
                <?php echo "<h4>".$row['Email']."</h4>"; ?>
                <?php echo '<p id="komen">'.$row['Pesan'].'</p>'; ?>
                <?php echo "<p class='waktu' style='text-align:right;'><span>".$row['waktu']. "</span></p>"; ?>
          
		<?php
			// if (isset($_GET['nama'])) {
			// 	$nama = $_GET['nama'];

			// 	$sql = "SELECT * FROM pesan WHERE post_id='$nama'";
			// 	$result = $db->query($sql);
			// 	if ($result->num_rows > 0) {
			// 		while($row = $result->fetch_assoc()) {
			

			//   // output data of each row
			  
		?>
		<h3><?php // echo $row['nama']; ?></h3>
    <p><?php // echo $row['email']; ?></p>
		<p><?php //echo $row['pesan']; ?></p>

		<?php //} } } ?>
	</div>

      </div>
    </section>

    <!-- Contact End -->
  <!-- Display comments here -->

<?php include('display-coment.php'); ?>
    <!-- Footer -->
    <footer>
      <div class="social">
        <div class="logo">
          <a href="https://www.facebook.com/firmansyas.dandi">
            <i class="fa-brands fa-facebook fa-2xl"></i
          ></a>
        </div>
        <div class="logo">
          <a href="https://www.instagram.com/daandif_/?hl=id"
            ><i class="fa-brands fa-instagram fa-2xl"></i
          ></a>
        </div>
      </div>
      <div class="links">
        <a href="#home">Beranda</a>
        <a href="#about">Tentang Kami</a>
        <a href="#carrier">Lowongan</a>
        <!-- <a href="#aboutmenu ">Tentang Produk</a> -->
        <a href="#products">Menu Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a class="creator" href="https://www.instagram.com/daandif_/?hl=id" target="_blank">Dandi</a>. | <a class="admin" href="../p/php/admin.php">&copy;</a> 2023.</p>
      </div>
    </footer>
    <!-- Footer -->

    <!-- Modal Box -->
    <div class="modal" id="item-detail-modal">
  <div class="modal-container">
    <a href="#" class="close-icon"><i data-feather="x"></i></a>
    <div class="modal-content">
      <img src="./img/peyek1.png" alt="Produk 1">
      <div class="product-content">
        <h3>Peyek Kece</h3>
        <p>Peyek kece merupakan makanan ringan yang terbuat dari kacang pilihan dan tentunya bisa dinikmati semua kalangan masyarakat.</p>
      </div>
    </div>
  </div>
</div>
    <div class="modal" id="item-detail-modal2">
  <div class="modal-container">
    <a href="#" class="close-icon"><i data-feather="x"></i></a>
    <div class="modal-content">
      <img src="./img/pipcorn2-removebg-preview.png" alt="Produk 2">
      <div class="product-content">
        <h3>Pipcorn</h3>
        <p>Pipcorn Merupakan makanan yang terbuat dari biji jagung pilihan dan tentunya pipcorn ini tidak terlalu manis, pipcorn akan balance dengan rasa asin lautnya. Jadi pipcorn ini bisa dinikmati kalangan masyarakat dan tentunya pipcorn ini tidak eneg.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="item-detail-modal3">
  <div class="modal-container">
    <a href="#" class="close-icon"><i data-feather="x"></i></a>
    <div class="modal-content">
      <img src="./img/makan_3-removebg-preview.png" alt="Produk 3">
      <div class="product-content">
        <h3>Kripik Gaul</h3>
        <p>Kripik gaul merupakan makanan ringan yang terbuat dari kentang pilihan dan, bisa dinikmati semua kalangan masyarakat.</p>
      </div>
    </div>
  </div>
</div>
    <!-- Modal Box End -->

    <!-- Feater icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="script.js"></script>
    <script>
      var sensor = ["kontol", "memek","anjing","tolol","bangsat","babi"];
  // Fungsi untuk mengganti kata-kata dalam elemen HTML
  function replaceTextInElements(elements) {
      elements.forEach(function(element) {
          // Mengambil teks dari elemen
          var originalText = element.textContent;

          // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
          var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
          // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
          return '*'.repeat(match.length);
          });

          // Menetapkan teks yang telah diganti kembali ke elemen
          element.textContent = newText;
        });
      }

      // Mengambil semua elemen <p> dengan id="message"
      var messageElements = document.querySelectorAll('p#komen');

      // Mengganti kata-kata dalam elemen-elemen yang dipilih
      replaceTextInElements(messageElements);
    
    </script>
    <script>
    //       function changeColor(element) {
    //     // Remove the 'clicked' class from all navbar links
    //     var navbarLinks = document.querySelectorAll('.navbar-nav a');
    //     navbarLinks.forEach(function(link) {
    //         link.classList.remove('clicked');
    //     });

    //     // Add the 'clicked' class to the clicked link
    //     element.classList.add('clicked');
    // }
    // window.addEventListener('scroll', function() {
    //     var fromTop = window.scrollY;

    //     if (fromTop > 50) {
    //         navbar.classList.add('scrolled');
    //     } else {
    //         navbar.classList.remove('scrolled');
    //     }
    // });

    
    </script>
    <script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>
    <script>
      window.onload = () => {
        scrollSpy('#nav', {
          sectionSelector: 'section',
          targetSelector: 'a',
          offset: 100,
          activeClass: 'clicked'
        })
      }
    </script>
  </body>
</html>
