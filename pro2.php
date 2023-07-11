<?php
include "file.dat";
$id = $_GET["id"];

echo "
    <style>
body {
            margin: 0px;
            width: 100%;
            height: 100%;
            font-family: 'Libre Baskerville', serif;
        
        }


          table {width:80%;margin: auto; border-bottom:2px solid brown; border-top:2px solid brown;}
            th {border-bottom:2px solid brown;border-left:2px solid white;text-align:center; color:black;}
            td {border:2px solid burlywood;font-size:30px;}
        h1 {text-align: left; color:black;}
        .button {position:relative; left:450; width:100px; height:30px; top:50;}
        select {width:100px;}
        #file {color:black;}
        
        input {
            color: chocolate;
            width: 100%; height: 100%;
            border: 0px;
        }


        @import url(https://fonts.googleapis.com/css?family=BenchNine:700);
.snip1582 {
  background-color: #c47135;
  border: none;
  color: #ffffff;
  cursor: pointer;
  display: inline-block;
  font-family: 'BenchNine', Arial, sans-serif;
  font-size: 1em;
  font-size: 22px;
  line-height: 1em;
  margin: 15px 20px;
  outline: none;
  padding: 12px 40px 10px;
  position: relative;
  text-transform: uppercase;
  font-weight: 700;
}

.snip1582:before,
.snip1582:after {
  border-color: transparent;
  -webkit-transition: all 0.25s;
  transition: all 0.25s;
  border-style: solid;
  border-width: 0;
  content: "";
  height: 24px;
  position: absolute;
  width: 24px;
}

.snip1582:before {
  border-color: #c47135;
  border-top-width: 2px;
  left: 0px;
  top: -5px;
}

.snip1582:after {
  border-bottom-width: 2px;
  border-color: #c47135;
  bottom: -5px;
  right: 0px;
}

.snip1582:hover,
.snip1582.hover {
  background-color: #c47135;
}

.snip1582:hover:before,
.snip1582.hover:before,
.snip1582:hover:after,
.snip1582.hover:after {
  height: 100%;
  width: 100%;
}
.bin{width: 50%;height: 100%; float: left;}
    </style>


<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Oswald&family=Playfair+Display&display=swap" rel="stylesheet">
echo "</head>
<body>
    <form action="insert.php" method="get">
    <table>
                <tr>
                    <th>NAME</th> <td><input type="text" size="65" name=name autocomplete="on" autofocus required>.$id.</td>
                </tr>
                <tr>
                    <th>Q & A</th>
                    <td colspan=5 height=200px>
                    $A[$id][0]
                    </td>
                </tr>
    </table>
    <div class="bin"></div>
    <button class="snip1582" type="submit" value="write">write</button>
    <button class="snip1582" type="reset" value="reset">reset</button>

</body>";

<?php
include "file.dat";
$id = $_GET["id"];

echo $id."님 의 메세지 : ".$A[$id][0];


$A[$id][1]++;
$file = fopen("file.dat","w");
$data = "<?php\n  ".'$A='.var_export($A,true)."?>";
fwrite($file,$data);
fclose($file);

echo " <meta http-equiv='Refresh' content='5;URL=list2.php'> ";


?>


