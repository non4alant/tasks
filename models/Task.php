<?php

class Task{


    // Возвращает одну задачу по идентификатору
    public static function getTaskItemById($id){
        $id = intval($id);
        if($id){
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM task WHERE id=' . $id);
            // индексы в виде номеров колонон
            //$result->setFetchMode(PDO::FETCH_NUM);
            // индексы в виде название
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $taskItem = $result->fetch();
            return $taskItem;
        }
    }

    public static function getTaskList(){
        $db = Db::getConnection();

        $taskList = array();

        $result = $db->query('SELECT id, email, name, text_task, status_editing, status_done '
            . 'FROM task '
            . 'ORDER BY id DESC ');
        $i = 0;
        while ($row = $result->fetch()) {
            $taskList[$i]['id'] = $row['id'];
            $taskList[$i]['email'] = $row['email'];
            $taskList[$i]['name'] = $row['name'];
            $taskList[$i]['text_task'] = $row['text_task'];
            $taskList[$i]['status_editing'] = $row['status_editing'];
            $taskList[$i]['status_done'] = $row['status_done'];
            $i++;
        }
        return $taskList;
    }
    public static function addTask($post){

        require_once dirname(__DIR__) . '/components/Db.php';

        $params = [
            'id' => null,
            'email' => $post['email'],
            'name' => $post['name'],
            'text_task' => $post['text_task'],
            'status_editing' => 0,
            'status_done' => 0,

        ];
        $db = Db::getConnection()->prepare("INSERT INTO task (id, email, name, text_task, status_editing, status_done) 
VALUES (:id, :email, :name, :text_task, :status_editing, :status_done)");

        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            exit ("Некорректно введён email");

        }

        if(empty($post['email']) || empty($post['name']) || empty(($post['text_task']))){
            exit('Заполните данные!');
        }else{
            ?>
            <script>alert('<?php echo ('Задача успешно добавлена!' .' Ваше имя: ' . $post['name']
                    . ' Ваша почта: ' . $post['email'] . ' Текст задачи: ' . $post['text_task']);?>')</script>
            <?php
        }

        $db->execute($params);

        header('ROOT . /view/task/index.php');

        return true;
    }


}

