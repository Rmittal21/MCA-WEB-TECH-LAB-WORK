<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <title>File handling</title>
</head>
<style>
div{
 margin:20px;
 padding:10px;
 color:blue;
 font-weight:bold;
}
</style>
<body>
<div>
 <?php
 $myfile = fopen("sample.txt", "r") or die("Unable to open file!");
 while(!feof($myfile)) {
 echo fgets($myfile) . "<br>";
 }
 fclose($myfile);
 ?>
</div>
</body>
</html