<?php

require_once('./functions.php');
require_once('./data.php');

$page_content = render_template('./templates/index.php', [
    'categories' => $categories,
    'products' => $products,
    'time_to_end' => get_time_to_end(),
]);

$layout_content = render_template('./templates/layout.php', [
    'page_title' => 'YetiCave - Главная страница',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'page_content' => $page_content,
    'categories' => $categories
]);

print($layout_content);
