<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../template/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../template/css/styl.css">
    <title>Task Book</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-white">
                        Task Book
                    </h1>
    
                    <?php require_once ROOT . '/view/task/loginadmin.php'; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <h1>Добавить задачу</h1>
        <form action="" method="post">
            <p>Ваше имя: </p>
            <input type="text" name="name">
            <p>Ваша почта: </p>
            <input type="text" name="email">
            <p>Введите задачу: </p>
            <textarea name="text_task" id="" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" name="addticket">Добавить</button>
        </form>
        <?php include_once ROOT . '/components/Pagination.php'; ?>

    </div>
    <footer>

    </footer>
    <script src="../../template/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
