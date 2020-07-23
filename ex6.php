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
  $number=0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result=1;
    $number=test_input($_POST["name"]);
    if($number==0){
        echo "$number's factorial value is:".$result;
    }
    else{
      for($i=$number;$i>0;$i--){
        $result*=$i;
      }
      echo "$number'factorial value is: ".$result;
    }
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