<?php 


class Exams extends Controllers
{
	function SayHi(){

		$model = $this->model("ExamModel");
		$view = $this->view("Examdata", ["Exams" => $model->get(11111)]);

	}
	function GetExam(){

	}

	function AddExam(){
    	// addeExam
		$model = $this->model("ExamModel");
		$CodeExam = $_POST['CodeExam'];
		$Level = $_POST['Level'];
    	$model->add($CodeExam,$Level);
	}

	function remove()
	{
		$CodeExam=  $_POST['CodeExam'];
		$modelL = $this->model("ExamModel");
    	$modelL->remove( $CodeExam);

    	header("Location: http:/jlpt-learning/Exams");
	}

}

?><?php 