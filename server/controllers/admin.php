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
        // to do 


        

    	header("Location: http:/jlpt-learning/Exams");
    }

}

 ?><?php 