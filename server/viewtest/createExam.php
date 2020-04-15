<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="addExam" method="POST" role="form">
			<legend>Tạo Đề thi</legend>
			
			<div class="form-group">
				<div class="row col-xl-6 ">
					<label for="CodeExam">Mã đề</label>
					<input name = "CodeExam" type="text" class="form-control" id="CodeExam" placeholder="Input field">
				</div>
				<div class="row col-xl-6">
					
					<label>Trinh do</label>
					<select name="Level" id="input" class="form-control "
					required="required">
					<option value="N1">N1</option>
					<option value="N2">N2</option>
					<option value="N3">N3</option>
					<option value="N4">N4</option>
					<option value="N5">N5</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<legend>Ngữ pháp</legend>

		</div>


		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
</div>
</body>
</html>
