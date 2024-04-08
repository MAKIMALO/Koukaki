<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sass/theme.css">
    <title>document</title>
</head>
<body>
    <div class="main-character">
        <h3 class="title_animation"><span>Les personnages</span></h3>
        <div class="slider my_slider">
            <div class="bloc_slider">    
                <div class="cat_slide cat_1">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat_Kawaneko.png'; ?>" alt="Image d'un chat bleu avec des tâches blanches">
                    <p>Kawaneko</p>
                </div>
                <div class="cat_slide cat_2">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat_Onejiiro.png'; ?>" alt="Image d'un chat rouxaux yeux verts">
                    <p>Onejiiro</p>
                </div>
                <div class="cat_slide cat_3">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat_Pinku.png'; ?>" alt="Image d'un chat blanc aux yeux bleus">
                    <p>Pinku</p>
                </div>
                <div class="cat_slide cat_4">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat_Tenshi.png'; ?>" alt="Image d'un chat roux aux yeux roses">
                    <p>Tenshi</p>
                </div>
                <div class="cat_slide cat_5">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat_Jaakuna.png'; ?>" alt="Image d'un chat noir aux yeux verts">
                    <p>Jaakuna</p>
                </div>
            </div>
            <div class="slider_pagination"></div>
        </div>
    </div>


<script>
    var swiper = new slider(".my_slider", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".slider_pagination",
      },
    });
  </script>

</body>
</html>