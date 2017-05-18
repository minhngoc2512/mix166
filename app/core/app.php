<?php

/*
	Analyze url
	and call according controller 
*/

class App
{
    private $controller;
    private $action;
    private $params;

    public function __construct()
    {
        $this->splitUrl();

        /*Check controller: does such a controller exist*/
        if (!$this->controller) {
            //If not, call the default controller
            require APP . 'controllers/HomeController.php';
            $this->controller = new HomeController();
            $this->controller->index();

        } else {
            //Default append 'controller' for controller name
            $this->controller = ucfirst($this->controller);
            $this->controller .= 'Controller';

            $this->controller = ucfirst($this->controller);
            echo $this->controller;

            if (preg_match('/Admin/', $this->controller)) {


                if (file_exists(APP . 'controllers/' . $this->controller . '.php')) {
                    require APP . 'controllers/' . $this->controller . '.php';
                    /*Init controller*/
                    $this->controller = new $this->controller();
                    /*Check method: does such a method exist in this controller*/
                    if (method_exists($this->controller, $this->action)) {
                        /*If method exist*/
                        if (!empty($this->params)) {
                            /*If have parameter*/
                            call_user_func_array([$this->controller, $this->action], $this->params);
                        } else {
                            /*If no argument are given, call no paramter method*/
                            $this->controller->{$this->action}();
                        }
                    } else {
                        call_user_func_array([$this->controller, 'index'], []);
                        //require_once (APP.'views/user/home/index.php');

                    }
                }else{
                    echo '<br>file admin not exits';
                }

            }elseif (preg_match('/Submit/',$this->controller)){
                require_once (APP.'route/route.php');
            } elseif (file_exists(APP . 'controllers/' . $this->controller . '.php')) {
                require APP . 'controllers/' . $this->controller . '.php';
                /*Init controller*/

                $this->controller = new $this->controller();
                /*Check method: does such a method exist in this controller*/
                if (method_exists($this->controller, $this->action)) {
                    /*If method exist*/
                    if (!empty($this->params)) {
                        /*If have parameter*/
                        call_user_func_array([$this->controller, $this->action], $this->params);
                    } else {
                        /*If no argument are given, call no paramter method*/
                        $this->controller->{$this->action}();
                    }
                } else {
                    call_user_func_array([$this->controller, 'index'], []);
                    //require_once (APP.'views/user/home/index.php');

                }


            } else {
                require APP . 'controllers/HomeController.php';
                $this->controller = new HomeController();
                $this->controller->index();
            }
        }
    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {
            echo 'url:' . $_GET['url'];
            $url = trim($_GET['url'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $url = explode('/', $url);

            $this->controller = isset($url[0]) ? $url[0] : null;

            $this->action = isset($url[1]) ? $url[1] : null;

            //Remove controller and action from $url
            unset($url[0], $url[1]);

            //Rebase array index and set values from url into params.
            $this->params = array_values($url);


            echo 'Controller: ' . $this->controller . '<br>';
            echo 'Action: ' . $this->action . '<br>';
            echo 'Parameters: ' . print_r($this->params, true) . '<br>';
        }
    }
}