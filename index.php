<?php 

function printDiamond($rows) { 
	for ($i = 1; $i <= $rows; $i++) { 
		
		
		for ($j = 1; $j <= $rows - $i; $j++) { 
			echo " "; 
		} 
		
	 
		for ($k = 1; $k <= 2 * $i - 1; $k++) { 
			echo "*"; 
		} 

		echo "\n<br>"; 
	} 


} 


$row = 5; 
printDiamond($row); 



function printnumber($rows) { 
	for ($i = 0; $i <= $rows; $i++) { 
		
		
		for ($j = 0; $j <= $rows - $i; $j++) { 
			echo " "; 
		} 
		
	 
		for ($j = 0; $j <= 2 * $i - 0; $j++) { 
			echo $j; 
		} 

		echo "\n<br>"; 
	} 


} 


$row = 6; 
printnumber($row); 





function printDiamondd($rows) { 
	for ($i = 1; $i <= $rows; $i++) { 
		
		
		for ($j = 1; $j <= $rows - $i; $j++) { 
			echo " "; 
		} 
		
		
		for ($k = 1; $k <= 2 * $i - 1; $k++) { 
			echo "*"; 
		} 

		echo "\n<br>"; 
	} 

	for ($i = $rows - 1; $i >= 1; $i--) { 
		
		
		for ($j = 1; $j <= $rows - $i; $j++) { 
			echo " "; 
		} 

		
		for ($k = 1; $k <= 2 * $i - 1; $k++) { 
			echo "*"; 
		} 

		echo "\n<br>"; 
	} 
} 


$row = 5; 
printDiamondd($row); 



?>
