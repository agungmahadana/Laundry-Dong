<?php
    include_once("config.php");

    session_start();

    if (!isset($_SESSION['session_username']) || $_SESSION['session_tipe'] == '0') {
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
    $result = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE status = '0' ORDER BY id DESC LIMIT $limit OFFSET $offset");

    // Menghitung jumlah total data karyawan
    $total_rows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM transaksi WHERE status = '0'"));

    // Menghitung jumlah halaman
    $total_pages = ceil($total_rows / $limit);

    // Fungsi untuk mengubah tipe menjadi 0
    function changeTypeToZero($id)
    {
        global $mysqli;
        mysqli_query($mysqli, "UPDATE users SET tipe = '0' WHERE id = '$id'");
    }

    if (isset($_POST['add_cus'])) {
        // Mendapatkan id_karyawan dari sesi atau dari data pengguna yang login
        $id_karyawan = $_SESSION['session_id']; // Ganti dengan cara Anda mendapatkan id_karyawan
    
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $kuantitas = $_POST['kuantitas'];
        $keterangan = $_POST['keterangan'];
        $pengambilan = $_POST['pengambilan'];
        $estimasi = $_POST['estimasi'];
    
        if ($nama == '' or $telepon == '' or $alamat == '' or $kuantitas == '' or $keterangan == '2' or $pengambilan == '2' or $estimasi == '') {
            echo "<script>alert('Semua kolom tidak boleh kosong.');</script>";
        } else {
            // Generate kode_transaksi unik
            $kode_transaksi = generateUniqueCode($mysqli);
    
            $q1 = mysqli_query($mysqli, "INSERT INTO transaksi (id_karyawan, kode_transaksi, nama_pelanggan, telepon_pelanggan, alamat_pelanggan, kuantitas, keterangan, status, pengambilan, tanggal_terima, estimasi_selesai) VALUES ($id_karyawan, '$kode_transaksi', '$nama', '$telepon', '$alamat', '$kuantitas', '$keterangan', '0', '$pengambilan', NOW(), '$estimasi')");
        }
    }
    
    // Fungsi untuk menghasilkan kode_transaksi unik
    function generateUniqueCode($mysqli) {
        $code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 10)); // Generate kode acak
    
        // Periksa apakah kode_transaksi sudah ada di database
        $q2 = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE kode_transaksi = '$code'");
        $rows = mysqli_num_rows($q2);
    
        if ($rows > 0) {
            // Jika kode_transaksi sudah ada, rekursif panggil fungsi kembali untuk menghasilkan kode baru
            return generateUniqueCode($mysqli);
        } else {
            // Jika kode_transaksi unik, kembalikan kode tersebut
            return $code;
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee - Laundry Dong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container justify-content-beetween">
            <h5 class="navbar-brand text-white">LaundryDong</h5>
            <div>
                <?php if ($_SESSION['session_tipe'] == '2') { echo '<button class="btn btn-outline-light" type="button"><a href="admin.php" style="text-decoration: none; color: white;">Data Karyawan</a></button>'; } ?>
                <button class="btn btn-danger ms-1" type="button"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col my-3">
            <img src="images/employee.png" width="100%">
        </div>
        <h1 class="fw-bold mb-4">Data Pelanggan</h1>

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
                <div class="col-4 d-flex h-100">
                    <button class="btn btn-outline-primary ms-auto" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Pelanggan</button>
                </div>
            </div>
        
            <table class="table table-bordered table-hover table-responsive">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Transaksi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kuantitas (kg)</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Pengambilan</th>
                        <th scope="col">Tanggal Terima</th>
                        <th scope="col">Estimasi Selesai</th>
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
                            echo "<td>".$user_data['kode_transaksi']."</td>";
                            echo "<td>".$user_data['nama_pelanggan']."</td>";
                            echo "<td>".$user_data['telepon_pelanggan']."</td>";
                            echo "<td>".$user_data['alamat_pelanggan']."</td>";
                            echo "<td>".$user_data['kuantitas']."</td>";
                            echo "<td>".($user_data['keterangan'] == 0 ? 'Cuci' : 'Cuci + Setrika')."</td>";
                            echo "<td>".($user_data['pengambilan'] == 0 ? 'Ditempat' : 'Diantar')."</td>";
                            echo "<td>".$user_data['tanggal_terima']."</td>";
                            echo "<td>".$user_data['estimasi_selesai']." Hari</td>";
                            echo "<td>";
                            echo "<a href='delete_cus.php?id=".$user_data['id']."' onclick='return confirm(\"Apakah anda yakin sudah menyelesaikan pesanan ".$user_data['nama_pelanggan']."?\")'>";
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2dce89" class="bi bi-check-square-fill" viewBox="0 0 16 16">';
                            echo '<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>';
                            echo '</svg>';
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="employee.php" method="post" name="form_employee">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pelanggan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                            <input type="text" class="form-control mt-3" id="telepon" aria-describedby="emailHelp" placeholder="Telepon" name="telepon">
                            <textarea class="form-control mt-3" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" name="alamat"></textarea>
                            <input type="number" class="form-control mt-3" id="kuantitas" aria-describedby="emailHelp" placeholder="Kuantitas" name="kuantitas">
                            <select class="form-select mt-3" aria-label="Default select example" name="keterangan">
                                <option selected value="2">Pilih keterangan</option>
                                <option value="0">Cuci</option>
                                <option value="1">Cuci + Setrika</option>
                            </select>
                            <select class="form-select mt-3" aria-label="Default select example" name="pengambilan">
                                <option selected value="2">Pilih pengambilan</option>
                                <option value="0">Ditempat</option>
                                <option value="1">Diantar</option>
                            </select>
                            <input type="number" class="form-control mt-3" id="estimasi" aria-describedby="emailHelp" placeholder="Estimasi" name="estimasi">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="add_cus">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>