<?php
    include_once("config.php");

    session_start();

    if (!isset($_SESSION['session_username']) || $_SESSION['session_tipe'] != '2') {
        header("Location: login.php");
        exit();
    }

    // Mengatur jumlah data yang ditampilkan per halaman
    $limit = isset($_GET['limit']) ? $_GET['limit'] : 5;

    // Daftar opsi jumlah baris data yang ditampilkan
    $limit_options = array(5, 10, 50, 100);

    // Memastikan nilai $limit ada dalam daftar opsi
    if (!in_array($limit, $limit_options)) {
        $limit = 5; // Nilai default jika tidak valid
    }

    // Mendapatkan halaman saat ini dari parameter URL
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Menghitung offset berdasarkan halaman saat ini
    $offset = ($page - 1) * $limit;

    // Mengambil data karyawan dengan batasan limit dan offset
    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE tipe = '1' ORDER BY nama ASC LIMIT $limit OFFSET $offset");

    // Menghitung jumlah total data karyawan
    $total_rows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM users WHERE tipe = '1'"));

    // Menghitung jumlah halaman
    $total_pages = ceil($total_rows / $limit);

    // Fungsi untuk mengubah tipe menjadi 0
    function changeTypeToZero($id)
    {
        global $mysqli;
        mysqli_query($mysqli, "UPDATE users SET tipe = '0' WHERE id = '$id'");
    }

    if (isset($_POST['add_emp'])) {
        $username = $_POST['username'];
        $q1 = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username'");
        $r1 = mysqli_fetch_array($q1);
        if (!$r1) {
            echo "<script>alert('Username tidak ditemukan.');</script>";
        } else if ($r1['tipe'] == '1') {
            echo "<script>alert('".$r1['nama']." sudah menjadi karyawan.');</script>";
        } else {
            echo "<script>window.location.href = 'add_emp.php?username=".$username."';</script>";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Laundry Dong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container justify-content-beetween">
            <h5 class="navbar-brand text-white">LaundryDong</h5>
            <div>
                <button class="btn btn-outline-light" type="button"><a href="employee.php" style="text-decoration: none; color: white;">Data Pelanggan</a></button>
                <button class="btn btn-danger ms-1" type="button"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col my-3">
            <img src="images/admin.png" width="100%">
        </div>
        <h1 class="fw-bold mb-4">Data Karyawan</h1>

        <?php if(mysqli_num_rows($result) > 0): ?>
            <div class="row">
                <div class="col-6 d-flex flex-row align-items-center mb-3 gap-2">
                    <div>show</div>
                    <form style="width: 12%;">
                        <select class="form-select" name="limit" id="limit" onchange="this.form.submit()">
                            <?php foreach ($limit_options as $option): ?>
                                <option value="<?php echo $option; ?>" <?php if($limit == $option) echo "selected"; ?>>
                                    <?php echo ($option == 'all') ? 'Semua' : $option; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                    <div>entries</div>
                </div>
                <div class="col-2 mx-auto"></div>
                <form class="col-4 d-flex h-100" action="admin.php" method="post" name="form_admin">
                    <input class="form-control me-2 ms-auto" type="search" style="width: 52%;" placeholder="Search" aria-label="Search" name="username">
                    <button class="btn btn-outline-primary" type="submit" name="add_emp">Tambah Karyawan</button>
                </form>
            </div>
        
            <table class="table table-bordered table-hover table-responsive">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = ($page - 1) * $limit;
                        while($user_data = mysqli_fetch_array($result)) {
                            $i++;
                            echo "<tr>";
                            echo "<th scope='row'>".$i."</th>";
                            echo "<td>".$user_data['nama']."</td>";
                            echo "<td>".$user_data['username']."</td>";
                            echo "<td>".$user_data['telepon']."</td>";
                            echo "<td>".$user_data['alamat']."</td>";
                            echo "<td>";
                            echo "<a href='delete_emp.php?id=".$user_data['id']."' onclick='return confirm(\"Apakah anda yakin ingin memecat ".$user_data['username']."?\")'>";
                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-trash-fill' viewBox='0 0 16 16'>";
                            echo "<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>";
                            echo "</svg>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if($page > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=1&limit=<?php echo $limit; ?>" aria-label="First">
                                    <span aria-hidden="true">First</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo ($page - 1); ?>&limit=<?php echo $limit; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="page-item disabled">
                                <span class="page-link">First</span>
                            </li>
                            <li class="page-item disabled">
                                <span class="page-link">&laquo;</span>
                            </li>
                        <?php endif; ?>

                        <?php
                            // Menghitung batasan tautan pagination yang ditampilkan
                            $start_link = max(1, min($page - 2, $total_pages - 4));
                            $end_link = min($start_link + 4, $total_pages);

                            for($p = $start_link; $p <= $end_link; $p++):
                        ?>
                            <li class="page-item <?php if($p == $page) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $p; ?>&limit=<?php echo $limit; ?>"><?php echo $p; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if($page < $total_pages): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo ($page + 1); ?>&limit=<?php echo $limit; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $total_pages; ?>&limit=<?php echo $limit; ?>" aria-label="Last">
                                    <span aria-hidden="true">Last</span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="page-item disabled">
                                <span class="page-link">&raquo;</span>
                            </li>
                            <li class="page-item disabled">
                                <span class="page-link">Last</span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>

        <?php else: ?>
            <div class="row">
                <div class="col-8 mx-auto"></div>
                <form class="col-4 d-flex h-100">
                    <input class="form-control me-2 ms-auto" type="search" style="width: 52%;" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Tambah Karyawan</button>
                </form>
            </div>
            <p class="text-center m-5">Belum ada karyawan.</p>
        <?php endif; ?>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>