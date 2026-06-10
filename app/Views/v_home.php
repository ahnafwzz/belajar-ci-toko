<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<!-- Table with stripped rows -->
<div class="row g-4">
    <?php if (empty($products)) : ?>
        <div class="col-12 text-center py-5">
            <i class="bi bi-search text-muted" style="font-size: 4rem;"></i>
            <h3 class="mt-3 text-secondary">Oops! Hasil pencarian tidak ditemukan.</h3>
            
            <?php if (isset($_GET['keyword'])) : ?>
                <p class="text-muted">Kami tidak dapat menemukan produk dengan nama <strong>"<?= esc($_GET['keyword']) ?>"</strong>.</p>
                <p>Mungkin kamu sedang mencari informasi? Coba cek halaman <a href="<?= base_url('faq') ?>" class="text-primary fw-bold text-decoration-underline">F.A.Q (Bantuan)</a> kami.</p>
                <a href="<?= base_url('/') ?>" class="btn btn-outline-primary mt-3 rounded-pill px-4">Kembali ke Katalog</a>
            <?php endif; ?>
        </div>
    <?php else : ?>
    
        <?php foreach ($products as $key => $item): ?>
            <div class="col-lg-6">
                <?= form_open('keranjang', ['class' => 'h-100']) ?>
                <?php
                echo form_hidden('id', $item['id']);
                echo form_hidden('nama', $item['nama']);
                echo form_hidden('harga', $item['harga']);
                echo form_hidden('foto', $item['foto']);
                ?>
                <div class="card h-100 shadow border rounded-4 mb-0">
                    <div class="card-body d-flex flex-column align-items-center text-center pt-4">
                        <img src="<?= base_url() . "img/" . $item['foto'] ?>" alt="<?= esc($item['nama']) ?>" style="height: 200px; width: 100%; object-fit: contain;" class="mb-3">
                        <h5 class="card-title p-0 m-0 mb-2" style="font-size: 1.1rem; line-height: 1.4;"><?= $item['nama'] ?></h5>
                        <h6 class="fw-bold text-primary mb-3"><?= number_to_currency($item['harga'], 'IDR') ?></h6>
                        <button type="submit" class="btn btn-info rounded-pill px-5 mt-auto text-white fw-bold">Beli</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        <?php endforeach ?>
        
    <?php endif; ?>
</div>
<!-- End Table with stripped rows -->
<?= $this->endSection() ?>