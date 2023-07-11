<?php
include "file.dat";

$name=$_GET["name"];
$memo=$_GET["memo"];
        
$A[$name] =  array($memo,0);
$file = fopen("file.dat","w");
$data = "<?php\n  ".'$A='.var_export($A,true)."?>";
fwrite($file,$data);
fclose($file);


echo " <meta http-equiv='Refresh' content='0;URL=list2.php'> ";

?>