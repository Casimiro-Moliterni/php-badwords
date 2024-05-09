<?php
 $name= $_GET['firstname'];
 $word= $_GET['privacy'];
 var_dump($name);
?>


$my_string_split= str_split($word);
$my_string_privacy= str_replace($my_string_split,'*',$word);
$string_long=str_replace($my_string_split,$my_string_privacy,$name)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>paragrafo : <?php echo $name; ?></h3>
</body>
</html>