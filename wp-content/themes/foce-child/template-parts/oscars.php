<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sass/theme.css">
    <title>document</title>
</head>
<body>
    <section id="oscars">
        <div class="oscars_flowers">
            <?php
                $image_sunflower = get_theme_file_uri("assets/images/sunflower.png");
                $image_orchid = get_theme_file_uri("assets/images/orchid.png");
            ?>
            <img class="image_sunflower" src="<?php echo $image_sunflower; ?>" alt="Image marguerite">
            <img class="image_orchid" src="<?php echo $image_orchid; ?>" alt="Image orchidée">
        </div>
        <div class="nomination">
            <div class="text_nomination" style="background-image: url('<?php echo get_theme_file_uri("assets/images/background_orange_oscars.png"); ?>')">
                <p>Fleurs d'oranger & chats errants<br>est nominé aux Oscars Short<br>Film Animated de 2022 !</p>
            </div>
            <div class="logo_nomination">
                <?php
                $logo_oscars = get_theme_file_uri("assets/images/logo_oscars.png");
                ?>
                <img src="<?php echo $logo_oscars; ?>" alt="Image du logo des Oscars">
            </div>
        </div>
    </section>
</body>
</html>