<?php
/*
* Plugin Name: Compartir en Redes Sociales
* Plugin URI: https://www.github.com/rennypetit
* Description: compartir en facebook, linkedin t Whatsapp
* Version: 1.1
* Author: Renny petit
* Author URI: https://www.github.com/rennypetit
* License: GPL2
*/

add_action('wp_head', 'compartir');
function compartir() {?>

  
  <?php if (is_front_page()): ?>
    <meta property="og:title" content="Astivik" />
    <meta property="og:type" content="Company" />
    <meta property="og:url" content="http://staging.astivik.com.co" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/inicio.jpeg"/>
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="Astivik" />
  <?php elseif (is_tax('tipo_proyectos')):?>
    <?php // Listado de categorias
    $idcategoria = get_queried_object()->term_id;
    $categories = get_categories( array(
      'taxonomy' => 'tipo_proyectos',
      'hide_empty' => false,
      ));?>

      <?php foreach ($categories as $category):?>
        <?php if ($idcategoria == $category->term_id):?>
          <meta property="og:title" content="<?php echo($category->name);?>" />
          <meta property="og:description" content="" />
          <meta property="og:image" content="<?php echo the_field('imagen-banner', $category); ?>"/>
          <meta property="og:url" content="<?php echo get_category_link( $category ); ?>" />
          <?php break;endif;endforeach;?>

        <?php elseif (is_tax('Servicios')): ?>
    <?php // Listado de categorias
    $idcategoria = get_queried_object()->term_id;
    $categories = get_categories( array(
      'taxonomy' => 'Servicios',
      'hide_empty' => false,
      ));?>

      <?php foreach ($categories as $category):?>
        <?php if ($idcategoria == $category->term_id):?>
          <meta property="og:title" content="<?php echo($category->name);?>" />
          <meta property="og:description" content="<?php echo $category->description;?>" />
          <meta property="og:image" content="<?php echo the_field('imagen_del_banner', $category); ?>"/>
          <meta property="og:url" content="<?php echo get_category_link( $category ); ?>" />
          <?php break;endif;endforeach;?>
        <?php elseif ((is_single() || is_page())): ?>
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <!-- facebook -->
            <meta property="og:title" content="<?php the_title();?>" />
            <meta property="og:description" content="<?php echo the_excerpt();?>" />
            <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>"/>
            <meta property="og:url" content="<?php echo the_permalink(); ?>" />
            <!-- end facebook -->
          <?php endwhile; endif; ?>
        <?php endif;
}?>