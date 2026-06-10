<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li><!-- End Home Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
        <i class="bi bi-cart-check"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->

    <?php
    if (session()->get('role') == 'admin') {
      ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
          <i class="bi bi-receipt"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Produk Nav -->
      <?php
    }
    ?>

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'Contact') ? "" : "collapsed" ?>" href="contact">
        <i class="bi bi-cart-check"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="<?= base_url('faq') ?>">
        <i class="bi bi-envelope"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End FAQ Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>"
        href="<?= base_url('profile') ?>">

        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>

  </ul>

</aside><!-- End Sidebar-->