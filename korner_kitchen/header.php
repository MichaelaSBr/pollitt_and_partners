<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/css/main.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://use.fontawesome.com/c9fad39fb9.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>
<body <?php body_class(); ?>>

  <div id="splash">
    <div class="wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/splash.png" alt="Korner Kitchen" class="splash-img">
      <a class="enter">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta.png" alt="Enter" class="splash-cta">
      </a>
    </div>
  </div>

   


  <div class="site-container">

  
    <!-- HEADER -->
    <header class="site-header sticky">
      <div class="site-header__container">
        <!-- mob nav -->
      
        <?php if (is_front_page()):  ?>
         <div class="site-header__container__mobileContainer">
          <div class="site-header__container__mobileContainer--item">
            <a href="#yamiko-mob" rel="modal:open"> Yamiko Menu</a>
            <a href="#dimko-mob" rel="modal:open"> Dimko Menu</a>
            <a href="#mexiko-mob" rel="modal:open"> Mexiko Menu</a>
          </div>
           <div class="site-header__container__mobileContainer--item">
            <a href="#about"> About</a>
            <a href="#contact"> Contact</a>
          </div>    
        </div>
         <?php endif; ?> 

          <?php if (is_page('privacy-policy')):  ?>
         <div class="site-header__container__mobileContainer">
          <div class="site-header__container__mobileContainer--item">
            <a href="#yamiko-mob" rel="modal:open"> Yamiko Menu</a>
            <a href="#dimko-mob" rel="modal:open"> Dimko Menu</a>
            <a href="#mexiko-mob" rel="modal:open"> Mexiko Menu</a>
          </div>
           <div class="site-header__container__mobileContainer--item">
            <a href="<?php echo home_url() ?>/#about"> About</a>
            <a href="<?php echo home_url() ?>/#contact"> Contact</a>
          </div>    
        </div>
         <?php endif; ?> 

        <div class="site-header__container__logoContainer">
          <div class="site-header__container__logoContainer--item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deliveroo-logo.png" alt="Deliveroo">
          </div>
          <div class="site-header__container__logoContainer--item">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kk-logo.png" alt="Korner Kitchen Logo" class="big transition show">
              <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/kk-small-logo.png" alt="Korner Kitchen Logo" class="small transition hide"> -->
            </a>
          </div>
          <div class="site-header__container__logoContainer--item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kosher-logo.png" alt="Kosher Logo">
          </div>
          <div class="site-header__container__logoContainer--item hide-desktop">
             <div class="bar1"></div>
             <div class="bar2"></div>
             <div class="bar3"></div>
          </div>
        </div>
        <div class="line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line.png" alt="line"> 
        </div>
        <!-- desktop nav -->
        <?php if (is_front_page()):  ?>
        <nav class="site-header__container__navContainer">
          <div class="site-header__container__navContainer--item left">
            <a href="#yamiko" rel="modal:open"> Yamiko Menu</a>
            <a href="#dimko" rel="modal:open"> Dimko Menu</a>
            <a href="#mexiko" rel="modal:open"> Mexiko Menu</a>
          </div>
           <div class="site-header__container__navContainer--item right">
            <a href="#about"> About</a>
            <a href="#contact"> Contact</a>
          </div>    
        </nav>
        <?php endif; ?> 
        <?php if (is_page('privacy-policy')):  ?>
        <nav class="site-header__container__navContainer">
          <div class="site-header__container__navContainer--item left">
            <a href="#yamiko" rel="modal:open"> Yamiko Menu</a>
            <a href="#dimko" rel="modal:open"> Dimko Menu</a>
            <a href="#mexiko" rel="modal:open"> Mexiko Menu</a>
          </div>
           <div class="site-header__container__navContainer--item right">
            <a href="<?php echo home_url() ?>/#about"> About</a>
            <a href="<?php echo home_url() ?>/#contact"> Contact</a>
          </div>    
        </nav>
        <?php endif; ?> 
      </div>
    </header>
      <!-- HEADER -->
