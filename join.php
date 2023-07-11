

<?php
include "con.inc";
$pwd=md5($_POST[pwd]);
$result=mysqli_query($db, "insert into $table (name, id, pwd) values('$_POST[name]','$_POST[id]','$pwd')");
mysqli_close($db);

echo "<html>
<head>
    <style>
html,body {
        height: 100%;
        font-family: 'Libre Baskerville', serif;
    }


    body {
        margin: 0px;
        width: 100%;
        height: 100%;
        text-align: center;
        background: url('back.jpg');
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 5.5em; 
        color:white; 
    }

.font{  
 margin-top:200px;
    width: 100%;
    height: 100%;
    }
    </style>
</head>

<body>
   
        <div class=font>
            Welcome to keen's family
        </div>
 


</body>
</html>
";


echo " <meta http-equiv='Refresh' content='3;URL=login.html'> ";
?>