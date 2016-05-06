<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">

  <script type ="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script type ="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>  

  <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
  </title>

</head>


<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php get_home_url() ?>wordpress/index.php/accueil">
          <img alt="nautile" src="<?php bloginfo('template_directory'); ?>/images/petit_nautile_bleu.png" class="nautile">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav">
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'menu-gauche1',
            'menu_class' => 'nav navbar-nav'));
          ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Mes prestations <span class="caret"></span></a>
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'menu-prestations',
              'menu_class' => 'dropdown-menu',
              ));
            ?>
          </li>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'menu-gauche2',
            'menu_class' => 'nav navbar-nav'));
          ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'menu-droite',
            'menu_class' => 'nav navbar-nav'));
          ?>
          <li>
            <a target="_blank" class="linked_in" href="https://fr.linkedin.com/in/anniebearez"><img alt="Brand" src="<?php bloginfo('template_directory'); ?>/images/LinkedIn_logo_initials.png"></a>
          </li>
        </ul>



      </div>
    </div>
  </nav>

  <script>
    $(document).ready(function(){
        var url = window.location;
        // Will only work if string in href matches with location
        // $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

        // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');
    });
  </script>
