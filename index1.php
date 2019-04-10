<?php

if (isset($_POST)) {
	$userChoice = implode('', $_POST);
}


$arrayOfPCChoices = ['rock', 'paper', 'scissor'];
$pcChoice = $arrayOfPCChoices[array_rand($arrayOfPCChoices)];

echo '<br> pcChoice is: ' . $pcChoice . '<br>';
echo '<br> userChoice is: ' . $userChoice . '<br>';




	


include 'index.view.php';
?>