<?php
$folder_name = $_POST['post_title'];
if (!file_exists($output_dir . $folder_name)) {
	@mkdir($output_dir . $folder_name, 0777);
	echo "Folder Created And Files Uploaded.";
	$countfiles = count($_FILES['post_files']['name']);
	for($i=0;$i<$countfiles;$i++) {
		$filename = $_FILES['post_files']['name'][$i];
		move_uploaded_file($_FILES['post_files']['tmp_name'][$i],$folder_name.'/'.$filename);
	}
} else {
	echo "Folder Exists And Files Uploaded.";
	$countfiles = count($_FILES['post_files']['name']);
	for($i=0;$i<$countfiles;$i++) {
		$filename = $_FILES['post_files']['name'][$i];
		move_uploaded_file($_FILES['post_files']['tmp_name'][$i],$folder_name.'/'.$filename);
	}
}
?>