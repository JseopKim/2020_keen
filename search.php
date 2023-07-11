<?php
include "file.dat";

$name = $_GET["name"];
$asd = $name."님의 메시지를 남기지 않았습니다.";

foreach ($A as $key => $value) { 
    if ($name == $key ) {
        $asd =  $key."님의 메시지 : ". $value[0];  
    }
}
echo $asd;


?>