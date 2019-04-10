<!DOCTYPE html>
<html>
<head>
	<title>ROCK SCISSOR PAPER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>

<body>
	

<div class="container">
	<h3 class="d-flex justify-content-around">ROCK SCISSOR PAPER</h3>

	<div class="d-flex flex-row justify-content-around">You:5   Pc:2</div>
	<div class="d-flex flex-row justify-content-around">
		<?php include 'switch.php'; ?>
	</div>
	<div class="row">
		
		<div class="col"><i class="far fa-user usersize"></i></div>

		<div class="col">
			<form method="POST" action="index1.php">
				<button class="btn btn-success" type="submit" name="userrock" value="rock"><i class="far fa-hand-rock iconsize"></i></button>
			</form>
		</div>

		<div class="col">
			<form method="POST" action="index1.php">
				<button class="btn btn-success"  type="submit" name="userscissor" value="scissor"><i class="far fa-hand-scissors iconsize"></i></button>
			</form>
		</div>
		<div class="col">
			<form method="POST" action="index1.php">
				<button class="btn btn-success"  type="submit" name="userpaper" value="paper"><i class="far fa-hand-paper  iconsize"></i></button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col"><i class="fas fa-robot robotsize"></i></div>
		<div class="col"><i class="far fa-hand-rock iconsize"></i></div>
		<div class="col"><i class="far fa-hand-scissors iconsize"></i></div>
		<div class="col"><i class="far fa-hand-paper iconsize"></i></div>
	</div>
</div>





















</body>
</html>