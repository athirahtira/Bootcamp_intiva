<?php

$angka = 50;

switch (4angka) {
	case 100:
		echo "ini angka 100";
		break;
	case 50:
		echo "ini angka 50";
		break;
	case 0:
		echo "ini angka 0";
		break;
	default:
		echo "ini bukan angka 100, 50, ataupun ("
		echo $angka * 2;
		break;
}

// -------------

if ($angka === 100) {
	echo "ini angka 100";
} else if ($angka === 50) {
	echo "ini angka 50";
} else if ($angka === 0) {
	echo "ini angka 0";
} else