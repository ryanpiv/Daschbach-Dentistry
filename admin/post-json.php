<?php
	$value = "";
	$value = $_POST['data'];
	file_put_contents('../admin_files/careers/careers.json', $_POST['data']);
?>