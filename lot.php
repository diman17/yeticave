<?php

require_once './functions.php';
require_once './data.php';

$product = null;

if (isset($_GET['index'])) {
    $product = $products[$_GET['index']];
}

if (!$product) {
    http_response_code(404);
}

$page_content = render_template('./templates/lot.php', [
    'categories' => $categories,
    'product' => $product,
    'time_to_end' => get_time_to_end(),
]);

$layout_content = render_template('./templates/layout.php', [
    'page_title' => 'YetiCave - Страница товара',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'page_content' => $page_content,
    'categories' => $categories
]);

print($layout_content);
