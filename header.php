<style>

</style>
    <div class="ms-main-container">
      <!-- Preloader -->
      <div class="ms-preloader"></div>
      <!-- Header -->
      <?php if ($page == "home") {
        ?>
        <header class="ms-header navbar-white">
        <?php
      } else {
        ?>
        <header class="ms-header">
          <?php
      }?>

     
        <nav class="ms-nav">
          <div class="ms-logo">
            <a href="index.php" data-type="page-transition">
              <div class="logo-dark"><img src="logo.png" alt="logo image"></div>
              <div class="logo-light current"><img src="logo.png" alt="logo image"></div>
            </a>
          </div>
          <button class="hamburger" type="button" data-toggle="navigation">
          <span class="hamburger-box">
            <!--<span class="hamburger-label">menu</span>--->
            <span class="hamburger-inner"></span>
          </span>
          </button>
          <div class="height-full-viewport">
            <ul class="ms-navbar">
              <!-- Nav Link -->
              <li class="nav-item">
                <a href="index.php" data-type="page-transition">
                  <span class="ms-btn">home</span>
                  <span class="nav-item__label">Back to home page</span>
                </a>
              </li>
              <!-- Nav Link -->
              <li class="nav-item">
                <a href="pages/about.php" data-type="page-transition">
                  <span class="ms-btn">About Us</span>
                  <span class="nav-item__label">Know about Candylake</span>
                </a>
              </li>
              <!-- Nav Link -->
              <li class="nav-item">
                <a href="pages/products.php" data-type="page-transition">
                  <span class="ms-btn">Products</span>
                  <span class="nav-item__label">Wide range of variety</span>
                </a>
              </li>
              <!-- Nav Link -->
              <li class="nav-item">
                <a target="_blank" href="pages/catalogue1.pdf">
                  <span class="ms-btn">Catalogue</span>
                  <span class="nav-item__label">Products showcase</span>
                </a>
              </li>
              <!-- Nav Link -->
              <li class="nav-item">
                <a href="pages/export.php" data-type="page-transition">
                  <span class="ms-btn">Export</span>
                  <span class="nav-item__label">Worldwide presence</span>
                </a>
              </li>
              <!-- Nav Link -->
              <li class="nav-item">
                <a href="pages/contact.php" data-type="page-transition">
                  <span class="ms-btn">contact</span>
                  <span class="nav-item__label">Get in touch and find us</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
