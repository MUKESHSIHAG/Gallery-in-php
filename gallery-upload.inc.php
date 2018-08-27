<?php

if (isset($_POST['submit'])) {

	$newFileName = $_POST['filename'];
	if (isset($_POST['filename'])) {
		$newFileName = "gallery";
	}else {
		$newFileName = strtolower(str_replace(" ", "-", $newFileName));
	}
	$imageTitle = $_POST['filetitle'];
	$imageDesc = $_POST['filedesc'];

	$file = $_FILES['file'];

	$filename = $file['name'];
	$filetype = $file['type'];
	$fileTempName = $file['tmp_name'];
	$fileError = $file['error'];
	$fileSize = $file['size'];

	$fileExt = explode(".", $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array("jpg", "jpeg", "png");

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize > 2000000) {
				
			} else {
				echo "File size is too big";
				exit();
			}
		} else {
			echo "You had an error";
			exit();;
		}
	} else {
		echo "You need to upload to a proper file type";
		exit();
	}	
}