<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    echo "Welcome " . $userName . " and your age is " . $age."<br>";?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="welcome.php?Name=<?=$userName?>&age=<?=$age?>">Next Page</a>
</body>
</html>
<?php
}?>
  




  