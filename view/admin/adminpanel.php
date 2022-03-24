<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../template/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../template/css/styl.css">
    <title>Админка</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="admin">
                <h1 class="text-center text-white">
                    Task Book
                </h1>
                <h2 class="text-center text-white">Панель администратора</h2>
                <div>
                    <h3 class="text-white">Выход из панели: </h3>
                    <form action="/controllers/AdminController.php" method="post">
                        <input name="exit" type="submit" value="Выйти">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <h1 >Редактировать задачу или поставить отметку выполнено</h1>
    <h2>Задачи: </h2>
    <?php include_once ROOT . '/components/TaskManagement.php'; ?>
</div>
<footer>

</footer>
<script src="../../template/js/bootstrap.bundle.min.js"></script>
</body>
</html>