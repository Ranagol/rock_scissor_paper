<?php
session_start();

//CREATING THE USER CHOICE FROM THE SUBMITTED DATA
if (isset($_POST)) {
	$userChoice = implode('', $_POST);
}


//RESETTING THE RESULTS TO ZERO + SHOW HIDE RESET
if (in_array('resetResults', $_POST)) {
	$userResult = 0;
	$pcResult = 0;
	$hideResults = 'hidden';
} else {
	//REMBERING THE PREVIOUS RESULTS IN THE SESSION
	$userResult = $_SESSION["userResult"];
	$pcResult = $_SESSION['pcResult'];
	$hideResults = 'xxx';
}

// PLAY AGAIN? DISPLAY 
if (strlen($userChoice) == 0) {
	$playAgain = 'hidden';
} else {
	$playAgain = 'xxx';
}


//GENERATING A PC CHOICE: 'rock', 'paper', 'scissor'
$arrayOfPCChoices = ['rock', 'paper', 'scissor'];
$pcChoice = $arrayOfPCChoices[array_rand($arrayOfPCChoices)];


include 'index.view.php';
?>