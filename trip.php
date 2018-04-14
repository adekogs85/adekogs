<!DOCTYPE html>
<html>
<style>
body{background-color:#7A8A96;}
h1{ position: absolute;
    width: 552px;
    line height: 59px;
    top:30%;
    left:30%;
    font-family: Calibri;
    font-style: normal;
    font-weight: bold;
    line-height: normal;
    font-size: 48px;
    color: #C12C2C;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  }
h2{position: absolute;
   width: 413px;
   height: 59px;
   top:40%;
   left:35%;
   font-family: Calibri;
   font-style: normal;
   font-weight: bold;
   line-height: normal;
   font-size: 48px;
   color: #AD495B;
   text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
   backdrop-filter: blur(4px);/* Note: backdrop-filter has minimal browser support */
  }
</style>
</head>
<body>
<h1> HOTELS.NG INTERNSHIP 4.0</h1>
<h2> THE TIME IS 10:19am</h2>
<?php
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
?>
</body>
</html>
