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

        $modelL  = $this->model("LessonModel");
        // add content to Grammer, Listening and Reading
        $content_Grammar = $_POST['content_Grammar'];
        $modelL->addGrammar($CodeExam,$content_Grammar, $Level);
        $idG = $modelL->getId("Grammar", $CodeExam);
        // to do 

        // $content_Reading = $_POST['content_Reading'];
        // $title_Reading = $_POST['title_Reading'];
        // $modelL->addReading($CodeExam,$content_Reading, $Level, $title);
        // $idR = $modelL->getId("Reading", $CodeExam);

        // add Listening Content

        // add question Grammar
        $modelQ  = $this->model("QuestionModel");
        $i = 1;
        while (isset($_POST['title_Grammar_'.$i])) {
            $title =  $_POST['title_Grammar_'.$i];
            $answerA =  $_POST['answerA_Grammar_'.$i];
            $answerB =  $_POST['answerB_Grammar_'.$i];
            $answerC =  $_POST['answerC_Grammar_'.$i];
            $answerD =  $_POST['answerD_Grammar_'.$i];
            $answerTrue =  $_POST['answerTrue_Grammar_'.$i];
            $modelQ->add("Grammar",$title, $answerA, $answerB,$answerC,$answerD, $answerTrue,$idG);
            $i++;
        }
        // add quesion reading
        $i = 1;
        while (isset($_POST['title_Reading_'.$i])) {
            $title =  $_POST['title_Reading_'.$i];
            $answerA =  $_POST['answerA_Reading_'.$i];
            $answerB =  $_POST['answerB_Reading_'.$i];
            $answerC =  $_POST['answerC_Reading_'.$i];
            $answerD =  $_POST['answerD_Reading_'.$i];
            $answerTrue =  $_POST['answerTrue_Reading_'.$i];
            $modelQ->add("Reading",$title, $answerA, $answerB,$answerC,$answerD, $answerTrue,$idR);
            $i++;
        }
        $i = 1;
        while (isset($_POST['title_Listening_'.$i])) {
            $title =  $_POST['title_Listening_'.$i];
            $answerA =  $_POST['answerA_Listening_'.$i];
            $answerB =  $_POST['answerB_Listening_'.$i];
            $answerC =  $_POST['answerC_Listening_'.$i];
            $answerD =  $_POST['answerD_Listening_'.$i];
            $answerTrue =  $_POST['answerTrue_Listening_'.$i];
            $modelQ->add("Listening",$title, $answerA, $answerB,$answerC,$answerD, $answerTrue,$idL);
            $i++;
        }
        $i = 1;
        
    	header("Location: http:/jlpt-learning/Exams");
    }

}

 ?><?php 