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
		<table class="table table-bordered table-inverse table-hover">
			<thead class="text-center thead-dark">
				<tr>
					<th>STT</th>
					<th>Tiêu đề</th>
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>Đáp án</th>
					<th>Hình thức</th>
					<th>Trình độ</th>
					<th>Tiêu đề lớn </th>
				</tr>
			</thead>
			<tbody class=" text-center">
				<?php 
				while ($row = mysqli_fetch_array($data["question"])) {
					echo "<tr>";
					echo "<th>".$row["id"];
					echo "<th>".$row["title"];
					echo "<th>".$row["answerA"];
					echo "<th>".$row["answerB"];
					echo "<th>".$row["answerC"];
					echo "<th>".$row["answerD"];
					echo "<th>".$row["answerTrue"];
					echo " <button type= 'button' class = 'btn btn-success'>Xóa</button>";
				}
				?>
			</tbody>
		</table>
		<button type="button" class = "btn btn-success">Thêm mới</button>
	</div>
</body>
</html>