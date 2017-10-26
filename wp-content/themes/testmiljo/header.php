
<!--
Theme Name: Vronique
Author: Katerina Nikou
Version: 0.0.1
-->

<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vronique - Testmiljö</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/about.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/work.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/single.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
    <!-- Logotype -->
     <a href="http://localhost:8888/testmiljo/">
        <img class="logotype" src="/testmiljo/wp-content/themes/testmiljo/img/vronique.png">
    </a>
    
    <!-- Menu -->
    <nav class="mobile-menu">
        <label for="show-menu" class="show-menu">
            <div class="lines"></div>
        </label>

        <?php wp_nav_menu( array( 
            'theme_location' => 'primary', /*Customized menu*/
            'container' => false, /*To avoid Css-issues*/
        )); ?>
    </nav>

        <?php
            $params = array(
            'theme_location' => 'primary',
            'menu' => 'header navigation menu'
        ); ?>  

    <!-- Togglefunction for mobile menu -->
    <script>
        $(document).ready(function() {
            $(".lines").click(function() {
                $(".menu").toggle();
            });

        });
    </script>
