<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>
<title>Test</title>

<script type="text/javascript">

$( document ).ready(function() {

	$( "#button" ).click(function() {
		
		var data = $('#num1').val();
		
		$.ajax({url: "calc.php", type: "POST", data: data, success: function(result){
			$("#result").html(result);
		}});
		return false;
	});
	
});

</script>

</head>
<body>

<h1>Testing Environment</h1>

<p>This is a directory specifically for the testing of HTML, CSS, Javascript, jQuery and related libraries.</p>

<div id="result">
	
</div>

<div>
<form action="" method="post">
	<p>
		<input type="text" name="number1" id="num1" />
	</p>
	<p>
		<input type="text" name="number2" />
	</p>
	<p>
		<input type="submit" name="button" id="button" value="Submit"></input>
	</p>
</form>
</div>

</body>
</html>