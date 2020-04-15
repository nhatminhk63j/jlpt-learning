<?php 


class Exams extends Controllers
{
    function SayHi(){
      
      echo "Exam-SayHi";
      $model = $this->model("ExamModel");
      $model->get();
    }
    function Show(){
    }
}

 ?><?php 