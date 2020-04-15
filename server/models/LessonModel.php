<?php 


class LessonModel extends DB
{
    function get()
    {

    }
    function getId($type, $CodeExam)
    {   

        $qr = "SELECT T.id FROM $type AS T WHERE T.CodeExam = $CodeExam";
        $a = mysqli_query($this->con, $qr);
        $arr = ["key" => $a];
        if(isset($arr["id"])) return $idarr["id"];
            else return -1 ;
    }
    function addReading($CodeExam, $content, $Level, $title)
    {
    	$qr = "INSERT INTO reading(CodeExam, filename, content, Level, title) 
        VALUE(".$CodeExam.",'".$content."','".$Level. "','".$title."')";
        mysql_query($this->con, $qr);
    }
    function addListening($CodeExam, $filename, $content, $Level, $title)
    {   
        $qr = "INSERT INTO listenning(CodeExam, filename, content, Level, title) 
        VALUE(".$CodeExam."',".$filename."','".$content.",'".$Level."','".$title.")";
        mysql_query($this->con, $qr);
    }
    function addGrammar($CodeExam, $Content, $Level)
    {
        $qr = "INSERT INTO grammar(CodeExam, content, Level) 
        VALUE('".$Content."',".$Content."',". $Level."')";
        mysql_query($this->con, $qr);
    }

    function edit()
    {
    	
    }
    function remove($type, $CodeExam)
    {
    	$qr = "DELETE FROM $type AS T WHERE T.CodeExam ='".$CodeExam."';" ;
        echo $qr;
        // mysql_query($this->con, $qr);
        // return $this->getId($type, $CodeExam);
    }

}

?>