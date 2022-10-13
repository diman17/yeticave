<?php

function render_template($tempalate_path, $data = null)
{
    if (!file_exists($tempalate_path)) {
        return '';
    }

    ob_start();
    extract($data);
    require_once($tempalate_path);

    return ob_get_clean();
}

function format_price($price)
{
    $result = ceil($price);
    if ($result <= 1000) {
        return $result;
    }

    return number_format($result, 0, '.', ' ');
}
