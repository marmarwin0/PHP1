<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Number without divided by '3' :  ";
    for($i=1;$i<=100;$i++){
        if($i%3==0){
            continue;
        }
        echo $i.",";
    }
?>
</body>
</html>