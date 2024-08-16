<?php
function h($value) {
	return htmlspecialchars($value, ENT_QUOTES);
}


function dbconnect() {
	$db = new mysqli('localhost', 'root', 'root', 'min_bbs');
	if (!$db) {
		die($db->error);
	}

	return $db;
}

?>