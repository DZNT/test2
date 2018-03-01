<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<a href="/test2/ex2.php?">Message de taille 15 en rouge</a>
<div style='font-size: 15px;font-color:#FF0000'></div>

<?php
echo "Mon message est :".$_GET['message'];
echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";
?>  
</body>
</html>