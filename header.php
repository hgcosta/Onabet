<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "user-scalable=no, width=device-width">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/fav.png">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Hugo Costa">
        <meta property="og:site_name" content=""/>
        <!-- Bootstrap-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
        <title><?php bloginfo('name')?> | <?php the_title()?></title>
        <?php wp_head();?>
    </head>
    <body <?php body_class()?> >
 