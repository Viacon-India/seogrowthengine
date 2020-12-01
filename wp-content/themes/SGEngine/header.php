<!DOCTYPE html>
<html lang="en">

<?php

global $main_page_url, $front_pageID, $abn_logo;
global $register_link, $login_link, $advertiser_link;

$front_pageID = get_option('page_on_front');
$main_page_url = 'https://www.seogrowthengine.io';
$seo_title = get_post_meta(get_the_ID(), '_yoast_wpseo_title', true);

//$favicon = get_field('favicon', $front_pageID );
//$logo = get_field( "logo", $front_pageID );


/*************** LOGO & FAVICON **************/
$abn_home_page = get_option('home_page');
$abn_logo = $abn_home_page['abn_logo'];
$abn_favicon = $abn_home_page['abn_favicon'];


/***************** Page Links *******************/
/* $page_link = get_option('page_links');
$register_link = $page_link['abn_register_link'];
$login_link = $page_link['abn_login_link'];
$advertiser_link = $page_link['abn_advertiser_link']; */

?>



  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php //echo SGE_URI; ?>/assets/styles/style.css" />

    <?php if(!empty($abn_favicon)) { ?>
    <link rel="icon" href="<?php echo $abn_favicon; ?>" sizes="32x32" type="image/png">
    <?php } ?>

    <?php wp_head(); ?>
    <meta property="og:image" content="<?php echo get_template_directory_uri().'/images/bo-small-logo.png'; ?>" />
    <meta name="twitter:image" content="<?php echo $abn_logo; ?>">

  </head>

  <?php if(is_front_page()) {
    $bodyclass = 'home';
  } elseif(is_page('blog')) {
   $bodyclass = 'blog-listing js';
  } elseif(is_page('contact-us')) {
    $bodyclass = 'contact-us-template';
  } elseif(is_page('about-us') || is_page('privacy-policy') || is_page('terms-of-use')) {
    $bodyclass = 'about-us-template';
  } elseif( is_single()) {
    $bodyclass = 'blogpost case-study-page';
  } else { 
    $bodyclass = 'blogpost';
  } ?>

  <body <?php body_class($bodyclass); ?>>
    <nav class="top-nav navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a href="<?php echo home_url(); ?>">
          <?php if(!empty($abn_logo)) { ?>
          <img src="<?php echo $abn_logo; ?>" alt="logo" class="img-fluid" style="width: 125px;"/>
          <?php } ?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="service.html"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Guest Post Service</a>
                <a class="dropdown-item" href="#">Link Building Service</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="case-study.html">Case Study</a>
            </li>
          </ul> -->

          <?php wp_nav_menu( array(
              'menu'           => 'Header Menu', // Do not fall back to first non-empty menu.
              'menu_class'=> 'navbar-nav ml-auto',
              'theme_location' => 'top',
              'fallback_cb'    => false // Do not fall back to wp_page_menu()
          ) );
          ?>
        </div>
      </div>
    </nav>