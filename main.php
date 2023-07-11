<?php
$name = $_GET["name"] ;
$title = $_GET["title"] ;


echo "
<body style='background-color:white'>

<table border=1 width=100% height=20%>
    <tr>
    <th bgcolor=indianred height=10% width=10%>번호</th> 
    <th bgcolor=indianred width=60%>주제</th>
    <th bgcolor=indianred width=25%>올린이</th>
    </tr>";
      if ($_GET["check"] == "t") {
        echo "
        <tr>
        <td>1</td><td>$title</td><td>$name</td>
        </tr>";
      }
    echo "
    </table>

</body>";
?>