<?php use BoredTodo\Config; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		
		<title>BoredTODO</title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo Config::$basedomain; ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu" />
		<link rel="stylesheet" type="text/css" href="<?php echo Config::$basedomain; ?>/css/style.css" />
	</head>
	<body>
		<div id="form-container">
			<form id="form-update" action="<?php echo Config::$basedomain; ?>/?update" method="post">
				<input type="text" name="todo-short" id="todo-short" />
				
				<div id="todo-more">
					<textarea rows="1" cols="1" id="todo-long" name="todo-long"></textarea>
				</div>
				
				<input type="submit" value="" class="todo-short-submit" />
			</form>
		</div>
		
		<div id="todo-container">
			<ul class="todo-list new"></ul>
			
			<ul class="todo-list">
				<?php foreach($todos as $item): ?>
					<?php include(sprintf("%s/templates/todoItem.php", ROOT_PATH)); ?>
				<?php endforeach; ?>
			</ul>
		</div>
		
		<script type="text/javascript" src="<?php echo Config::$basedomain; ?>/js/jquery-1.5.min.js"></script>
		<script type="text/javascript" src="<?php echo Config::$basedomain; ?>/?js"></script>
	</body>
</html>