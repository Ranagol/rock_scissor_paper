<?php

$hideUserRock = ' ';
$hideUserScissor = ' ';
$hideUserPaper = ' ';

$hidePCRock = ' ';
$hidePCScissor = ' ';
$hidePCPaper = ' ';

switch ($userChoice) {
				case 'rock':
					switch ($pcChoice) {
						case 'paper':
							echo 'YOU LOST!';
							$pcResult++;//pc won, increase the pc result
							$hideUserScissor = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCScissor = 'hidden';
							break;
						case 'scissor':
							echo 'YOU WON!';
							$userResult++;//user won, increase the userREsult
							$hideUserScissor = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCPaper = 'hidden';
							break;						
						default://aka rock
							echo 'THIS IS A DRAW';
							$hideUserScissor = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCScissor = 'hidden';
							$hidePCPaper = 'hidden';
							break;					
					}
					break;
				case 'scissor':
					switch ($pcChoice) {
						case 'paper':
							echo 'YOU WIN!';
							$userResult++;//user won, increase the userREsult
							$hideUserRock = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCScissor = 'hidden';
							break;
						case 'rock':
							echo 'YOU LOST!';
							$pcResult++;//pc won, increase the pc result
							$hideUserRock = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCScissor = 'hidden';
							$hidePCPaper = 'hidden';
							break;
						
						default://aka scissor
							echo 'THIS IS A DRAW';
							$hideUserRock = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCPaper = 'hidden';
							break;
					
					}
					
					break;
				case 'paper'://<-this here is user choice
					switch ($pcChoice) {
						case 'rock'://<-this here is pc choice
							echo 'YOU WON!';
							$userResult++;//user won, increase the userREsult
							$hideUserScissor = 'hidden';
							$hideUserRock = 'hidden';
							$hidePCScissor = 'hidden';
							$hidePCPaper = 'hidden';
							break;
						case 'scissor':
							echo 'YOU LOOSE!';
							$pcResult++;//pc won, increase the pc result
							$hideUserScissor = 'hidden';
							$hideUserRock = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCPaper = 'hidden';
							break;
						
						default://aka paper
							echo 'THIS IS A DRAW';
							$hideUserScissor = 'hidden';
							$hideUserRock = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCScissor = 'hidden';
							break;
					
					}
					
					break;
			}



$_SESSION["userResult"] = $userResult;
$_SESSION["pcResult"] = $pcResult;


?>