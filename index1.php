<?php
if (isset($_POST)) {
	$userChoice = implode('', $_POST);
}





if (strlen($userChoice) == 0) {
	$playAgain = 'hidden';
} else {
	$playAgain = 'xxx';
}





$arrayOfPCChoices = ['rock', 'paper', 'scissor'];
$pcChoice = $arrayOfPCChoices[array_rand($arrayOfPCChoices)];

//echo '<br> pcChoice is: ' . $pcChoice . '<br>';
//echo '<br> userChoice is: ' . $userChoice . '<br>';





include 'index.view.php';
?>