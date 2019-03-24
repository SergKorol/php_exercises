<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		print_r($_FILES);
		
		//$tmp = $_FILES['tmp_name'];
		//$name = $_FILES['name'];
		//move_uploaded_file($tmp, 'upload/'.$name);
	}
?>
<form action='upload.php' method='post' enctype='multipart/form-data'>
<input type='file' name='user_file'>
<input type='submit'>
</form>