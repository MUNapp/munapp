<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$file = 'attendance.txt';
file_put_contents($file, print_r($_POST, true), FILE_APPEND);
php?>
CONGRATS! Attendance taken.
</body>
</html>