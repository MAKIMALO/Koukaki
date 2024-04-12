<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="sass/theme.css">
    <title>document</title>
</head>
<body>
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide cat_1">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'; ?>" alt="Image d'un chat bleu avec des tâches blanches">
        </div>
        <div class="swiper-slide cat_2">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Onejiiro.png'; ?>" alt="Image d'un chat roux aux yeux verts">
        </div>
        <div class="swiper-slide cat_3">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Pinku.png'; ?>" alt="Image d'un chat blanc aux yeux bleus">
        </div>
        <div class="swiper-slide cat_4">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Tenshi.png'; ?>" alt="Image d'un chat roux aux yeux roses">
        </div>
        <div class="swiper-slide cat_5">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna.png'; ?>" alt="Image d'un chat noir aux yeux verts">
        </div>
      </div>
  </div>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.js" type="text/javascript"></script>

</body>
</html>