<?php

$id=$_GET[id];
$arr=file("a.dat");
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
        
        </head>
        
        <body>";

foreach($arr as $k=>$v){
if($id==$k){
$arr1=explode(":",$v);
echo "
<table>
<tr>
<th>NAME</th> <td><input type=text size=65 name=name autocomplete=on autofocus required> $arr1[0] </td>
</tr>
<tr>
<th>TITLE</th> <td><input type=text size=65 name=name autocomplete=on autofocus required> $arr1[1] </td>
</tr>                
<tr>
<th>FILE</th> <td><input type=text size=65 name=name autocomplete=on autofocus required><a href='./upload/{$arr1[3]}'>{$arr1[3]}</a> </td>
</tr>

<tr>
<th>CONTENTS</th>
<td colspan=5 height=200px>
$arr1[2]

</td>
</tr>
</table>
<div class=bin></div>
<a href=ufile.php>  <button class=snip1582 type=submit value=write>reverse</button></a>


";
break;
}
}
?>




