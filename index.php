<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PT XYZ</title>
    <link rel="icon" type="image/x-icon" href="assets/images/PT XYZ.svg">

    <!-- Primary Meta Tags -->
    <title>PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0.</title>
    <meta name="title" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0.">
    <meta name="description" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0. Kamu dapat menentukan waktu konsulstasi dengan bebas, Kami menjamin kamu akan dapat kerja sesuai passion kamu, Kami menghadirkan mentor-mentor yang berpengalaman dibidangnya, Kamu akan mendapatkan bimbingan private sehingga kamu akan menjadi lebih fokus">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0.">
    <meta property="og:description" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0. Kamu dapat menentukan waktu konsulstasi dengan bebas, Kami menjamin kamu akan dapat kerja sesuai passion kamu, Kami menghadirkan mentor-mentor yang berpengalaman dibidangnya, Kamu akan mendapatkan bimbingan private sehingga kamu akan menjadi lebih fokus">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0.">
    <meta property="twitter:description" content="PT XYZ Siap membantu pemuda luar biasa Indonesia dalam menghadapi perkembangan teknologi Web 4.0. Kamu dapat menentukan waktu konsulstasi dengan bebas, Kami menjamin kamu akan dapat kerja sesuai passion kamu, Kami menghadirkan mentor-mentor yang berpengalaman dibidangnya, Kamu akan mendapatkan bimbingan private sehingga kamu akan menjadi lebih fokus">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/images/PT XYZ.svg" alt="" width="100" height="100%" class="d-inline-block align-text-top img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#why-us">Why us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#subscription">Subscription</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <?php
      $str = file_get_contents('company-profile.json');
      $json = json_decode($str, true);
      // echo '<pre>' . print_r($json, true) . '</pre>';
      $section = $json['pages']['index']['section'];
      
     ?>
    <section class="hero-image">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                  <?php 
                    foreach($section as $value){
                      if($value['key']=='main_banner'){
                        echo "<img src='".$value['components']['image']."' class='d-block mx-lg-auto img-fluid' alt='Bootstrap Themes' width='700' height='500' loading='lazy'>";
                      }
                    }
                  ?>
                </div>
                <div class="col-lg-6">
                  <?php 
                    foreach($section as $value){
                      if($value['key']=='main_banner'){
                        echo "<h1 class='display-5 fw-bold lh-1 mb-3'>".$value['components']['title'].'<br>'."</h1>";
                        echo "<p class='lead'>".$value['components']['description']."</p>";
                      }
                    }
                  ?>
                  
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#subscription" type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-3">Mulai Belajar</a>
                    <a href="#Newsletter" type="button" class="btn btn-outline-secondary btn-lg px-4 rounded-3">Join Newsletter</a>
                  </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="why-us" id="why-us">
      <div class="container">
        <div class="why-us-title">
            <?php 
              foreach($section as $value){
                if($value['key']=='why_us'){
                  echo "<h1>".$value['components']['title']."</h1>";
                }
              }
            ?>
        </div>
        <div class="why-us-content">
            <div class="row">
              <?php 
                foreach($section as $value){
                  if($value['key']=='why_us'){
                    echo 
                    "<div class='col'>
                      <img src='".$value['components']['image']."' width='300' height='300'>
                    </div>";
                    echo 
                    "<div class='col'>
                        <p>".$value['components']['description']."</p>
                    </div>";
                  }
                }
              ?>
            </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
        <div class="container">
          <?php 
            foreach($section as $value){
              if($value['key']=='services'){
                echo 
                "<div class='services-title'>
                  <h1>".$value['components']['title']."</h1>
                  <h5>".$value['components']['description']."</h5>
                </div>";
              }
            }
          ?>
          <div class="row">
            <div class="col-lg-8 col-xs-6 d-flex justify-content-center">
              <div class="row">
                <?php 
                  foreach($section as $value){
                    if($value['key']=='services'){
                      foreach ($value['components']['services'] as $services) {
                        echo 
                        '<div class="col services-content">
                            <img class="icon" src="'.$services['icon'].'" alt="">
                            <h5>'.$services['name'].'</h5>
                            <p>'.$services['description'].'</p>
                        </div>';
                      }
                    }
                  }
                ?>
              </div>
            </div>
            <?php 
              foreach($section as $value){
                if($value['key']=='services'){
                  echo
                  '<div class="col-lg-4 col-xs-6">
                    <img src="'.$value['components']['image'].'" alt="">
                  </div>';
                }
              }
            ?>
        </div>
        </div>
    </section>

    <section class="subscription" id="subscription">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-lg-6 subscription-title">
              <?php 
                foreach($section as $value){
                  if($value['key']=='subscription'){
                    echo '<h1>'.$value['components']['title'].'</h1>';
                    echo '<p>'.$value['components']['description'].'</p>';
                  }
                }
              ?>
            </div>
            <div class="col row row-cols-1 row-cols-md-3 g-4 subscription-content">
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/images/Website dev.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web Developer</h5>
                      <p class="card-text">PROMO 125rb</p>
                      <span>
                        akses materi video,
                        akses artikel premium,
                        bertanya ketika kesulitan,
                      </span>
                      <a class="btn btn-primary rounded-3 mt-3" href="#" role="button">Pesan Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/images/mobile dev.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Android Dev</h5>
                      <p class="card-text">PROMO 125rb.</p>
                      <span>
                        akses materi video,
                        akses artikel premium,
                        bertanya ketika kesulitan,
                      </span>
                      <a class="btn btn-primary rounded-3 mt-3" href="#" role="button">Pesan Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/images/Data analysis.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Data Science</h5>
                      <p class="card-text">PROMO 125rb</p>
                      <span>
                        akses materi video,
                        akses artikel premium,
                        bertanya ketika kesulitan,
                      </span>
                      <a class="btn btn-primary rounded-3 mt-3" href="#" role="button">Pesan Sekarang</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>
    
    <section class="Newsletter" id="Newsletter">
      <div class="container">
        <div class="row" >
          <div class="col Newsletter-form">
            <div class="mb-3">
              Halo 👋 silahkan langganan newsletter ini untuk dapatin Tips belajar coding, update info seputar IT dan pemrograman langsung ke emailmu.
            </div>
            <form id="newsletter-form">
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="Alamat email" name="email" id="email" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama panggilan" name="name" id="name" required>
                </div>
                <div class="mb-3">
                  <button class="form-control btn btn-primary rounded-3" type="submit" name="submitData" id="submitData">Ya, Saya Mau!</button>
                </div>
            </form>
          </div>
          <div class="col">
            <img src="assets/images/newsletter.svg" alt="">
          </div>
        </div>  
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="alertModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body df">
            Anda telah berhasil ditambahkan ke daftar!
            Terima kasih telah berlangganan Newsletter.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="module" src="./assets/JS/firebase.js"></script>
  </body>
</html>
<!-- end Html -->