<?php
$upload_dir=“upload/”; // upload 디렉토리는 퍼미션은 777
$upload_file=$upload_dir . $_FILES[ufile][name];
// $upload_file=$upload_dir . basename($_FILES[ufile][name]);
if(move_uploaded_file($_FILES[ufile][tmp_name], $upload_file)) {
 echo “파일명 : “. $_FILES[ufile][name];
 echo (“크기 : $_FILES[ufile][size]”);
 }
else echo “File Upload Failed”;
print_r($_FILES);
?> 