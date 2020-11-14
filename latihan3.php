<?php 
	echo "<h3>PRIME NUMBERS FROM 1 TO 50</h3>";
	echo "<h4>The line below is the set of prime numbers from 1 till 50 :</h4>";
	for ($i=1;$i<=50;$i++){
		$k=0;
		for ($j=1;$j<=$i;$j++){
			if($i%$j==0){
				$k++;
			}
		}
		if($k==2){
			echo $i." ";
		}
	}

 ?>