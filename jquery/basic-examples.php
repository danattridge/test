<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../inc/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"src="../inc/js/angular.min.js"></script>
<title>Test</title>

<script type="text/javascript">

$( document ).ready(function() {
	
	var numSquares;
	var randNum;

    $('.square').click(function(){
		
		numSquares = $('.square:visible').length;
		
		randNum = Math.floor(Math.random() * numSquares + 1);
		
		$("div#squares .square:nth-child(' + randNum + ')").hide();
		
    });
	
});

</script>

<style>

.red {
	background-color: red;
}

.blue {
	background-color: blue;
}

.green {
	background-color: green;
}

.yellow {
	background-color: yellow;
}

.pink {
	background-color: pink;
}

.purple {
	background-color: purple;
}

.black {
	background-color: black;
}

.maroon {
	background-color: maroon;
}

.lightblue {
	background-color: lightblue;
}

.gold {
	background-color: gold;
}

.square {
	display: block;
	height: 50px;
	width: 50px;
	float: left;
	margin: 5px;
}

.clearfix {
	width: 100%;
	clear: both;
}

</style>

</head>
<body>

<h1>Testing Environment</h1>

<p>This is a directory specifically for the testing of HTML, CSS, Javascript, jQuery and related libraries.</p>

<div id="squares">
	<div class="square red"></div>
	<div class="square blue"></div>
	<div class="square green"></div>
	<div class="square yellow"></div>
	<div class="square pink"></div>
	<div class="square purple"></div>
	<div class="square black"></div>
	<div class="square maroon"></div>
	<div class="square lightblue"></div>
	<div class="square gold"></div>
</div>

</body>
</html>