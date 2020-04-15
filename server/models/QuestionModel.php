<?php 


class QuestionModel extends DB
{
    function get($type,$idType)
    {
        echo "get data";
        $table = "question".$type;
        $idlesson = "id".$type;
        $qr = "SELECT q.id, q.`title`, q.answerA, q.answerB, q.answerC, q.answerD, q.answerTrue
        FROM $table AS q 
        WHERE q.$idlesson = $idType ";
        return mysqli_query($this->con, $qr);
    }
    function add($type,$tile, $answerA, $answerB, $answerD, $answerTrue,$idRLG)
    {
    	$id_RLG = "id".$type;
            $qr = "INSERT INTO question.$type(title,answerA, answerB, answerD, answerTrue,$id_RLG)
            VALUE('".$title."',".$answerA."',". $answerB."',". $answerD."',". $answerTrue."',".$idRLG."') ";
            mysql_query($this->con, $qr);

    }
    function edit()
    {
    	
    }
    function remove()
    {
    	
    }

}

?>