<?php ?>
<!DOCTYPE html>
	<html lang="en">

	<meta charset="utf-8">
	<meta name="viewport" content:"width=device-width, initial-scale=1.0">
	<head>
		<title>Document</title>

<?php
	
	if (isset($imports)) {
			foreach ($imports["css"] as $cssFile) {
				echo "<link rel='stylesheet' type='text/css' href='".$cssFile."'>";
			}

			foreach ($imports ["js"] as $jsFile){
				echo "<script type='text/javascript' src='".$jsFile."'></script>";
			}
		}
		
?>
		</head>
	<body>
	<a href="index.php">inicio<a/><br><br>
	
	</body>
	</html>





