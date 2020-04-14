<?php 
define("pathViews", "./viewtest/");
 class Controllers
 {
     public function model($model){
     	require_once "./model/".$model.".php";
     	return new $model;
     }
     public function view($view, $data=[])
     {
     	require_once pathViews.$view.".php";
     }
 }
  ?>