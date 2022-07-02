<?php 
// This template for displaying the header
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header_area" class="<?php echo get_theme_mod( 'abu_menu_position' ); ?>" >
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div> -->
                <div class="col-md-3"><a href=""><img src="<?php echo get_theme_mod( 'abu_logo' ); ?>" alt=""></a></div>
            
                <div class="col-md-9">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                    <!-- <ul id="nav" >
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">Download</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Service</a>
                        <ul>
                            <li><a href="">Dropdown</a></li>
                            <li><a href="">Dropdown</a></li>
                            <li><a href="">Dropdown</a>
                                <ul>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                </ul>
                            </li>
                            <li><a href="">Dropdown</a></li>
                        </ul>
                        </li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>