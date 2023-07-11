<?php
$u_dir="upload/";
$u_file=$u_dir.$_FILES[ufile][name];
move_uploaded_file($_FILES[ufile][tmp_name],$u_file);
$a[0]=$_POST[name];
$a[1]=$_POST[title];
$a[2]=$_POST[memo];
$a[3]=$_FILES[ufile][name];
$str=implode(":",$a)."\n";
$fp=fopen("a.dat","a");
fwrite($fp, $str);
fclose($fp);
echo "업로드완료";
echo "<meta http-equiv='Refresh' content='1;URL=ufile.php'>";
?>
