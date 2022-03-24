<?php

include_once dirname(__DIR__) . '/models/Task.php';

class TaskController{
    public function actionList(){

    $taskList = array();
    $taskList = Task::getTaskList();
    require_once (ROOT . '/view/task/index.php');

    return true;
}
    public function actionView($id){

    if($id){
        $taskItem = Task::getTaskItemById($id);

        echo '<pre>';
        print_r($taskItem);
        echo '</pre>';
    }
    return true;
}
    public static function actionAdd(){
       Task::addTask($_POST);
       return true;
}
}

if(array_key_exists('addticket',$_POST))
{
    TaskController::actionAdd();
}
