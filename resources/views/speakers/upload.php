<?php
	$dir = "uploads/";
	if( !file_exists($dir) ){
		mkdir($dir);
	};
	if( is_dir($dir) ){
		$fileName = basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $dir . $fileName);
	}else{
		echo 'this path contains a file';
	};