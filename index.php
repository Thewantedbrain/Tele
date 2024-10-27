<?php 

require "vendor/autoload.php";

use Telecomunicate\Content\Config\Settings\SystemConfig as SystemConfig;
use Telecomunicate\Content\Controllers\FrontController as FrontController;

$globalConfig = new SystemConfig();
$globalConfig->existController();

$frontController = new FrontController();
