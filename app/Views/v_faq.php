<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section faq">
    <div class="row">

        <div class="col-lg-6">

            <div class="card basic">
                <div class="card-body">
                    <h5 class="card-title">Pertanyaan Umum</h5>

                    <div>
                        <h6>1. Bagaimana cara membeli laptop di toko ini?</h6>
                        <p>Sangat mudah. Anda hanya perlu login ke akun Anda, masuk ke menu Produk, pilih laptop yang diinginkan, dan klik tombol "Tambah ke Keranjang". Setelah itu, Anda bisa melanjutkan ke proses pembayaran.</p>
                    </div>

                    <div class="pt-2">
                        <h6>2. Apakah toko ini memiliki cabang fisik (offline)?</h6>
                        <p>Untuk saat ini, kami berfokus pada penjualan secara online untuk memberikan harga terbaik bagi pelanggan kami di seluruh Indonesia.</p>
                    </div>

                    <div class="pt-2">
                        <h6>3. Apakah harga yang tertera sudah pas?</h6>
                        <p>Ya, semua harga yang tertera di website kami adalah harga pas dan sudah termasuk pajak (PPN).</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengiriman & Packing</h5>

                    <div class="accordion accordion-flush" id="faq-group-1">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                                    Berapa lama estimasi pengiriman barang?
                                </button>
                            </h2>
                            <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Pesanan akan diproses maksimal 1x24 jam setelah pembayaran dikonfirmasi. Estimasi pengiriman reguler memakan waktu 2-4 hari kerja tergantung lokasi tujuan Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                                    Apakah packing dipastikan aman untuk laptop?
                                </button>
                            </h2>
                            <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Tentu saja. Semua pengiriman laptop diwajibkan menggunakan sistem keamanan berlapis (Double Bubble Wrap tebal) dan wajib menggunakan packing kayu dari pihak ekspedisi demi keamanan ekstra.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Garansi Produk</h5>

                    <div class="accordion accordion-flush" id="faq-group-2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                                    Apakah laptop yang dijual bergaransi resmi?
                                </button>
                            </h2>
                            <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Semua laptop dan produk elektronik yang kami jual adalah 100% Original dan memiliki garansi resmi dari masing-masing brand (seperti Asus, Lenovo, Acer, dll) selama 1 hingga 2 tahun.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                                    Bagaimana cara klaim garansi jika terjadi kerusakan?
                                </button>
                            </h2>
                            <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Anda bisa langsung membawa laptop berserta nota pembelian (invoice) dan kartu garansi ke Service Center Resmi terdekat di kota Anda. Garansi tidak berlaku untuk kerusakan akibat kelalaian pengguna (jatuh, kena air, dll).
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan & Bantuan</h5>

                    <div class="accordion accordion-flush" id="faq-group-3">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                                    Bagaimana jika saya lupa password akun saya?
                                </button>
                            </h2>
                            <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Saat ini fitur reset password mandiri sedang dalam pengembangan. Silakan hubungi Customer Service kami melalui menu <strong>Contact</strong>, sebutkan username Anda, dan kami akan membantu mereset akses Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                                    Apakah barang yang cacat saat diterima bisa diretur?
                                </button>
                            </h2>
                            <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Bisa, dengan syarat <strong>wajib menyertakan video unboxing</strong> dari awal paket dibuka (tanpa jeda). Klaim retur maksimal 2x24 jam sejak barang dinyatakan diterima oleh sistem ekspedisi.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>