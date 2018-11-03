<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- script
    ================================================== -->
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="assets/image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  
 <title><?php wp_title(''); ?></title>
  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
 
</head>
<body id="top">
  <div id="header">
      <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div> <!-- end header-logo -->
            
        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
              
                <ul id="nav" class="header-nav__list">
                  <?php wp_list_pages('title_li='); ?>          
                </ul>
          <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                Hello folks, we are <br>
                Transcend Studio.
                </h1>

                <p>
                We create stunning digital experiences <br>
                that will help your business stand out.
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
            <li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                <i class="fab fa-facebook"></i>
                <span class="home-social-text">Facebook</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-twitter"></i>
                <span class="home-social-text">Twitter</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-linkedin"></i>
                <span class="home-social-text">LinkedIn</span>
            </a></li>
        </ul> <!-- end home-social -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->
  </div>