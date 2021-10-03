<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<!-- MAIN -->
<main class="site-main">
  <!-- -->
<?php get_template_part('template-parts/menu-modal/menu-modal'); ?>

  <section class="module__hero__gallery">
    <h1>EXPLORE THE TASTE <br>OF GLOBAL KOSHER <br>CUISINE</h1>
    <div class="swiper module__hero__gallery__container">
      <div class="swiper-wrapper">
          <?php 
            $images = get_field('hero_gallery');
            if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                      <div class="swiper-slide">
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="module__about__us" id="about">
    <div class="module__about__us__container">
      <h2>Explore the Taste of<br> Global Kosher Cuisine.</h2>
      <p>Korner Kitchen is the UK’s first Kosher Food Hall, offering the finest international culinary&nbsp;flavours!</p>
      <p>From Japanese with a South American twist to Mexican Street Food and hot Asian fusion; Korner Kitchen takes inspiration from the world's best food halls to offer the finest fresh, prepared, frozen and gourmet Kosher&nbsp;cuisines.</p>
      <p class="bold">Dine-in, Pre-Order, Grab and Go, or have it delivered to your&nbsp;home.</p>
    </div>
  </section>

  <section class="module__menu">
    <div class="module__menu__container">

      <div class="module__menu__container--item yamiko">
        <div class="module__menu__container--item--text">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamiko-logo.png" alt="YamiKo logo">
          <p>SUSHI WITH A <br> SOUTH AMERICAN TWIST <br> <a class="component__cta hide-desktop" href="#yamiko-mob" rel="modal:open">View Menu </a></p>
          <a class="component__cta hide-mobile" href="#yamiko" rel="modal:open">View Menu </a>  
        </div>
        <div class="module__menu__container--item--img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamiko-hero-a.png" alt="YamiKo" class="hide-mobile img-a" data-aos="fade-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamiko-hero-b.png" alt="YamiKo" class="hide-mobile img-b" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamiko-hero-mobile.png" alt="YamiKo" class="hide-desktop">
        </div>       
      </div>

      <div class="module__menu__container--item dimko" >
        <div class="module__menu__container--item--img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimko-hero-a.png" alt="dimko" class="hide-mobile img-a" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimko-hero-b.png" alt="dimko" class="hide-mobile img-b" data-aos="fade-down">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimko-hero-mobile.png" alt="dimko" class="hide-desktop">
        </div> 
        <div class="module__menu__container--item--text">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimko-logo.png" alt="DimKo logo">
          <p>ASIAN FUSION <br>FLAVOURS, INCLUDING<br>CHICKEN KATSU, <br>SPRING ROLLS<br>& NOODLE DISHES <br> <a class="component__cta hide-desktop" href="#dimko-mob" rel="modal:open">View Menu </a> </p>
           <a class="component__cta hide-mobile" href="#dimko" rel="modal:open">View Menu </a>  
        </div>      
      </div>

      <div class="module__menu__container--item mexiko" >
        <div class="module__menu__container--item--text" >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mexiko-logo.png" alt="Mexiko logo">
          <p>BRINGING ALL THE <br>FLAVOURS OF MEXICAN <br>TACOS,BURRITOS <br>AND LOADED-NACHOS! <br> <a class="component__cta hide-desktop" href="#mexiko-mob" rel="modal:open">View Menu </a></p>
          <a class="component__cta hide-mobile" href="#mexiko" rel="modal:open">View Menu </a>  
        </div>
        <div class="module__menu__container--item--img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mexiko-hero-a.png" alt="Mexiko" class="hide-mobile img-a" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mexiko-hero-b.png" alt="Mexiko" class="hide-mobile img-b" data-aos="fade-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mexiko-hero-mobile.png" alt="Mexiko" class="hide-desktop">
        </div>       
      </div>

    </div>
  </section>



   <section class="module__contact__us" id="contact">
    <h2>Contact us</h2>
    <div class="module__contact__us__container">
       <div class="module__contact__us__container--form">
          <?php echo do_shortcode('[contact-form-7 id="113" title="Contact"]') ?>
        </div>
        <div class="module__contact__us__container--openingTimes">
          <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/kk-logo.png" alt="Korner Kitchen Logo"> -->
          <h3>Opening Hours</h3>
          <div class="openingTimes__container">
            <div class="openingTimes__container--days">
              <p>Monday</p>
              <p>Tuesday</p>
              <p>Wednesday</p>
              <p>Thursday</p>
              <p>Friday</p>
              <p>Saturday</p>
              <p>Sunday</p>
            </div>
            <div class="openingTimes__container--time">
              <p>12.30 - 9</p>
              <p>12.30 - 9</p>
              <p>12.30 - 9</p>
              <p>12.30 - 9</p>
              <p>Closed</p>
              <p>Closed</p>
              <p>12.30 - 9</p>
             </div>

              <div class="addressNumber">
                <p>Address: <a href="https://www.google.com/maps/place/Korner+Kitchen/@51.621387,-0.293408,16z/data=!4m5!3m4!1s0x0:0x5aec685cabea0b53!8m2!3d51.6214045!4d-0.2934166?hl=en" title="Korner Kitchen" target="_blank">4 Canons Corner, London, HA8&nbsp;8AE</a></p>
                <p>Phone: <a href="tel:+442070186950" class="tel" target="_blank"> 020 7018 6950</a></p>
              </div>
          </div>
        </div>
    </div>
      <div class="module__contact__us__container--map">
        <div id="mapid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.0994939741427!2d-0.2955971842258334!3d51.621386579654065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876150b5f0cf4db%3A0x5aec685cabea0b53!2sKorner%20Kitchen!5e0!3m2!1sen!2suk!4v1628014437178!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
  </section>


  <!-- -->
</main>
<!-- MAIN -->
<?php get_footer(); ?>


