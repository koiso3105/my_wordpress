<?php get_header(); ?>
<!-- Page-wrapper -->
<div>
<?php if(is_page('menu')): ?>
<!-- Wrapper -->
<div class="wrapper">
<section id="menu_banner">
<div class="menu_banner_title">
<img class="sub_menu_title" src="<?php bloginfo('template_url'); ?>/img/sub_menu_title.png">
</div>
</section>
<?php displayMenu([4,5,6]); ?>
</div>
<?php else: ?>
<?php displayMenu([1,2,3]); ?>
<?php endif; ?>
<?php get_footer(); ?>
</div>
    <!-- skrollr読み込み -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skrollr.min.js"></script>
    <script type="text/javascript">
        if( !/Android|webOS|iPhone|iPad/i.test(navigator.userAgent) ) {
         var s = skrollr.init();
        }
    </script>
    <?php wp_footer(); ?>
</body>

</html>
