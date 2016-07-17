<?php
  $current_user = wp_get_current_user();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Didact+Gothic" rel="stylesheet">
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header>
      <div class="header-logo-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img class="logo" src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Denda"/>
        </a>
      </div>
      <div class="header-right">
        <span>
        <?php
          if ( 0 == $current_user->ID ){
            echo "<a href=\"/index.php/my-account\">Iniciar Sesión</a>";
          }else{
            echo "Hola, <a href=\"/index.php/my-account\">".$current_user->user_login."</a>";
          }
        ?>
        </span>
        <a class="shopping-bag" href="/index.php/cart">
          <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count() ?></span>
          <img src="<?php bloginfo('template_directory');?>/img/shopping-bag.svg" alt="My Shopping Bag"/>
        </a>
      </div>
      <div class="menu-container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="menu" class="nav">
                <?php wp_list_pages( '&title_li='); ?>
              </ul>
            </div>
      </div>
    </header>
