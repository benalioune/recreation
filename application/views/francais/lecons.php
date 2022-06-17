<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<?php


$dirname = "../../../public/img/francais";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}


?>


</body>
</html>
