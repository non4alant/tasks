<?php
require_once dirname(__DIR__) . '/components/Db.php';
class Admin
{
    public static function loginAdmin()
    {
        $taskList = array();
        $taskList = Task::getTaskList();
        require_once(ROOT . '/view/admin/adminpanel.php');
    }

    public static function getTaskItemById($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM task WHERE id=' . $id);
            // индексы в виде номеров колонон
            //$result->setFetchMode(PDO::FETCH_NUM);
            // индексы в виде название
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $taskItem = $result->fetch();
            return $taskItem;
        }
        return true;
    }

    public static function updateTask($id, $text_task, $status_done)
    {
        $db = Db::getConnection();

        $result = $db->prepare("UPDATE task SET text_task =\" " . $text_task . " \" , `status_editing` = '1', `status_done` = '$status_done'  WHERE id=" . $id);
        $updateStatus = $result->execute();


    }
}


