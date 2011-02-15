<?php
$todos = \BoredTodo\Config::$connection->fetchAll("SELECT * FROM todo WHERE deleted_at IS NULL ORDER BY priority DESC, todo_id DESC");

// prepare todos for display
foreach($todos as &$todo)
{
	$todo['class'] = sprintf("priority %s", $todo['todo_priority']);
	
	$next_todo  = current($todos);
	if($next_todo != false && $next_todo['todo_priority'] != $todo['todo_priority']) {
		$todo['class'] = sprintf("priority grad-to-%s", $next_todo['todo_priority']);
	}
	
	// clean up
	unset($todo);
}

require_once(sprintf("%s/templates/main.php", ROOT_PATH));