<html>
    <head>
        <style>
            header>div {margin-left:auto;margin-right:auto;margin-top:5%;margin-bottom:5%;}
            div>h1 {text-align: center;}
            body {width:100%;height:100%;margin:0;}
            table {width:80%;text-align:center;margin: auto;}
            th {border-bottom:5px solid brown;border-left:3px solid white;}
            td {border-bottom:7px solid burlywood;border-left:5px solid white;}
            .num {width:15%;height:100px;}
            .tit {width:70%;height:100px;}
            .nam {width:15%;height:100px;}
            a:hover {color:black;text-decoration: none;}
            a:link {color:black;text-decoration: none;}
            a:visited {color:black;text-decoration: none;}
            caption {color: chocolate;}
        </style>
    </head>

    <body>
        <header>
            <div>
                <h1><b> N O T I C E </b></h1>
            </div>
        </header>
        <article>
 
        <form action="insert.php" method="get">
<table>
    <tr><th>이름</th><th><input type="text" name="name"></th></tr>
    <tr><th>내용</th><th><input type="text" name="memo"></th></tr>
    <tr><th><input type="submit" value="저장"></th></tr>
    </table>

</form>


        </article>
    </body>
</html>