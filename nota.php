<?php
    include_once("config.php");
    $kode = $_GET['kode'];
    $user_data = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM transaksi WHERE kode_transaksi = '$kode'"));
    $employee_data = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM users WHERE id = '$user_data[id_karyawan]'"));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nota - Laundry Dong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div style="height: 60vh; background-color: #0D6DFD"></div>
    <svg viewBox="50 90 100 10" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="100" cy="50" rx="100" ry="50" class="curvy" fill="#0D6DFD"></ellipse>
    </svg>
    <div class="position-absolute top-0 w-100">
        <div class="container top-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column mx-0">
                    <div class="row gap-3">
                        <div class="row text-white text-center py-4">
                            <p class="fs-4 m-0" style="font-weight: bold">LAUNDRY DONG</p>
                            <p class="fs-6 m-0" style="opacity: 80%">Jalan In Aja Dulu - Denpasar Bali</p>
                        </div>
                        <div class="shadow-lg bg-white rounded-3 p-lg-5 p-md-5 p-4">
                            <div class="row text-center justify-content-center">
                                <p class="fs-4 m-0" style="font-weight: bold; color: #344767"><?php echo $user_data['nama_pelanggan'] ?></p>
                                <div class="d-flex justify-content-center">
                                    <p class="px-2 my-0 text-white fw-bold rounded-1" style="background-color: #ced4da;"><?php echo $user_data['kode_transaksi'] ?></p>
                                </div>
                            </div>

                            <div class="row justify-content-center py-4">
                                <?php if ($user_data['status'] == 0): ?>
                                    <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M130 260C201.797 260 260 201.797 260 130C260 58.203 201.797 0 130 0C58.203 0 0 58.203 0 130C0 201.797 58.203 260 130 260ZM117.812 60.9375V130C117.812 134.062 119.844 137.871 123.246 140.156L171.996 172.656C177.582 176.414 185.148 174.891 188.906 169.254C192.664 163.617 191.141 156.102 185.504 152.344L142.188 123.5V60.9375C142.188 54.1836 136.754 48.75 130 48.75C123.246 48.75 117.812 54.1836 117.812 60.9375Z" fill="#fbd63e"/>
                                    </svg>
                                <?php else: ?>
                                    <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M85.1316 25.4413C86.0132 25.0625 86.9006 24.6945 87.7936 24.3375C96.2281 9.78676 111.971 0 130 0C148.029 0 163.772 9.78676 172.206 24.3375C173.099 24.6945 173.987 25.0625 174.868 25.4413C191.122 21.1158 209.175 25.3274 221.923 38.0761C234.672 50.8248 238.884 68.8776 234.558 85.1308C234.937 86.0127 235.305 86.9004 235.663 87.7936C250.213 96.2281 260 111.971 260 130C260 148.029 250.213 163.772 235.663 172.206C235.305 173.1 234.937 173.987 234.558 174.869C238.884 191.122 234.672 209.175 221.923 221.924C209.175 234.673 191.122 238.884 174.868 234.559C173.987 234.938 173.099 235.306 172.206 235.663C163.772 250.213 148.029 260 130 260C111.971 260 96.228 250.213 87.7936 235.663C86.9006 235.305 86.0132 234.937 85.1316 234.559C68.8782 238.884 50.8251 234.673 38.0763 221.924C25.3275 209.175 21.1159 191.122 25.4415 174.869C25.0626 173.987 24.6945 173.099 24.3375 172.206C9.78676 163.772 0 148.029 0 130C0 111.971 9.78676 96.2281 24.3375 87.7936C24.6945 86.9005 25.0626 86.013 25.4415 85.1313C21.1159 68.8779 25.3275 50.8249 38.0763 38.0761C50.8251 25.3273 68.8782 21.1157 85.1316 25.4413ZM187.942 106.707C193.019 101.63 193.019 93.3847 187.942 88.3077C182.865 83.2308 174.619 83.2308 169.542 88.3077L113.773 144.114L90.4581 120.8C85.3808 115.723 77.1353 115.723 72.058 120.8C66.9807 125.877 66.9807 134.123 72.058 139.2L104.553 171.692C109.63 176.769 117.875 176.769 122.953 171.692L187.942 106.707Z" fill="#2dce89"/>
                                    </svg>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-between py-4 border-top border-bottom">
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d">Contact Person</p>
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo $employee_data['nama'] ?> (<?php echo $employee_data['telepon'] ?>)</p>
                            </div>
                            <div class="row pt-4">
                                <div class="d-flex justify-content-between">
                                    <p class="fs-6 fw-bold m-0" style="color: #6c757d">Tanggal Terima</p>
                                    <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo $user_data['tanggal_terima'] ?></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="fs-6 fw-bold m-0" style="color: #6c757d">Estimasi Selesai</p>
                                    <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo $user_data['estimasi_selesai'] ?> Hari</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body shadow-lg bg-white rounded-3 p-lg-5 p-md-5 p-4">
                            <p class="fs-4 m-0" style="font-weight: bold; color: #6c757d">Rincian Layanan</p>
                            <div class="d-flex justify-content-between pt-4">
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d">Keterangan</p>
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo ($user_data['keterangan'] == 0 ? 'Cuci' : 'Cuci + Setrika') ?></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d">Kuantitas</p>
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo $user_data['kuantitas'] ?>Kg</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d">Metode Pengambilan</p>
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d"><?php echo ($user_data['pengambilan'] == 0 ? 'Ditempat' : 'Diantar') ?></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fs-6 fw-bold m-0" style="color: #6c757d">Status</p>
                                <?php if ($user_data['status'] == 0): ?>
                                    <p class="fs-6 fw-bold m-0 px-2 text-white rounded-1" style="background-color: #fbd63e;">Sedang Dikerjakan</p>
                                <?php else: ?>
                                    <p class="fs-6 fw-bold m-0 px-2 text-white rounded-1" style="background-color: #2dce89;">Selesai Dikerjakan</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-muted fs-4 fw-bold pb-2 border-bottom">Syarat & Ketentuan</p>
                        <p class="text-muted fs-6">
                            1. Pengambilan barang harap disertai nota.<br>
                            2. Barang yang tidak diambil selama 1 minggu, hilang/rusak bukan tanggung jawab laundry.<br>
                            3. Barang hilang/rusak karena proses pengerjaan diganti rugi maksimal 5x dari biaya jasa cuci barang yang rusak/hilang.<br>
                            4. Pakaian luntur bukan menjadi tanggung jawab kami.<br>
                            5. Cek kelengkapan laundry-an anda terlebih dahulu sebelum meninggalkan outlet, karena kami tidak menerima komplain setelah meninggalkan outlet.<br>
                            6. Setiap konsumen dianggap setuju dengan isi syarat & peraturan laundry kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>