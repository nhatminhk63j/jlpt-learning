<?php 


class admin extends Controllers
{
    function SayHi(){
     
    	
    }
    function GetExam($id){

    }
    function createExam(){
		$view = $this->view("createExam", []);
    }
    function addExam()
    {
    	$model = $this->model("ExamModel");
    	$CodeExam = $_POST['CodeExam'];

    	$Level = $_POST['Level'];
    	$model->add($CodeExam,$Level);
    	header("Location: http:/jlpt-learning/Exams");
    }

}

 ?><?php 