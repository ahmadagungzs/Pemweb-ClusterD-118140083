<?php 
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "here", "we", "go");

	echo "Before the data is being ordered : <br>";
	$i = 1;
	foreach ($data as $value){
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data is being ordered from A to Z : <br>";
	sort($data);
	$i = 1;
	foreach ($data as $value){
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";

	echo "Data is being ordered from Z to A : <br>";
	rsort($data);
	$i = 1;
	foreach ($data as $value){
		echo "$i. $value <br>";
		$i++;
	}
 ?>