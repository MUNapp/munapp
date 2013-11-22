<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<?php
$file='attendance.txt'; 
$fh = fopen($file, 'r+') or die("Can't open file");
fclose($fh);
file_put_contents('attendance.txt', null);
php?>
<script type="text/javascript">
window.close();
</script>
<body>
</body>
</html>