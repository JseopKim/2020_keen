<?php

echo 
   "<head>
   <style>
       header>div {margin-left:auto;margin-right:auto;margin-top:5%;margin-bottom:5%;}
       div>h1 {text-align: center;}
       table {width:80%;margin: auto;}
       th {border-bottom:5px solid brown;border-left:3px solid white;text-align:center;}
       td {border-bottom:5px solid burlywood;text-align:center;margin-top:5px}
       a:hover {color:black;text-decoration: none;}
       a:link {color:black;text-decoration: none;}
       a:visited {color:black;text-decoration: none;}
       .color{color:bule;}
   </style>
</head>
<body>
   <header>

   </header>
   <article>
       <div>";


$arr=file("a.dat");
echo "<table width=100%><tr><th>NUMBER</th><th>TITLE</th><th>NAME</th></tr>";
foreach($arr as $k=>$v){
$arr1=explode(":",$v);
$k1=$k+1;
echo "<tr><td>{$k1}</td><td><a href=show.php?id={$k}>{$arr1[1]}</a></td>";
echo "<td>{$arr1[0]}</td></tr>";
}


echo "</table>";
echo "
</div>
</article>
</body>";


?>

