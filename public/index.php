<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";


$list = $container['ServiceProduct']->Mylist();

require_once "list.product.php";