<?php



class Router{
    private $routes;

    public function __construct(){
        // Читаем роуты и включаем их
        $routesPath = ROOT . '/config/routes.php';
        // Присваеваем свойству $routes массив хранящийся в routes.php
        $this->routes = include_once($routesPath);
    }

    private function getURI(){
        // Метод возвращающий строку
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){
        // Получить строку запроса
        $uri = $this->getURI();

        // Проверка наличия такого запроса в routes.php

        foreach ($this->routes as $uriPattern => $path){
            // сравниваем строку запроса и данные, которые хранятся в routes.php

            if(preg_match("~$uriPattern~", $uri)){
                // Получаем внутренний путь
                $internalRoute = preg_replace("~$uriPattern~", $path,$uri);
                $segment = explode('/', $internalRoute);
                $controllerName = array_shift($segment) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segment));

                $parameters = $segment;

                //Обращаемся к нужному контроллеру
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if($result != null){
                    break;
                }
            }
        }
    }
}
