<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) . ' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) . ' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) . ' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';

$user_avatar = 'img/user.jpg';

$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$products = [
    [
        'lot-name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 10999,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-1.jpg'
    ],
    [
        'lot-name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 159999,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-2.jpg'
    ],
    [
        'lot-name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 8000,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-3.jpg'
    ],
    [
        'lot-name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 10999,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-4.jpg'
    ],
    [
        'lot-name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 7500,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-5.jpg'
    ],
    [
        'lot-name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis fuga sunt dolore ratione molestias. Ea dolores odit incidunt fugiat iusto.',
        'lot-rate' => 5400,
        'lot-step' => 100,
        'lot-date' > '20.10.2022',
        'image-path' => 'img/lot-6.jpg'
    ],
];
