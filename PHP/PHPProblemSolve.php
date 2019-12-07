<?php 
// $x = 10;

// // while ($x <= 20) {
// //     echo $x . '<br>';
// //     $x++;
// // }

// do {
// 	echo $x . '<br>';
// 	$x++;
// } while ($x <= 20);

// Problem 1
	// $x = 10;
	// for ($i = 0; $i <= $x; $i++) {
	// 	if ($i < 10) {
	// 		echo $i.'-';
	// 	} else {
	// 		echo $i;
	// 	}
	// }

// Problem 2
// $b = 0;
// $x = 30;
// for ($i = 0; $i <= $x; $i++) {
// 	$b += $i;
// }
// var_dump($b);


// Problem 3

// for ($i = 1; $i <= 5; $i++) {
// 	for ($j = 1; $j <= $i; $j++) {
// 		echo '*';
// 		if ($j < $i) {
// 			//echo " ";
// 		}
// 	}
// 	echo "\n";
// 	echo "<br>";
// }

// Problem 4
// $n = 5;
// for ($i = 1; $i <= $n; $i++) {
// 	for ($j = 1; $j <= $i; $j++) {
// 		echo '*';
// 	}
// 	echo "\n";
// 	echo "<br>";
// }

// for ($i = $n; $i > 1; $i--) {
// 	for ($j = 1; $j < $i; $j++) {
// 		echo '*';
// 	}
// 	echo "\n";
// 	echo "<br>";
// }

// echo '<hr>';

// Problem 5
// $multiple = 1;
// for ($i = 1; $i <= 6; $i++) {
// 	$multiple *= $i;
// }
// echo $multiple;
// echo '<br>';

// $multiples = 1;
// for ($i = 4; $i > 1; $i--) {
// 	$multiples *= $i;
// }
// echo $multiples;
// echo '<hr>';

// Problem 5

// $num = 100;
// for ($i = 0; $i < $num; $i++) {
// 	if($i < 10){
// 		echo '0'.$i . '<br>';
// 	} else {
// 		echo $i . "<br>";
// 	}
// }

// for ($i = 0; $i < 10; $i++) {
// 	for ($j = 0; $j < 10; $j++) {
// 		echo $i.$j . '<br>';
// 	}
// }


// Problem 6

// $name = 'Raihan';
// $search_c = 'a';
// $count = 0;

// for ($i = 0; $i < strlen($name); $i++) {
// 	if (substr($name, $i, 1) == $search_c) {
// 		$count = $count+1;
// 	}
// }

// echo $count;

// Problem 7

// echo '<table align="left" border="1" cellpadding="5" cellspacing="0">';
// for ($i = 1; $i <= 5; $i++) {
// 	echo '<tr>';
// 	for ($j = 1; $j <= 5; $j++) {
// 		echo '<td>' .$i . 'X' . $j . '=' . $i*$j . "<br>" . '</td>';
// 	}
// 	echo '</tr>';
// }
// echo '</table>';
