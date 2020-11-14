<?php 
	
	
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "lorem" , "ipsum" , "dolor");


	echo "Sebelum data diurutkan : <br>";
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data diurutkan dari Huruf A-Z : <br>";
	sort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data diurutkan dari Huruf Z-A : <br>";
	rsort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
 ?>