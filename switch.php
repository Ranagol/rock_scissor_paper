<?php

switch ($userChoice) {
				case 'rock':
					switch ($pcChoice) {
						case 'paper':
							echo 'YOU LOST!';
							break;
						case 'scissor':
							echo 'YOU WON!';
							break;
						
						default:
							echo 'THIS IS A DRAW';
							break;
					}
					break;
				case 'scissor':
					switch ($pcChoice) {
						case 'paper':
							echo 'YOU WIN!';
							break;
						case 'rock':
							echo 'YOU LOST!';
							break;
						
						default:
							echo 'THIS IS A DRAW';
							break;
					}
					break;
				case 'paper':
					switch ($pcChoice) {
						case 'rock':
							echo 'YOU WON!';
							break;
						case 'scissor':
							echo 'YOU LOOSE!';
							break;
						
						default:
							echo 'THIS IS A DRAW';
							break;
					}
					break;
			}

?>