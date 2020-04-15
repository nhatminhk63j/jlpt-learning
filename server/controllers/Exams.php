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

		// $view = $this->view("Examdata", ["Exams"=> $model->get(1111) ]);

		// /*Them vao phan lesson*/
  //   	$modelL  = $this->model("LessonModel");

    		// Them vao phan ngu phap
//     	$content_Grammar = $_POST['content_Grammar'];
//     	$modelL->addGrammar($CodeExam,$content_Grammar, $Level);
// 		$idG = $modelL->getId("Grammar", $CodeExam);

//     		//them vao phan doc
// 		$content_Reading = $_POST['content_Reading'];
// 		$title_reading = $_POST['title_reading'];
//     	$modelL->addReading($CodeExam, $content_Reading, $Level, $title_reading);
//     	$idR = $modelL->getId("Reading", $CodeExam);

//     		// them vao phan nghe
//     	$content_Listening = $_POST['content_Listening'];
//     	$title_listen = $_POST['title_listen'];
//     	$modelL->addListening($CodeExam, $filename, $content_Listening, $Level, $title_listen);
//     	$idL = $modelL->getId("Listenning", $CodeExam);
// //* con phan xu li luu file chua co*/

//     	// add Question in Exam
//     	$modelQ = $this->model("QuestionModel");
//     	// tao cau hoi cua reading
//     		$i = 0;
//     		while ($r = $_POST['reading-$i')) {
//     			$title = $_POST['title_reading_$i');
//     			$answerA = $_POST['answerA_reading_$i'];
//     			$answerB = $_POST['answerB_reading_$i'];
//     			$answerC = $_POST['answerC_reading_$i'];
//     			$answerTrue = $_POST['answerD_reading_$i');    			
//     			$modelQ->add("Reading",$title, $answerA, $answerB, $answerD, $answerTrue,$idR)
//     			i++;
//     		}
//     	// tao cao hoi cua grammar
//     		$i = 0;
//     		while ($r = $_POST['Grammar-$i')) {
//     			$title = $_POST['title_Grammar_$i'];
//     			$answerA = $_POST['answerA_Grammar_$i'];
//     			$answerB = $_POST['answerB_Grammar_$i'];
//     			$answerC = $_POST['answerC_Grammar_$i'];
//     			$answerTrue = $_POST['answerD_Grammar_$i'];    			
//     			$modelQ->add("Grammar",$title, $answerA, $answerB, $answerD, $answerTrue,$idG)
//     			i++;
//     		}
//     	//tao cao hoi cua listning
//     		$i = 0;
//     		while ($r = $_POST['Listenning-$i')) {
//     			$title = $_POST['title_Listenning_$i'];
//     			$answerA = $_POST['answerA_Listenning_$i'];
//     			$answerB = $_POST['answerB_Listenning_$i'];
//     			$answerC = $_POST['answerC_Listenning_$i'];
//     			$answerTrue = $_POST['answerD_Listenning_$i'];    			
//     			$modelQ->add("Listening",$title, $answerA, $answerB, $answerD, $answerTrue,$idL)
//     			i++;
//     		}
	}

	function remove()
	{
		$CodeExam=  $_POST['CodeExam'];
		$modelL = $this->model("ExamModel");
    	// xoa 
    	$modelL->remove( $CodeExam);
    	// header("Location: http:/jlpt-learning/Exams");
    	header("Location: http:/jlpt-learning/Exams");
	}

}

?><?php 