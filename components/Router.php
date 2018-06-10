<?php


class Router
{

    private $routes;

    public function __construct()
    {
        $rotesPath = ROOT . '/config/routes.php';
        $this->routes = include $rotesPath;
    }


    public function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }


    public function run()
    {


        $uri = $this->getURI();


        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {


                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segment = explode('/', $internalRoute);


                $controllerName = ucfirst(array_shift($segment)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segment));

                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';




                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }

                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $segment);
                if ($result != null) {
                    break;
                }
            }
        }

    }

}