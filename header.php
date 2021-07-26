<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <title>Studio</title>
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <?php wp_head(); ?>

</head>

<body>
  <a href="#" class="scrolltop show-scroll" id="scroll-top">
    <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
  </a>
  <header class="l-header scroll-header" id="header">
    
    <nav class="nav bd-container">
      <a href="#" class="nav__logo">STUDIO</a>
      <div class="nav__menu" id="nav-menu">
        <!-- テンプレートファイルのメニューを表示したい場所に記述 -->
<?php 
  wp_nav_menu( array( 
    'theme_location' => 'main-menu' ,
    'menu_class' => 'nav__list',
    'container' => '',
  ) ); 
?>
        <!-- <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="#about" class="nav__link">About</a>
          </li>
          <li class="nav__item">
            <a href="#skills" class="nav__link">Skills</a>
          </li>
          <li class="nav__item">
            <a href="#works" class="nav__link">Works</a>
          </li>
          <li class="nav__item">
            <a href="#contact" class="nav__link">Contact</a>
          </li>
        </ul> -->
      </div>
      <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-menu-alt-right"></i>
      </div>
    </nav>
  </header>