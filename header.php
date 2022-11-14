<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset') ?>">


  <?php wp_head() ?>
  <title>Document</title>
</head>

<body <?php body_class() ?>>

  <header class="header bg__img"
    style="background-image: url('https://startertheme.local/wp-content/uploads/2022/11/banner.jpg')">
    <div class="overlay"></div>
    <nav class=" main-nav">

      <div class="menu">
        <div class="menu-btn">
          <div class="menu-btn__burger"></div>
        </div>
        <div class="links">
          <?php wp_nav_menu(
            array(
              "theme-location" => 'MainMenu',
              'container' => 'nav'
            )
          ) ?>


        </div>
      </div>

      <div class="logo">

        <?php if (function_exists('the_custom_logo')) {
          the_custom_logo();
        } ?>
      </div>

      <div class="white-space"></div>
    </nav>
    <div class="header-content">
      <h1>Atrium Fund for promoting Excellence,
        Leadership and Social Responsibility</h1>

      <button class="button-cta"><span>Apply Now </span><span><img
            src="https://startertheme.local/wp-content/uploads/2022/11/vector-smart-object-copy-3@2x.png"></span></button>
      <div class="learn-more">
        <div class="txt">Learn more</div>
        <!-- <img
          src="https://startertheme.local/wp-content/uploads/2022/11/vector-smart-object-copy-2@2x.png"> -->
        <svg class="arrows">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
      </div>
    </div>

  </header>