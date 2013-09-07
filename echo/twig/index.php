<?php
header('content-type: text/plain; charset=utf-8');
$data = json_decode(file_get_contents('data.json'), true);

require(__DIR__. '/../../vendor/autoload.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
	'cache' => __DIR__. '/../../cache',
	'autoescape' => true, 
	'auto_reload' => true,
));

$start = microtime(true);
$template = $twig->loadTemplate('demo.tpl');
$template->render($data);
echo microtime(true)-$start;
