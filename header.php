<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php echo bloginfo('description'); ?></title>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/style.css'/>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>



<header>
        <div class="imgContainer">
        <?php wp_nav_menu(array("theme_location" => "header-menu"))?>
        </div>
     
        <nav>
            <ul>
                <li>
                <?php wp_nav_menu(array("theme_location" => "header2-menu"))?>

                </li>
            </ul>  
        </nav>
    </header>