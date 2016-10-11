<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

use Mannion007\WaffleFactory\Server\DispenserAdapterInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . 'src'));
$loader->load('services.yml');

/** @var DispenserAdapterInterface $waffleDispenser */
$waffleDispenser = $container->get('waffle-server');
$waffleDispenser->dispenseWaffles(5);
