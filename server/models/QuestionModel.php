<?php 


class QuestionModel extends DB
{
    function get($idRLG, $type)
    {   
        $table = "question".$type;
        $idlesson = "id".$type;
        $qr = "SELECT q.id, q.`title`, q.answerA, q.answerB, q.answerC, q.answerD, q.answerTrue
        FROM $table AS q 
        WHERE q.$idlesson = $idType ";
        return mysqli_query($this->con, $qr);
    }
    function add($type,$title, $answerA, $answerB,$answerC, $answerD, $answerTrue,$idRLG)
    {
    	$id_RLG = "id".$type;
        $q = "question".$type;
            $qr = " INSERT INTO $q (`id`, `title`, `answerA`, `answerB`, `answerC`, `answerD`, `answerTrue`, $id_RLG) VALUES (NULL, '$title', '$answerA', '$answerB', '$answerC', '$answerD', '$answerTrue', '$idRLG');" ;
            mysqli_query($this->con, $qr);

    }
    function edit()
    {
    	
    }
    function remove($type, $id)
    {
    	$q = "question".$type;
        $qr = "DELETE FROM $q WHERE $q.`id` = $id";
        mysqli_query($this->con, $qr);
    }
    function getAll()
    {
        
    }

}

?>