<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   String:<input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit">
</form>
<?php
  $string="";
  $newstring="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $string=test_input($_POST["name"]);
     
     for($i=0;$i<strlen($string);$i++){
        if($i==0){
            $newstring[$i]=strtoupper($string[$i]);
        }
        elseif($string[$i]==" "){
           $i++;
           $newstring[$i]=strtoupper($string[$i]);
        }
        else{
           $newstring[$i]=$string[$i];
        }
     }
     echo $newstring;

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