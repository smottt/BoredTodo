<?php

use Doctrine\Common\EventManager;
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Event\Listeners\MysqlSessionInit;
use BoredTodo\Config;

require_once(sprintf("%s/lib/doctrine-dbal/Doctrine/Common/ClassLoader.php", ROOT_PATH));

$classLoader = new ClassLoader("Doctrine", sprintf("%s/lib/doctrine-dbal", ROOT_PATH));
$classLoader->register();
unset($classLoader);

$classLoader = new ClassLoader("BoredTodo", sprintf("%s/lib", ROOT_PATH));
$classLoader->register();
unset($classLoader);

$em = new EventManager();
$em->addEventSubscriber(new MysqlSessionInit("utf8", "utf8_general_ci"));

$connectionParams = array(
	"dbname"   => "CHANGEME",
	"user"     => "CHANGEME",
	"password" => "CHANGEME",
	"host"     => "localhost",
	"driver"   => "pdo_mysql"
);

Config::$connection = DriverManager::getConnection($connectionParams, null, $em);

Config::$basedomain = "http://CHANGEME";

mb_internal_encoding("UTF-8");
