<?php 

// Check if a string is ends with a given substring.

function endswith($haystack, $needle){
	// echo stripos( $haystack, $needle ) . '<br>';
	// echo strlen($haystack) . '<br>';
	// echo strlen($needle) . '<br>';
	return strrpos($haystack, $needle) === (strlen($haystack) - strlen($needle));
}
echo endswith('Hi, this is me', 'me');

