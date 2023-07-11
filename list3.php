<?php
include "file1.dat";

$name=$_post["name"];
$title=$_post["title"];
$memo=$_post["memo"];
$files=$_post["ufile"]["name"];
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
       <div>
           <h1><b> R E V I E W </b></h1>
       </div>
   </header>
   <article>
       <div>";

echo "<a href=form.php><div class=".color.">리뷰 작성 하기</div></a>";
$no=1;
echo "<table><tr><th>번호</th><th>이름</th><th>조회수</th></tr>";
foreach($A as $key=>$v){
    echo "<tr><td>{$no}</td><td><a href=pro3.php?id={$key}>$key</a> </td><td>{$v[1]}</td></tr>";
    $no++;
}


echo "</table>";
echo "
</div>
</article>
</body>";


?>