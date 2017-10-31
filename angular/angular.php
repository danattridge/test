<!DOCTYPE html>
<html>
<head>
<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<script type="text/javascript" src="../inc/js/angular.min.js"></script>
<title>Test</title>

<script type="text/javascript">

$( document ).ready(function() {

	
});

</script>

</head>
<body>

<h1>Testing Environment</h1>

<p>This is a directory specifically for the testing of HTML, CSS, Javascript, jQuery and related libraries.</p>

<div ng-app="" ng-init="myCol='lightblue'">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1>
  <p>My first expression: {{ 5 + 5 }}</p>
  <input style="background-color:{{myCol}}" ng-model="myCol" value="{{myCol}}">
</div>

</body>
</html>