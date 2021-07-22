<?php
include_once 'config.php';
class App
{
    protected $controller;
    protected $d_controller="trangchu";
    protected $action="index";

    public function __construct()
    {
        $arr = $this->UrlProcess();
        $error = false;

        if (is_array($arr))
        {
            if (file_exists("./mvc/controllers/".$arr[0].".php"))
            {
                require_once "./mvc/controllers/". $arr[0] .".php";
                $this->controller = new $arr[0];
                if (isset($arr[1]) && method_exists($this->controller, $arr[1]))
                {
                    call_user_func_array([$this->controller, $arr[1]], []);
                    unset($arr);
                }
                else
                    $error = true;
            }
            else
                $error = true;
        }
        else
            $error = true;
        if ($error)
        {
            require_once "./mvc/controllers/". $this->d_controller .".php";
            $this->controller = new $this->d_controller;
            call_user_func_array([$this->controller, $this->action],[]);
        }
    }

    public function UrlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
