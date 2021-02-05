<?php get_header(); ?>

<?php
wp_nav_menu(array(
  'theme_location' => 'my-custom-menu',
  'container_class' => 'custom-menu-class'
));
?>

  <?php get_footer();    ?> 
