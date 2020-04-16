<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- funtion action : addExam -->
		<form action="addExam" method="POST" role="form" class="container col-xl-8" style="border: 1px red solid;">
			<legend class="text-center"><h1>Tạo Đề thi</h1></legend>
			
			<div class="form-group">
				<div class="row ">
					<div class="col-xl-6">
						<label for="CodeExam">Mã đề</label>
						<input name = "CodeExam" type="text" class="form-control" id="CodeExam" placeholder="Input field">
					</div>
					<div class="col-xl-6">
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
		</div>
		<hr>
		<div class="form-group" id = "Grammar">
			<legend> <h2>Ngữ pháp</h2>
			</legend>

				<textarea name="content_Grammar" id="inputContent_Grammar" class="form-control" rows="3" required="required" placeholder="Noi dung"></textarea>
			<div class="question" id = "Q_Grammar">
				</div>
			<button type="button" onclick="add()" class="btn btn-secondary" >Default</button>
		</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
	function An(id)
	{
		document.getElementById(id).style.display = "none";
	}
</script>

<script>
	var i = 1;
	function add() {
		i++;
		var a = document.createElement("div");
		a.className = "question";
		a.id = "Q_Grammar_"+i;
		a.innerHTML = "<h3>Cau hoi "+i+"</h3>"
					
					+ "<div>"
					+	"<label>Dau bai</label>"
					+	"<textarea name='title_Grammar_"+i+"' id='input' class='form-control ' rows='2' required='required'></textarea>"
					+"</div>"
					+"<div>"
					+	"<label>Dap an A</label>"
					+	"<input name = 'answerA_Grammar_" +i+"' type='text' class='form-control  placeholder='Input field'>"
					+ "</div>"
					+ "<div >"
					+	"<label>Dap an B</label>"
					+	"<input name = 'answerB_Grammar_" +i+"' type='text' class='form-control  placeholder='Input field'>"
					+ "</div>"
					+"<div>"
					+	"<label>Dap an C</label>"
					+	"<input name = 'answerC_Grammar_" +i+"' type='text' class='form-control  placeholder='Input field'>"
					+"</div>"
					+ "<div>"
					+	"<label>Dap an D</label>"
					+	"<input name = 'answerD_Grammar_" +i+"' type='text' class='form-control  placeholder='Input field'>"
					+"</div>"
					+"<div>"
					+	"<label>Dap an dung</label>"
					+	"<select name='answerTrue_G_"+i+"' id='input' class='form-control 'required='required'>"
					+	"<option value='A'>A</option>"
					+	"<option value='B'>B</option>"
					+	"<option value='C'>C</option>"
					+	"<option value='D'>D</option>"
					+	"</select>"
					+" </div>"
					+ "<button type='button' onclick = \"An(\'Q_Grammar_"+i+ "\')\" class='btn btn-light'>An</button>"
					+ "</div>";

		document.getElementById("Q_Grammar").appendChild(a);
	}
</script>

	
</div>
</body>
</html>
