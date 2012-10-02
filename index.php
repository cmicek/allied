<?php include 'inc_header.php' ?>
  <body>  
    <header class="site-header">
      <div class="container">
        <a class="logo" href="index.php" title="North American Van Lines"><img src="assets/images/bg-logo-2x.png" alt="North American Van Lines" /></a>
        <a class="phone" href="#">Call us <span class="mobile-hidden">at: </span><strong class="mobile-hidden">1 (800) 369-9115</strong></a>
        <a href="#" class="primary-nav-toggle" data-toggle="" data-toggle-target=".site-header" data-toggle-target-on="primary-nav-active"><i></i></a>
        <ul class="primary-nav ">
          <li class="primary-nav-item"><a class="primary-nav-link" href="household-moving.php">Household moving</a></li>
          <li class="primary-nav-item"><a class="primary-nav-link" href="corporate-relocation.php">Corporate Relocation</a></li>
          <li class="primary-nav-item"><a class="primary-nav-link" href="international-moving.php">International Moving</a></li>
          <li class="primary-nav-item primary-nav-search">
            <a class="primary-nav-link" href="#" data-toggle="">Search<i></i></a>
            <div class="primary-nav-search-box">
              <form action="" method="">
                <input type="text" class="search-input" placeholder="Search">
                <input type="submit" class="btn btn-red btn-small btn-search" value="Go &rsaquo;">
              </form>
            </div>
          </li>
        </ul>
      </div>  
    </header>
    <section class="picture-background home-picture">
      <img class="bg" src="assets/images/home-feature.jpg" alt="">
      <div class="container">
        <h1 class="page-title home-title">Moving companies with experience</h1>

        <div class="home-form">
          <?php include 'inc_form_simple.php' ?>
        </div>
        <div class="home-banner">
          <?php include 'inc_sidebar_banner.php' ?>
        </div>
      </div>
    </section>
    <section class="texture-background">
      <div class="container" style="padding: 50px">
        homepage content
      </div>
    </section>
    <?php include 'inc_footer.php' ?>