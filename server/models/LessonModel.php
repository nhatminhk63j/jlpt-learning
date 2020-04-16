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
    	$qr = "INSERT INTO `reading` (`id`, `CodeExam`, `title`, `content`, `Level`) VALUES (NULL, '$CodeExam', '$title', '$content', '$Level');";
        mysqli_query($this->con, $qr);
    }
    function addListening($CodeExam, $filename, $content, $Level, $title)
    {   
        $qr = "INSERT INTO `listenning` (`id`, `CodeExam`, `filename`, `content`, `title`, `Level`) VALUES (NULL, '$CodeExam', '$filename', '$content', '$title', '$Level');";
        mysqli_query($this->con, $qr);
    }
    function addGrammar($CodeExam, $Content, $Level)
    {
        $qr = "INSERT INTO `grammar` (`id`, `CodeExam`, `content`, `Level`) VALUES (NULL, '$CodeExam', '$Content', '$Level');";
        mysqli_query($this->con, $qr);
    }

    function edit()
    {
    	
    }
    function remove($type, $CodeExam)
    {
    	$qr = "DELETE FROM $type AS T WHERE T.CodeExam ='".$CodeExam."';" ;
        echo $qr;
    }

}

?>