<?php 
define("pathViews", "./server/viewtest/");
define("pathModels", "./server/models/");
 class Controllers
 {
     public function model($model){
     	require_once pathModels.$model.".php";
     	return new $model;
     }
     public function view($view, $data=[])
     {
     	require_once pathViews.$view.".php";
     }
 }

 
 /* End of file controllers.php */
 /* Location: ./application/controllers/controllers.php */
  ?>
