<?php
function displayMenu(array $list){
  foreach($list as $li){
    $num = str_pad($li, 2, 0, STR_PAD_LEFT);
    include(get_theme_root() . '/' . get_template() . "/tpl/menu{$num}.php");
  }
}
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
  include(get_theme_root() . '/' . get_template() . "/myphpfiles/$file.php");
    return ob_get_clean();
}
