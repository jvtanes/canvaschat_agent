var dateOnly = angular.module("dateOnly",[]);

dateOnly.controller("controlDate", function($scope) {
	$scope.today = new Date();

	$scope.currentmonth = $scope.today.getMonth() + 1;

	$scope.wordMonth = "";
	$scope.currentday = $scope.today.getDate();	
	$scope.currentyear = $scope.today.getFullYear();

	if ($scope.currentmonth == 1) {$scope.wordMonth = "January";}
	if ($scope.currentmonth == 2) {$scope.wordMonth = "February";}
	if ($scope.currentmonth == 3) {$scope.wordMonth = "March";}
	if ($scope.currentmonth == 4) {$scope.wordMonth = "April";}
	if ($scope.currentmonth == 5) {$scope.wordMonth = "May";}
	if ($scope.currentmonth == 6) {$scope.wordMonth = "June";}
	if ($scope.currentmonth == 7) {$scope.wordMonth = "July";}
	if ($scope.currentmonth == 8) {$scope.wordMonth = "August";}
	if ($scope.currentmonth == 9) {$scope.wordMonth = "September";}
	if ($scope.currentmonth == 10) {$scope.wordMonth = "October";}
	if ($scope.currentmonth == 11) {$scope.wordMonth = "November";}
	if ($scope.currentmonth == 12) {$scope.wordMonth = "December";}
});