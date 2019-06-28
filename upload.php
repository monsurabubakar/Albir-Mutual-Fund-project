<?php

echo "<pre>";
print_r ($_FILES);
echo "</pre>";

if($_FILES['passport'] ['type'] != 'application/pdf')
  echo "invalid file type";
}else
{if($_FILES['passport'] ['size'] > 100000){
	echo "File is too large";
} else{
$original_name = $_FILES['passport'] ['name'];
move_uploaded_file($_FILES['passport'] ['tmp_name'], "uploads/$original_name");

}}



 ?>