<?php
if (!empty($_FILES)) {
	// $_FILES: name, type, tmp_name, error, size
	$ds          = DIRECTORY_SEPARATOR;
	$storeFolder = 'uploads';
	
	$file = $_FILES['file'];//array $_FILES to varriable $file
	
    $tempFile = $file['tmp_name']; //get image name from $file
    $tempFile_name = $file['name']; //get image name from $file
    
    $targetFile =  $storeFolder .$ds. $tempFile_name; 
	
    if(move_uploaded_file($tempFile,$targetFile)){
    	echo $tempFile_name;
    }else{
    	echo 'error';
    }
}else{
	echo "no files selected";
}
?>