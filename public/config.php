<?php
/**
 * Created by PhpStorm.
 * User: LEONARDO TI
 * Date: 28/03/2017
 * Time: 12:00
 */
use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste_oo";
$container['user'] = "root";
$container['pass'] = "";
