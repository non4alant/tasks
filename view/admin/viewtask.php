<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование задачи</title>
</head>
<body>
<div class="post">
    <p>Данные пользователя</p>
    <div class="name__user">
        <p>Имя: <?php echo $taskItem['name'];?></p>
    </div>
    <div class="email__user">
        <p>Почта: <?php echo $taskItem['email'];?></p>
    </div>
    <h1>Задача: </h1>
    <div class="text__task">
        <p>Задача: <?php echo $taskItem['text_task']; ?></p>
    </div>
    <div>
        <h1>Работа с задачей: </h1>
        <form action="/controllers/AdminController.php" method="post">
            <p name="id" value=""></p>
            <textarea name="text_task" id="" cols="30" rows="10"><?php echo $taskItem['text_task']; ?></textarea>
            <br>
            <input value="<?php echo $taskItem['status_done']; ?>" name="doneticket">
            <br>
            <button type="submit" value="<?php echo $taskItem['id']; ?>" name="updateticket">Сохранить!</button>
        </form>
        <p>Статус редактирования: <?php ?></p>
        <br>
        <p>Статус выполнения: </p>
    </div>
</div>
</body>
</html>