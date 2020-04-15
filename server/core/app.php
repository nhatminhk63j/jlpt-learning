<?php 
// đường dẫn đấn file controllers
define("path", "./server/controllers/");

class App{
	// http://localhost/Project/Home/Actions/1/2
	protected $controller = "Home" ; // Defaults
	protected $action = "Sayhi";
	protected $params =[];

        public function __construct()
        {
        $arr = $this->UrlProcess();

            	 // xử lí phần controller
        if(isset($arr[0]))
        {
          if(file_exists( path.$arr[0].".php")){
             $this->controller = $arr[0];

         }
         unset($arr[0]);
        }


        require_once path.$this->controller.".php";
        $this->controller = new $this->controller;

        	 // xu li Action
        if(isset($arr[1])){
        if (method_exists($this->controller, $arr[1])) {
          $this->action = $arr[1];

        }

        unset($arr[1]);

        } 
            	 // Xử lí phần params
        $this->params = $arr? array_values($arr): [];
            	 // 
        call_user_func_array([$this->controller, $this->action], $this->params);

    }
    function UrlProcess()
    {
       if(isset($_GET["url"]))
       {
          return explode("/",filter_var(trim($_GET["url"]," ")));    		
      }
    }
    }

?>