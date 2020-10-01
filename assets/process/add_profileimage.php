<?php
if(!empty($_FILES))
{
	$path='../../assets/img/icon/'.$_FILES['file']['name'];
	if(move_uploaded_file($_FILES['file']['tmp_name'], $path))
	{
		echo "File uploaded Successfully!";
	}
	else
	{
		echo "File uploaded but not Save?";
	}
}
else
{
	echo "Some Error?";
}

 ?>