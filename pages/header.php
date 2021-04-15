<div id="wrap">

  <!-- Header -->
  <header class="header">
    <div class="header-inner">
      <div class="container">
        <!-- Top Header -->
        <div class="header-top">

          <div class="row">
            <div class="col-sm-4 header-left col-xs-6">

            </div>
            <div class="col-sm-4 header-right col-sm-push-4  col-xs-6">

            </div>

            <!-- Logo -->
            <div id="logo" class="col-sm-4 logo col-sm-pull-4">
              <a href="../index.php"><img alt="Candylake"
                src="../logo.png"></a>
            </div>

          </div>
        </div>

      </div>

      <!-- Main Menu -->
        <nav id="primary-navigation" class="navbar" role="navigation">
          <div class="navbar-inner">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span> <span
                  class="icon-bar"></span> <span class="icon-bar"></span> <span
                  class="icon-bar"></span>
              </button>
              <h3 class="navbar-brand">Menu</h3>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php if ($page == "home") { echo "active"; } ?>"><a href="../index.php">Home</a></li>
                <li class="<?php if ($page == "about") { echo "active"; } ?>"><a href="about.php">About</a></li>
                <li class="<?php if ($page == "products") { echo "active"; } ?>"><a href="products.php">Products</a></li>
                <li class="<?php if ($page == "brochure") { echo "active"; } ?>"><a href="catalogue1.pdf" target="_blank">Catalogue</a></li>
                <li class="<?php if ($page == "export") { echo "active"; } ?>"><a href="export.php">Export</a></li>
                <li class="<?php if ($page == "contact") { echo "active"; } ?>"><a href="contact.php">Contacts</a></li>
              </ul>
            </div>
            <!--/.navbar-collapse -->
          </div>
        </nav>

    </div>

  </header>
