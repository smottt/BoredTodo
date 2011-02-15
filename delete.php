<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != "XMLHttpRequest" || strtoupper($_SERVER['REQUEST_METHOD']) != "POST")
	exit("Not an ajax request!");

if(!is_numeric($_POST['todo_id']))
	return print json_encode(array("success" => 0));

$conn = \BoredTodo\Config::$connection;

try {
	$todo = $conn->fetchAssoc("SELECT * FROM todo WHERE todo_id = ?", array((int)$_POST['todo_id']));
	$date = new DateTime();

	$conn->update("todo", array("deleted_at" => $todo['deleted_at'] !== null ? null : $date->format("Y-m-d H:i:s")), array("todo_id" => (int)$_POST['todo_id']));
} catch(PDOException $e) {
	return print json_encode(array(
		"success" => 0,
		"msg"     => $e->getMessage()
	));
}

echo json_encode(array("success" => 1, "is_deleted" => $todo['deleted_at'] === null));