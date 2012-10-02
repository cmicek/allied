<?php include 'inc_header.php' ?>
  <body>  
    <header class="site-header">
      <div class="container">
        <a class="logo" href="index.php" title="North American Van Lines"><img src="assets/images/bg-logo-2x.png" alt="North American Van Lines" /></a>
        <a class="phone" href="tel:1 (800) 369-9115">Call us <span class="mobile-hidden">at: </span><strong class="mobile-hidden">1 (800) 369-9115</strong></a>
        <a href="#" class="primary-nav-toggle" data-toggle="" data-toggle-target=".site-header" data-toggle-target-on="primary-nav-active"><i></i></a>
        <ul class="primary-nav ">
          <li class="primary-nav-item primary-nav-item-active"><a class="primary-nav-link" href="household-moving.php">Household moving</a></li>
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
    <section class="texture-background">
      <div class="container ">
        <div class="page-header">
          <ol class="breadcrumbs">
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="">Breadcrumb history</a></li>
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="">Breadcrumb history</a></li>
            <li class="breadcrumb-item breadcrumb-item-end">Breadcrumb current</li>
          </ol>
          <h1 class="page-title">Page title</h1>
          <p class="intro">Intro sentence area</p>
        </div>
        <div class="sidebar">
          <?php include 'inc_social.php' ?>
        </div>
      </div>
    </section>
    <section class="white-background primary-content">
      <div class="container">
          <article class="primary-copy">
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

            <?php include 'inc_form_simple.php' ?>
            <h2>Header Level 2</h2>         
            <ol>
               <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
               <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>

            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

            <h3>Header Level 3</h3>
            <img src="assets/images/placeholder.jpg" alt="">

            <ul>
               <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
               <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <h4>Header Level 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            <h5>Header Level 5</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            <h6>Header Level 6</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
          </article>
          <aside class="sidebar content-sidebar">
            <?php include 'inc_sidebar_testimonial.php' ?>
            <?php include 'inc_sidebar_banner.php' ?>
          </aside>
          <ul class="secondary-nav">
            <li class="secondary-nav-item">
              <a class="secondary-nav-link" href="#">Secondary nav</a>
            </li>
            <li class="secondary-nav-item">
              <a class="secondary-nav-link" href="#">Secondary nav</a>
            </li>
            <li class="secondary-nav-item  secondary-nav-item-active">
              <a class="secondary-nav-link" href="#">Secondary nav parent/active</a>
              <ul class="tertiary-nav">
                <li class="tertiary-nav-item">
                  <a href="#" class="tertiary-nav-link">Tertiary Nav</a>
                </li>
                <li class="tertiary-nav-item tertiary-nav-item-active">
                  <a href="#" class="tertiary-nav-link">Tertiary Nav Active</a>
                </li>
                <li class="tertiary-nav-item">
                  <a href="#" class="tertiary-nav-link">Tertiary Nav</a>
                </li>
                <li class="tertiary-nav-item">
                  <a href="#" class="tertiary-nav-link">Tertiary Nav</a>
                </li>
              </ul>
            </li>
            <li class="secondary-nav-item">
              <a class="secondary-nav-link" href="#">Secondary nav</a>
            </li>
          </ul> 
        </div>
      </div>
    </section>
    <?php include 'inc_footer.php' ?>
