<?php

function brackets(string $string) {
	$lenght = strlen($string);
	$arr_stack = array();
	for ($i = 0; $i < $lenght; $i++) {
		switch ($string[$i]) {
			case '(': array_push($arr_stack, 0); break;
			case ')': 
				if (array_pop($arr_stack) !== 0)
					return false;
			break;
			case '[': array_push($arr_stack, 1); break;
			case ']': 
				if (array_pop($arr_stack) !== 1)
					return false;
			break;
			case '{': array_push($arr_stack, 2); break;
			case '}': 
				if (array_pop($arr_stack) !== 2)
					return false;
			break;
			case '<': array_push($arr_stack, 3); break;
			case '>': 
				if (array_pop($arr_stack) !== 3)
					return false;
			break;
			default: break;
		}
	}
	if (empty($arr_stack)) {
		return true;
	}
}