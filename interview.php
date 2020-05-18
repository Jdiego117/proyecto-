<!DOCTYPE html>
<html>
<head>
	<title>Encuesta</title>
	<meta charset="utf-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/interview.css?id=<?php echo(rand(0, 1000)); ?>">
</head>
<body>

	<form class="type2" action="hola.php" method="post">
		<div class="header">
			<div>1</div>
			<div>Cual es tu epoca del año preferida</div>
		</div>
		<div class="input">
			<div><div> <input type="checkbox" class="form-check-input" id="materialUnchecked" name="gola">Verano</div></div>
			<div><div> <input type="checkbox" class="form-check-input" id="materialUnchecked" name="gola">Invierno</div></div>
			<div><div> <input type="checkbox" class="form-check-input" id="materialUnchecked" name="gola">primavera</div></div>
			<div><div> <input type="checkbox" class="form-check-input" id="materialUnchecked" name="gola">otoño</div></div>
		</div>
		<div class="btn">
			
		</div>
		<input type="button" name="hola">
	</form>
</body>
</html>