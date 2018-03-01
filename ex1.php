<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <a href="/test2/ex1.php?message=hello">Afficher Hello</a>
    <a href="/test2/ex1.php?message=bonjour">Afficher Bonjour</a>
    <a href="/test2/ex1.php?message=Hola">Afficher Hola</a>
    
<?php
echo "Mon message est :".$_GET['message'];
?>
    
</body>
</html>