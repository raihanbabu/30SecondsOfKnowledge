<?php 

// Flattens an array up to the one level depth.

function flatten($items){
	// var_dump($items);
	$result = [];
	foreach ($items as $value) {
		if (!is_array($value)) {
			$result[] = $value;
		} else {
			$result = array_merge($result, array_values($value));
			foreach ($result as $item) {
				echo $item . '<br>';
			}
		}
	}

	return $result;

}
flatten([1,2,[3],4]);
