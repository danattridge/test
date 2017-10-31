<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/angular.min.js"></script>
<title>Stop PHP Script</title>

<script type="text/javascript">

</script>

</head>
<body>

<h1>Testing Environment</h1>

<p>This is a directory specifically for the testing of HTML, CSS, Javascript, jQuery and related libraries.</p>

<?php

// get current time as timestamp
$current_timestamp = time();

//get stop date as timestamp
$stop_date = strtotime('30-10-2017 08:27:40');

if ($current_timestamp > $stop_date){
	$str = exit('Script stopped!');
	eval($str);
}



?>

</body>
</html>