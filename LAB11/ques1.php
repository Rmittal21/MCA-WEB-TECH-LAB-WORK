<html>
<body>
<?php
	$string= $_POST['string_value'];
	$string_check="igdtuw";
	if(strlen($string) >=10)
		echo("ERROR! Length should be less than 10 \n");
	if(strlen($string) == $string_check)
		echo "OK";
	else
		echo("ERROR! Not the correct university name\n");
	echo("\n Reverse of the string is: ");
	echo strrev($string);
?>
</body>
</html>