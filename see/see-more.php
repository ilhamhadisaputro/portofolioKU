<?php
require "../admin/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See More | MyProject</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/aos.css" />
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
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
          $tampil = mysqli_query($con , "SELECT * FROM project ORDER BY id DESC"); 
          while($data= mysqli_fetch_array($tampil)){?>
            <div class="col-md-6" FADE data-aos="fade-up" HALLO data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="../assets/image-project/<?=$data['foto']?>" value="<?=$data['foto']?>"
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
              <a href="../index.php" class="link-custom">Back Home</a>
            </div>
      </section>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>