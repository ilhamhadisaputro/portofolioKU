<?php 
require "admin/koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Porto Ilham</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/aos.css" />
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body data-bs-spy="scroll" data-bs-target="navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
          <span class="h3 fw-bold d-block d-lg-none">Porto Ilham</span>
          <img src="./assets/images/imageKu.jpeg" class="d-none d-lg-block rounded-circle" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servis">Servis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->

    <div id="content-wrpaper">
      <!-- HOOME -->
      <section id="home" class="full-height px-lg-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h1 class="display-4 fw-bold" FADE data-aos="fade-up" HALLO><span class="text-brand">I AM A PROGRAMMER</span> FROM KEDIRI, INDONESIA</h1>
              <p class="lead mt-2 mb-4" FADE data-aos="fade-up" HALLO data-aos-delay="300">my name is ilham and this is my job as a programmer</p>
              <div FADE data-aos="fade-up" HALLO data-aos-delay="600">
                <a href="#work" class="btn btn-brand me-3">See My Project</a>
                <a href="https://wa.link/ucmwhu" class="link-custom">Call Me: +62 857 5503 8781</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- //HOME -->

      <!-- SERVICES -->
      <section id="servis" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" FADE data-aos="fade-up" HALLO>
            <div class="col-lg-8">
              <h6 class="text-brand">SERVICES</h6>
              <h1>Services That I Provide</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" FADE data-aos="fade-up" HALLO>
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <i class="las la-coffee"></i>
                </div>
                <h4 class="mt-4 mb-2">Junior Website Development</h4>
                <p>create a website with HTML, CSS, BOTSTRAAP, PHP NATIVE</p>
                <a href="https://github.com/ilhamHadiSaputro" class="link-custom">Read More</a>
              </div>
            </div>
            <div class="col-md-4" FADE data-aos="fade-up" HALLO data-aos-delay="600">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <i class="las la-laptop-code"></i>
                </div>
                <h4 class="mt-4 mb-2">Junior Backend Development</h4>
                <p>My Backend programming language while still using PHP Native</p>
                <a href="https://github.com/ilhamHadiSaputro" class="link-custom">Read More</a>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="service p-4 bg-base rounded-4 shadow-effect h-100">
                <div class="iconbox rounded-4">
                  <i class="las la-server"></i>
                </div>
                <h4 class="mt-4 mb-2">Database</h4>
                <p>Creating my database using MySql</p>
                <a href="https://github.com/ilhamHadiSaputro" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //SERVICES -->

      <!-- WORK -->
      <section id="work" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" FADE data-aos="fade-up" HALLO>
            <div class="col-lg-8">
              <h6 class="text-brand">WORK</h6>
              <h1>My Recent Project</h1>
            </div>
          </div>

          <div class="row gy-4">
          <?php
          $tampil = mysqli_query($con , "SELECT * FROM project ORDER BY id DESC LIMIT 6"); 
          while($data= mysqli_fetch_array($tampil)){?>
            <div class="col-md-6" FADE data-aos="fade-up" HALLO data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="./assets/image-project/<?=$data['foto']?>" value="<?=$data['foto']?>"
                  style="height:250px;" alt="" />
                </div>
                <div class="card-custom-content p-4">
                  <h4><?=$data['judul']?></h4>
                  <p><?=$data['deskripsi']?></p>
                  <a href="https://github.com/ilhamHadiSaputro" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
            <div class="text-center mt-5">
              <a href="./see/see-more.php" class="link-custom">See More</a>
            </div>
      </section>

      <!-- //WORK -->

      <!-- ABOUT -->
      <section id="about" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" FADE data-aos="fade-up" HALLO data-aos-delay="600">
            <div class="col-lg-8">
              <h6 class="text-brand">ABOUT</h6>
              <h1>My Skill, Education & Experience</h1>
              <div class="row gy-5 mt-2">
              <div class="col-lg-5" style="margin-right:90px;">
              <h3 class="mb-4" FADE data-aos="fade-up" HALLO data-aos-delay="300">Frontend Web Developer</h3>
              <div class="row gy-4">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                      <div>
                        <ul>
                          <li>HTML</li>
                          <li>CSS</li>
                          <li>BOOTSTRAP</li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-5">
              <h3 class="mb-4" FADE data-aos="fade-up" HALLO data-aos-delay="300">Backend Web Developer</h3>
              <div class="row gy-4">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                      <div>
                        <ul>
                          <li>PHP</li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>

          <div class="row gy-5">
            <div class="col-lg-6">
              <h3 class="mb-4" FADE data-aos="fade-up" HALLO data-aos-delay="300">Education</h3>
              <div class="row gy-4">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                    <h4>SDN 1 PEHKULON</h4>
                    <p class="text-brand mb-2">studied at sdn Pehkulon</p>
                    <p class="mb-0">In this elementary school I was educated up to 6 years</p>
                  </div>
                </div>
              </div>
              <div class="row gy-4 mt-0">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                    <h4>SMPN 2 PAPAR</h4>
                    <p class="text-brand mb-2">studied at SMPN 2 PAPAR</p>
                    <p class="mb-0">in junior high school I studied 3 years</p>
                  </div>
                </div>
              </div>
              <div class="row gy-4 mt-0">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                    <h4>SMK PAWYATAN DAHA 3 KEDIRI</h4>
                    <p class="text-brand mb-2">studied at SMK PAWYATAN DAHA 3 KEDIRI</p>
                    <p class="mb-0">in vocational high school I studied 3 years and majored in computer and network engineering</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h3 class="mb-4" FADE data-aos="fade-up" HALLO data-aos-delay="300">Experience</h3>
              <div class="row gy-4">
                <div class="col-12">
                  <div class="bg-base p-4 rounded-4 shadow-effect" FADE data-aos="fade-up" HALLO data-aos-delay="600">
                    <h4>Junior Web Programmer</h4>
                    <p class="text-brand mb-2">studied at BLK Kediri</p>
                    <p class="mb-0">study at BLK using the programming language html, css, bootstrap, mySQL, PHP Native</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- //ABOUT -->

      <!-- CONTACT -->
      <section id="contact" class="full-height px-lg-5">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" FADE data-aos="fade-up">
              <h6 class="text-brand">Contact</h6>
              <h1>Hubungi saya bila ingin tanya-tanya</h1>
            </div>

            <div class="col-lg-8" FADE data-aos="fade-up" data-aos-delay="300">
              <form action="./email/contact.php" method="POST" class="row g-lg-3 gy-3">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="masukkan nama kamu" />
                </div>
                <div class="form-group col-md-6">
                  <input type="email" name="emailAddress" class="form-control" placeholder="masukkan email kamu" />
                </div>
                <div class="form-group col-12">
                  <input type="text" name="subject" class="form-control" placeholder="masukkan masukkan subjek" />
                </div>
                <div class="form-group col-12">
                  <textarea name="message" rows="4" class="form-control" placeholder="Masukkan Pesan Yang Ingin Kamu Sampaikan"></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                  <button type="submit" name="submit" class="btn btn-brand">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- //CONTACT -->

      <!-- footer -->
      <footer class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <p class="mb-0">Copyright text goes here</p>
            </div>
            <div class="col-auto">
              <div class="social-links">
                <a href="https://www.instagram.com/ihm_hd/"><i class="lab la-instagram"></i></a>
                <a href="https://wa.link/ucmwhu"><i class="lab la-whatsapp"></i></a>
                <a href="https://github.com/ilhamHadiSaputro"><i class="lab la-github"></i></a>
                <a href="https://www.linkedin.com/in/ilham-hadi-saputro-701958269/"><i class="lab la-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- //footer -->

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
