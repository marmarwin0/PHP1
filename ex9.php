<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Number:<input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit">
</form>
<?php
  $number="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total=0;
    $number=test_input($_POST["name"]);
    $arr=str_split($number,2);
    $length=count($arr);
    
    for($i=0;$i<$length;$i++){
        $total+=$arr[$i];
    }
    $average=$total/$length;
    echo "Average value is:".$average."<br>";
    sort($arr);
    $min1=$arr[0];
    
    $min2=$arr[1];
    $max1=$arr[$length-2];
    $max2=$arr[$length-1];
    echo "Two minimum values are:".$min1.",".$min2."<br>";
    echo "Two maximum values are:".$max1.",".$max2;

  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>  
</body>
</html>