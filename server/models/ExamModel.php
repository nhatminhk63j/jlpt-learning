<?php 


class ExamModel extends DB
{
    function get($codeExam)
    {
        echo "get data";
        $qr = "SELECT E.CodeExam , E.Level
        FROM exam AS E";
        // WHERE E.CodeExam = $codeExam";
        return mysqli_query($this->con, $qr);
    }
    function add($CodeExam, $Level)
    {
        $qr = "INSERT INTO exam(CodeExam, Level)
        VALUE($CodeExam, Level) ";
        mysqli_query($this->con, $qr);
    }
    function edit()
    {
    	
    }
    function remove()
    {
    	
    }

}

 ?>