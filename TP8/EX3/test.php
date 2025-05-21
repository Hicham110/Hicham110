<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!empty($_GET[' Nom']))
    echo "bonjour".$_GET[' Nom'];
   else echo "erreur de aisisir";
    ?>
    
</body>
</html>