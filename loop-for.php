<?php

	
	//for ($i = 1; $i <= 10; $i++) {
	//	$data = $i * 2;
	
	//	//echo "$i ";
	//	echo "$data ";
	//}

	//for ($i = 1; $i >= 1; $i--) {
	//	echo "$i ";
	//}

	for ($i = 1; $i <= 10; $i ++) {

		for ($j = 1; $j <= $i; $j++) {
			$data = $i *$j;

			echo "$data ";
		}

		echo "<br/>";
	}