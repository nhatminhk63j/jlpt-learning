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
    	$CodeExam = $this->input->post('CodeExam');
    	$Level = $this->input->post('Level');
    	$model->add($CodeExam,$Level);
    	$view = $this->view("Examdata", []);

    	/*Them vao phan lesson*/
    	$modelL  = $this->model("LessonModel");

    		// Them vao phan ngu phap
    	$content_Grammar = $this->input->post('content_Grammar');
    	$modelL->addGrammar($CodeExam,$content_Grammar, $Level);
		$idG = $modelL->getId("Grammar", $CodeExam);

    		//them vao phan doc
		$content_Reading = $this->input->post('content_Reading');
		$title_reading = $this->input->post('title_reading')
    	$modelL->addReading($CodeExam, $content_Reading, $Level, $title_reading);
    	$idR = $modelL->getId("Reading", $CodeExam);

    		// them vao phan nghe
    	$content_Listening = $this->input->post('content_Listening');
    	$title_listen = $this->input->post('title_listen');
    	$modelL->addListening($CodeExam, $filename, $content_Listening, $Level, $title_listen);
    	$idL = $modelL->getId("Listenning", $CodeExam);
//* con phan xu li luu file chua co*/

    	// add Question in Exam
    	$modelQ = $this->model("QuestionModel");
    	// tao cau hoi cua reading
    		$i = 0;
    		while ($r = $this->input->post('reading-$i')) {
    			$title = $this->input->post('title_reading_$i');
    			$answerA = $this->input->post('answerA_reading_$i');
    			$answerB = $this->input->post('answerB_reading_$i');
    			$answerC = $this->input->post('answerC_reading_$i');
    			$answerTrue = $this->input->post('answerD_reading_$i');    			
    			$modelQ->add("Reading",$title, $answerA, $answerB, $answerD, $answerTrue,$idR)
    			i++;
    		}
    	// tao cao hoi cua grammar
    		$i = 0;
    		while ($r = $this->input->post('Grammar-$i')) {
    			$title = $this->input->post('title_Grammar_$i');
    			$answerA = $this->input->post('answerA_Grammar_$i');
    			$answerB = $this->input->post('answerB_Grammar_$i');
    			$answerC = $this->input->post('answerC_Grammar_$i');
    			$answerTrue = $this->input->post('answerD_Grammar_$i');    			
    			$modelQ->add("Grammar",$title, $answerA, $answerB, $answerD, $answerTrue,$idG)
    			i++;
    		}
    	//tao cao hoi cua listning
    		$i = 0;
    		while ($r = $this->input->post('Listenning-$i')) {
    			$title = $this->input->post('title_Listenning_$i');
    			$answerA = $this->input->post('answerA_Listenning_$i');
    			$answerB = $this->input->post('answerB_Listenning_$i');
    			$answerC = $this->input->post('answerC_Listenning_$i');
    			$answerTrue = $this->input->post('answerD_Listenning_$i');    			
    			$modelQ->add("Listening",$title, $answerA, $answerB, $answerD, $answerTrue,$idL)
    			i++;
    		}
    }

}

 ?><?php 