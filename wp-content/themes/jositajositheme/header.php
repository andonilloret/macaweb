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
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header class="row custom-header">
      <div class="col-xs-2">
        <a href="/">AQUI VIENE EL LOGO</a>
      </div>
      <ul id="menu" class="col-xs-10 nav">
        <?php wp_list_pages( '&title_li='); ?>
      </ul>
    </header>
