<?php
include "file1.dat";
$id = $_GET["id"];

echo $id."님 의 메세지 : ".$A[$id][0][2];


$A[$id][1]++;
$file = fopen("file.dat","w");
$data = "<?php\n  ".'$A='.var_export($A,true)."?>";
fwrite($file,$data);
fclose($file);



?>
