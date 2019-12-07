<?php 

// Checks a flat list for duplicate values. Returns true if duplicate values exists and false if values are all unique.

function has_duplicate($items){
	// echo count($items);
	// echo count(array_unique($items));
return count($items) > count(array_unique($items));
}
echo has_duplicate([1,2,3,4,5,9,5]);
