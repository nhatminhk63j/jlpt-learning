<?php 


class DB
{	
   public $con;
   protected $host = "localhost";
   protected $username = "root";
   protected $password = "";
   protected $database = "jlptproject";

   public function __construct()
   {
   		$this->con = mysqli_connect($this->host, $this->username, $this->password);
   		mysqli_select_db($this->con, $this->database);
   		mysqli_query($this->con, "SET NAME 'utf-8'");
   }
   
   /* End of file DB.php */
   /* Location: .//C/xampp/htdocs/JLPT-Learning/MVC/core/DB.php */
}

 ?>