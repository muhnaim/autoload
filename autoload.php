<?php
/*
| Autoload Simple
| Algoritm by MuhNaim21
*/

//path file
$open_folder = array('config', 'dependensi');

//Count folder
$jm_folder = count($open_folder);

for($i=$jm_folder-1; $i >= 0; $i--) {
	$list_folder = $open_folder[$i];
	$list_file = scandir($list_folder);
	$jm_file = count($list_file);
	for($a=$jm_file-1; $a >= 2; $a--) {
		$exec = $list_folder .'/'. $list_file[$a];
		if(empty(scandir($list_file)) {
			require_once $exec;
		} else {
			return false;
		}

	}
}
