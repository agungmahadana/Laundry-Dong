@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div style="height: 60vh; background-color: var(--bs-primary)"></div>
            <svg viewBox="50 90 100 10" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="100" cy="50" rx="100" ry="50" class="curvy" fill="var(--bs-primary)"></ellipse>
            </svg>
            <div class="page-header position-absolute top-0 w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-flex flex-column mx-0">
                            <div class="card card-plain gap-3">
                                <div class="row text-center text-white py-4">
                                    <p class="fs-4 m-0" style="font-weight: bold">KAMPUS LAUNDARY</p>
                                    <p class="fs-6 m-0" style="opacity: 80%">Jalan Goa Gong - Kabupaten Badung</p>
                                </div>
                                {{-- <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div> --}}
                                <div class="card-body shadow-lg bg-white rounded-3 p-lg-5 p-md-5">
                                    <div class="row text-center justify-content-center">
                                        <p class="fs-4 m-0" style="font-weight: bold; color: var(--bs-dark)">bagus ar</p>
                                        <div class="d-flex justify-content-center">
                                            <p class="px-2 my-0 bg-gray-400 text-white fw-bold rounded-2">ADW230313171840500</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center py-4">
                                        <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M85.1316 25.4413C86.0132 25.0625 86.9006 24.6945 87.7936 24.3375C96.2281 9.78676 111.971 0 130 0C148.029 0 163.772 9.78676 172.206 24.3375C173.099 24.6945 173.987 25.0625 174.868 25.4413C191.122 21.1158 209.175 25.3274 221.923 38.0761C234.672 50.8248 238.884 68.8776 234.558 85.1308C234.937 86.0127 235.305 86.9004 235.663 87.7936C250.213 96.2281 260 111.971 260 130C260 148.029 250.213 163.772 235.663 172.206C235.305 173.1 234.937 173.987 234.558 174.869C238.884 191.122 234.672 209.175 221.923 221.924C209.175 234.673 191.122 238.884 174.868 234.559C173.987 234.938 173.099 235.306 172.206 235.663C163.772 250.213 148.029 260 130 260C111.971 260 96.228 250.213 87.7936 235.663C86.9006 235.305 86.0132 234.937 85.1316 234.559C68.8782 238.884 50.8251 234.673 38.0763 221.924C25.3275 209.175 21.1159 191.122 25.4415 174.869C25.0626 173.987 24.6945 173.099 24.3375 172.206C9.78676 163.772 0 148.029 0 130C0 111.971 9.78676 96.2281 24.3375 87.7936C24.6945 86.9005 25.0626 86.013 25.4415 85.1313C21.1159 68.8779 25.3275 50.8249 38.0763 38.0761C50.8251 25.3273 68.8782 21.1157 85.1316 25.4413ZM187.942 106.707C193.019 101.63 193.019 93.3847 187.942 88.3077C182.865 83.2308 174.619 83.2308 169.542 88.3077L113.773 144.114L90.4581 120.8C85.3808 115.723 77.1353 115.723 72.058 120.8C66.9807 125.877 66.9807 134.123 72.058 139.2L104.553 171.692C109.63 176.769 117.875 176.769 122.953 171.692L187.942 106.707Z" fill="var(--bs-success)"/>
                                        </svg>
                                        {{-- <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M130 260C201.797 260 260 201.797 260 130C260 58.203 201.797 0 130 0C58.203 0 0 58.203 0 130C0 201.797 58.203 260 130 260ZM117.812 60.9375V130C117.812 134.062 119.844 137.871 123.246 140.156L171.996 172.656C177.582 176.414 185.148 174.891 188.906 169.254C192.664 163.617 191.141 156.102 185.504 152.344L142.188 123.5V60.9375C142.188 54.1836 136.754 48.75 130 48.75C123.246 48.75 117.812 54.1836 117.812 60.9375Z" fill="#FBD63E"/>
                                        </svg>                                             --}}
                                    </div>
                                    <div class="d-flex justify-content-between py-4 border-top border-bottom">
                                        <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Alamat</p>
                                        <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Jalan Raya Kampus Unud</p>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Terima</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Senin, 13 Maret 2023</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Selesai</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rabu, 15 Maret 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body shadow-lg bg-white rounded-3 p-lg-5 p-md-5">
                                    <p class="fs-4 m-0" style="font-weight: bold; color: var(--bs-dark)">Rincian Layanan</p>
                                    <div class="d-flex justify-content-between py-4">
                                        <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Cuci & Setrika — 3.17Kg</p>
                                        <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp19.020</p>
                                    </div>
                                    <div class="row py-4 border-top border-bottom">
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Subtotal</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp19.020</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Diskon</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp0</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Pajak</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp0</p>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Total Biaya</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp19.020</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Pembayaran</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp19.020</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Kembalian</p>
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Rp0</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fs-6 fw-bold m-0" style="color: var(--bs-dark)">Status</p>
                                            <p class="fs-6 fw-bold m-0 px-2 bg-success text-white rounded-2">Lunas</p>
                                        </div>
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
            <footer>
                <div {{-- style="background-color: rgb(0, 0, 0, 0.05)" --}}>
                    <div class="container">
                        <div class="row justify-content-center">
                            {{-- <div class="col-lg-6 border-bottom">
                                <h4 class="mt-4" style="font-weight: bold">Syarat & Ketentuan</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>
@endsection