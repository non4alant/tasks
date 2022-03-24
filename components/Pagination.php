<?php

include_once ROOT . '/controllers/TaskController.php';

$taskCount = 3;

$page = $_POST['page'];

if(!isset($page)){
    $page = 1;
}
$firstIndex = ($page - 1) * $taskCount;

for($i = $firstIndex; $i<$firstIndex + $taskCount && $i<count($taskList) && $i>=0; $i++): ?>
<?php $taskItem = $taskList[$i]; ?>
    <div class="post">
        <div class="name__user">
            <p>Имя: <?php echo $taskItem['name'];?></p>
        </div>
        <div class="email__user">
            <p>Почта: <?php echo $taskItem['email'];?></p>
        </div>
        <div class="text__task">
            <p>Задача: <?php echo $taskItem['text_task']; ?></p>
        </div>
        <div class="open__task">
            <p class="links"><a href="<?php echo $taskItem['id']; ?>" class="read">Открыть</a></p>
        </div>
    </div>
<?php endfor; ?>
<form action="" method="post">
    <button type="submit" name="page" value="<?= $page-1 ?>">Предыдущая</button>
    <button type="submit" name="page" value="<?= $page+1 ?>">Следующая</button>
</form>


