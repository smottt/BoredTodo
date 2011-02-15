<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != "XMLHttpRequest" || strtoupper($_SERVER['REQUEST_METHOD']) != "POST")
	exit("Not an ajax request!");

$conn = BoredTodo\Config::$connection;

$todo_short    = $_POST['todo-short'];
$todo_priority = "med";

// priority
$pattern = "~^(low|med|high)\s+~i";

if(preg_match($pattern, $todo_short, $priority))
{
	$todo_priority = $priority[1];
	$todo_short    = preg_replace($pattern, "", $todo_short);
}

// url
$pattern    = '~(https?://([\w-#?&:.%=/]+))~i';
$replace    = '<a href="\\1">\\1</a>';
$todo_short = preg_replace($pattern, $replace, $todo_short);
$todo_long  = $_POST['todo-long'] ? preg_replace($pattern, $replace, $_POST['todo-long']) : null;

$item = array(
	"todo_short"    => $todo_short,
	"todo_long"     => $todo_long,
	"todo_date"     => date("Y-m-d"),
	"todo_priority" => $todo_priority,
	"priority"      => constant(sprintf("\BoredTodo\Config::%s", strtoupper($todo_priority)))
);


try {
	$conn->insert("todo", $item);
} catch(PDOException $e) {
	echo $e->getMessage();
	return;
}

$item['todo_id'] = (int)$conn->lastInsertId();
$item['class']   = sprintf("priority %s", $item['todo_priority']);

require_once(sprintf("%s/templates/todoItem.php", ROOT_PATH));