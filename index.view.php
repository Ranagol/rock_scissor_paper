<!DOCTYPE html>
<html>
<head>
	<title>ROCK SCISSOR PAPER</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dokdo|Gloria+Hallelujah" rel="stylesheet">
</head>

<body>



<div class="container mt-5">

	<h3 class="d-flex justify-content-around fontstyle">ROCK SCISSOR PAPER</h3>
	
	<div   class="d-flex flex-row justify-content-around mt-5">	
		<form method="GET" action="index.php">			
			<button <?php echo $playAgain; ?>  <?php echo $hideResults; ?> class="btn btn-success fontstyle" type="submit" name="reset" value="reset">PLAY AGAIN?</button><!-- THIS IS THE "PLAY AGAIN" DISPLAY---------------------->
		</form>
		<form method="POST" action="">			
			<button <?php echo $playAgain; ?> <?php echo $hideResults; ?> class="btn btn-danger fontstyle" type="submit" name="resetResults" value="resetResults">RESET WINS?</button><!-- THIS IS THE "RESET" DISPLAY---------------------->
		</form>	
	</div>
	
	<div class="d-flex flex-row justify-content-around fontstyle">
		<?php include 'switch.php'; ?> <!-- THIS IS THE "YOU WON" DISPLAY -------------------------------->
	</div>
	
	<div class="row pb-5"><!-- THIS IS THE USER ROW ------------------------------------------------------->
		<div class="col"><i class="far fa-user usersize"></i></div>

		<div class="col">
			<form method="POST" action="index.php">
				<button <?php echo $hideUserRock; ?> class="btn btn-success" type="submit" name="userrock" value="rock"><i class="far fa-hand-rock iconsize"></i></button>
			</form>
		</div>

		<div class="col">
			<form method="POST" action="index.php">
				<button <?php echo $hideUserScissor; ?> class="btn btn-success"  type="submit" name="userscissor" value="scissor"><i class="far fa-hand-scissors iconsize"></i></button>
			</form>
		</div>
		<div class="col">
			<form method="POST" action="index.php">
				<button <?php echo $hideUserPaper; ?> class="btn btn-success"  type="submit" name="userpaper" value="paper"><i class="far fa-hand-paper  iconsize"></i></button>
			</form>
		</div>
		<div class="col  fontstyle"> <?php echo 'Wins: ' . $userResult; ?></div>
	</div>



	<div class="row mt-5"><!-- THIS IS THE PC ROW ----------------------------------------------------------->
		<div class="col"><i class="fas fa-robot robotsize"></i></div>
		<div class="col"><i <?php echo $hidePCRock; ?> class="far fa-hand-rock iconsize"></i></div>
		<div class="col"><i <?php echo $hidePCScissor; ?> class="far fa-hand-scissors iconsize"></i></div>
		<div class="col"><i <?php echo $hidePCPaper; ?> class="far fa-hand-paper iconsize"></i></div>
		<div class="col  fontstyle"> <?php echo'Wins: ' . $pcResult; ?></div>
	</div>	
</div>


</body>
</html>