<?

class Route {

    public static function start_route() {
        $nameController = 'Main';
        $nameAction = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($routes[1])) {
            $nameController = $routes[1];
        }

        
        $nameModel = 'Model_'.$nameController;
        $nameController = 'Controller_'.$nameController;
        $nameAction = 'action_'.$nameAction;


        $fileModel = strtolower($nameModel).'.php';

        $pathModel = 'application/models/'.$fileModel;

        if(file_exists($pathModel)) {
            include "application/models/".$fileModel;
        }

        $fileController = strtolower($nameController).'.php';
        $pathController = "application/controllers/".$fileController;
        if(file_exists($pathController)) {
            include "application/controllers/".$fileController;
        } else {
            Route::Error404();
        }

        $controller = new $nameController;

        $action = $nameAction;

        if(method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::Error404();
        }
    }

    static function Error404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:'.$host.'404');
    }

}