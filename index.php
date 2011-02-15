<?php

define("ROOT_PATH", __DIR__);

require_once(sprintf("%s/config/config.php", ROOT_PATH));

$possible_actions = array("update", "delete", "js");

foreach($possible_actions as $action)
	if(isset($_GET[$action]))
		return require_once(sprintf("%s.php", $action));

require_once("list.php");