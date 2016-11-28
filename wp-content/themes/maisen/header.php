<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="description" content="MAISENの説明がはいります。MAISENの説明がはいります。MAISENの説明がはいります。MAISENの説明がはいります。MAISENの説明がはいります。">
    <meta name="keywords" content="MAISENのキーワード,AISENのキーワード,AISENのキーワード,AISENのキーワード,AISENのキーワード,AISENのキーワード,AISENのキーワード,">
    <meta name="viewport" content="width=device-width, initial-scale=1" data-reactid="15">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smoothScroll.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#hmg_menu").on('click', function() {
                $('header ul.nav').toggleClass('show');
            })
            $("header ul.nav").find('a').on('click', function() {
                $('header ul.nav').removeClass('show');
            })
        })
    </script>
    <?php wp_head(); ?>
</head>

<body>
<?php if(is_page('menu')): ?>
    <?php include(get_theme_root() . '/' . get_template() . '/tpl/top_head_page.php'); ?>
<?php else: ?>
    <?php include(get_theme_root() . '/' . get_template() . '/tpl/top_head.php'); ?>
<?php endif; ?>
