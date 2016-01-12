<?php
$fileList = $_POST['serverName'];
unlink('C:/xampp/htdocs/nano-gallery/dropzone/uploads/'.$fileList);
// for($i = 0; $i < sizeof($fileList); $i++)
// {
// 	
//     
// }
?>