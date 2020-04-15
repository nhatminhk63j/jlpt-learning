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
		<div class="row">
			<div class = card-columns>
				<?php
				while ($row = mysqli_fetch_array($data["Exams"])) {

					echo "<div class= 'card text-center'>";
					echo "<img class= 'card-img-top' src='https:placehold.it/400x400 ' alt='Card image cap'>";
					echo "<div class= 'card-body'>";
					echo "<h4 class= 'card-title'> <label>Đề số</label> ". $row["CodeExam"]."</h4>";
					echo "<label>Loại : </label> ".$row["Level"]."<hr>";
					echo "<a href='' class= 'btn btn-danger' > Tham gia </a>";
					echo "</div> </div> ";
				# code...
				}
				?>
			</div>
		</div>
		
	</div>
	
</body>
</html>
