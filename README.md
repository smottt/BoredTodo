BoredTODO
=========

BoredTODO is a simple TODO list. It was created for keeping a list of things to do when you have completed all other essential stuff and are somewhat bored.

Requirements
------------

PHP >= 5.3.0

Installation
------------

In config/config.php change $connectionParams to your configuration.
	$connectionParams = array(
		"dbname"   => "CHANGEME",
		"user"     => "CHANGEME",
		"password" => "CHANGEME",
		"host"     => "localhost",
		"driver"   => "pdo_mysql"
	);

and also set the basedomain configuration value.

	Config::$basedomain = "http://CHANGEME";

Set up the database. The database schema is provided for MySQL DB in doc/db.sql. If you wish, you can run BoredTODO on some other databases like PostgreSQL or Oracle. It uses Doctrine2 DBAL for the database layer. But you will possibly have to adapt the existing schema.

And you are done!

Usage
-----
