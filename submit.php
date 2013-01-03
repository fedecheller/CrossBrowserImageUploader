<?php

$name_file = 'upload/image.jpg';

if (strlen($_POST['filename']) > 0) 
{
	file_put_contents($name_file, base64_decode($_POST['filename']));
}
else
{
	if (isset($_FILES['file']) && count($_FILES['file']) > 0) 
	{
		move_uploaded_file($_FILES['file']['tmp_name'], $name_file);
	}
}

// this redirects to a page specified in the previous page...
header("Location: " . $_POST['redirect']);

?>