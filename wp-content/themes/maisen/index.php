<?php get_header(); ?>
　<?php if(is_page('menu')): ?>
  <?php displayMenu([4,5,6]); ?>
  <?php else: ?>
  <?php displayMenu([1,2,3]); ?>
  <?php endif; ?>
<?php get_footer(); ?>
