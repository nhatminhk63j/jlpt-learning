<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1>xin chao</h1>
	<div class="container">
		<div class="row" style="margin-bottom: 30px;">
			<a href="admin/createExam" class="btn btn-dark">Tạo mới</a>
		</div>

		<div class = "card-group">
			<?php
			$i = 0 ;
			while ($row = mysqli_fetch_array($data["Exams"])) {
				echo " <div class=' card-block ' style = 'margin-left:"."20px"."; margin-bottom :"."20px".";'>";
				echo "<div class= 'card text-center> ;'";
				echo "<img class= 'card-img-top' src='htts:placehold.it/400x400 ' alt='Card image cap'>";
				echo "<div class= 'card-body'>";
				echo "<h4 class= 'card-title'> <label>Đề số</label><br> ". $row["CodeExam"]."</h4>";
				echo "<label>Loại : </label> ".$row["Level"]."<hr>";
				echo "<div class = 'row'>";
				echo 	"<a href='' class= 'button btn btn-info m-sm-2 ' > Tham gia </a>";
				echo 	"<form action='Exams/remove' method='POST' role='form' class = 'm-sm-2'>";
				echo 		"<input type='text' name = 'CodeExam' class='form-control' hidden value =".$row["CodeExam"].">";
				echo 		"<button type='submit' class='btn btn-primary'>Xoa</button>";
				echo 	"</form>";
				echo "</div> </div></div></div> ";
				$i++;
				# code...
			}
			?>

		</div>
		
	</div>
	
</body>
</html>
