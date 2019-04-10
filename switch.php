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
							$hideUserScissor = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCScissor = 'hidden';
							break;
						case 'scissor':
							echo 'YOU WON!';
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
							$hideUserRock = 'hidden';
							$hideUserPaper = 'hidden';
							$hidePCRock = 'hidden';
							$hidePCScissor = 'hidden';
							break;
						case 'rock':
							echo 'YOU LOST!';
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
				case 'paper':
					switch ($pcChoice) {
						case 'rock':
							echo 'YOU WON!';
							$hideUserScissor = 'hidden';
							$hideUserRock = 'hidden';
							$hidePCScissor = 'hidden';
							$hidePCPaper = 'hidden';
							break;
						case 'scissor':
							echo 'YOU LOOSE!';
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





switch ($userChoice) {
	case 'rock':
		
		break;
	case 'scissor':
		
		break;	
	default:
		
		break;
}







?>