<?php 
$aldagaia=3;
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 switch($aldagaia){
    case 1:
        echo "$aldagaia berdin 1.";
        break;
    case 2:
        echo "$aldagaia berdin 2.";
        break;
    case 3:
        echo "$aldagaia berdin 3.";
        break;
    default:
        echo "$aldagaia ez da ez 1, ez 2 ezta 3.";
 }
?>
</body>
</html>