<?php
include_once dirname(__DIR__) . '/models/Admin.php';
include_once dirname(__DIR__) . '/models/Task.php';
class AdminController
{
    public function actionAdmin()
    {
        Admin::loginAdmin();
        return true;
    }

    public function actionGet($id)
    {
        if ($id) {
            $taskItem = Admin::getTaskItemById($id);
            require_once ROOT . '/view/admin/viewtask.php';

        }
        return true;
    }
    public static function actionUpdate($id){

        Admin::updateTask($id, $_POST['text_task'], $_POST['doneticket']);
        header("Location: http://crmformybusiness/admin/");
        return true;
    }
}
if(array_key_exists('updateticket',$_POST))
{
    AdminController::actionUpdate($_POST['updateticket']);
}
if(array_key_exists('exit', $_POST)){
    header("Location: /");
}




