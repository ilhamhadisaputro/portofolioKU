<?php
session_start();
require "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/aos.css" />
    <link rel="stylesheet" href="../assets/css/admin.css">

</head>
<body id="main">
    <section>
        <div class="container-fluid kotak">
            <div class="container d-flex justify-content-center m-auto">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card-login text-white">
                            <div class="card-body">
                                <!-- username -->
                                <form action="" method="post">
                                    <div class="form-label">Username</div>
                                    <input name="username" type="text" class="form-control">
                                    <!-- Password -->
                                    <div class="form-label">Password</div>
                                    <input name="password" type="password" class="form-control">
                                    <!-- Button Submit -->
                                    <div>
                                        <input name="submit" type="submit" class="btn btn-primary mt-4"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        if(isset($_POST['submit'])){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $ambil = mysqli_query($con , "SELECT * FROM users WHERE username = '$username'");
            $data = mysqli_num_rows($ambil);
            $countData = mysqli_fetch_assoc($ambil);


            if($data == 1){
               if( password_verify($password, $countData['password'])){
                $_SESSION['usernae'] = $countData['username'];
                $_SESSION['login'] = TRUE;
                header('location:main.php');
                exit;
               }else{
                "<script>
                alert('password salah');
                </script>";
               }
                
            }
            
        }
    ?>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>