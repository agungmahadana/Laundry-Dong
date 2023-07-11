<?php
    session_start();
    include_once("config.php");

    $err = "";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == '' or $password == '') {
            $err .= "Username atau password tidak boleh kosong.";
        } else {
            $q1 = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username'");
            $r1 = mysqli_fetch_array($q1);
            if (!$r1) {
                $err .= "Username tidak terdaftar.";
            } else if ($r1['password'] != md5($password)) {
                $err .= "Password salah.";
            }

            if (empty($err)) {
                $_SESSION['session_id'] = $r1['id'];
                $_SESSION['session_username'] = $username;
                $_SESSION['session_tipe'] = $r1['tipe'];
                if ($r1['tipe'] == '2') {
                    header("Location: admin.php");
                } else if ($r1['tipe'] == '1') {
                    header("Location: employee.php");
                } else {
                    echo "<script>alert('Anda tidak memiliki akses.'); window.location='login.php';</script>";
                    exit();
                }
                exit();
            }
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk - Laundry Dong</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container min-vh-100">
            <div class="row align-items-center min-vh-100">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto align-items-center">
                    <div class="col-10">
                        <div>
                            <div>
                                <h4 class="fw-bold">Halo!</h4>
                                <p>Ketikkan username dan password anda untuk masuk</p>
                            </div>
                            <div>
                                <form action="login.php" method="post" name="form_login">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 shadow-sm" name="login" value="Login">Masuk</button>
                                </form>
                                <?php if (!empty($err)): ?>
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <?php echo $err; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="text-center pt-2">
                                <p class="text-sm">
                                    Belum punya akun?
                                    <a href="register.php">Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 p-0 position-absolute end-0 text-center justify-content-center flex-column">
                    <div class="h-100 m-3 rounded d-flex flex-column justify-content-center"
                        style="background-image: url('images/login.png'); background-size: cover">
                        <h4 class="mt-5 text-white fw-bold">"Perhatian adalah mata uang baru"</h4>
                        <p class="text-white px-5">Semakin terlihat mudah membersihkan, semakin banyak tenaga yang sebenarnya dikeluarkan oleh pencuci.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>