<?php
require '../vendor/autoload.php';

$products = ['iphone', 'samsung', 'xiaomi', 'honor', 'oneplus'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);
