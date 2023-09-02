<?php
require "session.php";
require "koneksi.php";


$tampil = mysqli_query($con , "SELECT * FROM project ORDER BY id DESC");



function generateRandomString($lenght = 10) {
    $character = '123456789abcdefghijklmnopqrstuvwxyz';
    $characterLenght = strlen($character);
    $randomString = '';
    for ($i = 0; $i < $lenght; $i++){
        $randomString .=$character[rand(0, $characterLenght - 1)];
    }
    return $randomString;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/aos.css" />
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body id="main">
    <section>
        <div class="container-fluid mt-3">
            <div class="container text-white">
                <div class="row">
                    <div class="col-md-12 col-md-4">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div>
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" >
                            </div>
                            <div>
                                <label for="foto" class="form-label">Foto Project</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                            <div class="mt-3 mb-4">
                                <button  type="submit" name="submit" class="btn btn-primary">Kirim</button>
                                <button  type="submit" name="logout" class="btn btn-danger"><a href="logout.php" 
                                style="text-decoration:none; color:white;">Logout</a></button>

                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="full-height px-lg-5 mt-5">
        <div class="container-fluid">
            <div class="container text-white">
                <div class="row gy-4">
                    <?php while($data= mysqli_fetch_array($tampil)){?>
                    <div class="col-md-6" FADE data-aos="fade-up" HALLO data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect ">
                            <div class="card ">
                            <img class="rounded-4" src="../assets/image-project/<?=@$data['foto']?>" alt="" value="<?=@$data['foto']?>"
                            style="height:250px;"/>
                        </div>
                        <div class="card-custom-content p-4">
                            <h4><?=@$data['judul']?></h4>
                            <p><?=@$data['deskripsi']?></p>
                                    <a href="https://github.com/ilhamHadiSaputro" name="Read" class="link-custom">Read More</a>
                                    <a href="main.php?op=hapus&id=<?=$data['id']?>" name="delete" onclick="return confirm('yakin ingin menghapus data?')"  class="link-custom ms-3">Delete</a>
                        </form>
                        </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

                        <?php
                            if(isset($_POST['submit'])){
                                $judul = htmlspecialchars($_POST['judul']);
                                $deskripsi = htmlspecialchars($_POST['deskripsi']);

                                $target_dir = "../assets/image-project/";
                                $nama_file   = basename($_FILES["foto"]["name"]);
                                $target_file = $target_dir . $nama_file;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                $image_size = $_FILES["foto"]['size'];
                                $name_random = generateRandomString(25);
                                $new_name = $name_random. "." . $imageFileType;

                                if($judul =='' || $deskripsi ==''){
                                    ?>
                                        <script>
                                            alert('data tidak boleh kosong')
                                            document.location="main.php"
                                        </script><?php
                                        ?>
                                <?php
                                }else{
                                    if($nama_file!=''){
                                        if($image_size > 5000000){
                                        ?>
                                                <script>
                                                    alert('data wajib kurang dari 5Mb')
                                                    document.location="main.php"
                                                </script><?php
                                        
                                        }else{
                                            if($imageFileType != 'jpg' && $imageFileType != 'png'){
                                        ?>
                                                <script>
                                                    alert('data harus berformat Jpg atau Png')
                                                    document.location="main.php"
                                                </script>
                                        <?php
                                             }else{
                                                (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir .$new_name));
                                             }
                                        }
                                    }
                                         // query insert
                                         $queryTambah = mysqli_query($con, "INSERT INTO project (judul,deskripsi,foto)
                                                        VALUES('$judul','$deskripsi','$new_name')");
    
                                                if($queryTambah){
                                                    ?>
                                                        <script>
                                                            alert('data berhasil ditambahkan');
                                                            document.location="main.php";
                                                        </script><?php
                                                            
                                    exit;
                                                    ?>
                                                    <?php
                                                }else{
                                                    echo_mysqli_error($con);
                                                }
                                }
                                
                            }
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                $op = $_GET['op'];
                                if($op == "hapus"){
                                    $delete = mysqli_query($con , "DELETE FROM project WHERE id='$id'");
                                }if($delete){
                                    ?>
                                        <script>
                                            alert('data berhasil dihapus')
                                            document.location="main.php"
                                        </script><?php
                                    exit;
                                }
                            }
                            
                        ?>



    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>