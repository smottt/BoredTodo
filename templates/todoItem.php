<li id="todo_<?php echo $item['todo_id']; ?>"<?php if(!mb_strlen($item['todo_long'])): ?> class="none"<?php endif; ?>>
	<div class="<?php echo $item['class']; ?>"></div>
	<div class="short">
		<?php echo $item['todo_short']; ?>
	</div>
</li>
<li class="todo-long<?php if(!mb_strlen($item['todo_long'])): ?> none<?php endif; ?>">
	<div class="<?php printf("priority %s long", $item['todo_priority']); ?>"></div>
	<div class="short">
		<?php echo $item['todo_long'] ?: ""; ?>
	</div>
</li>