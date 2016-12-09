<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . 'src'));
$loader->load('services.yml');

$homeMaker = $container->get('home-maker');
$homeMaker->makeWaffles(5);

$homeMaker = $container->get('commercial-maker');
$homeMaker->makeWaffles(5);
