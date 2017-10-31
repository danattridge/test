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

<div ng-app="myApp" ng-controller="myCtrl">

<h1 ng-mouseover="count = count + 1">Mouse over me!</h1>

<h2>{{ count }}</h2>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.count = 0;
});
</script>

</body>
</html>