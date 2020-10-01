var confirmApp = angular.module("confirmApp",[]);

confirmApp.controller("confirmPwd", function($scope) {
	$scope.confirm = function() {
		$scope.password = "";
		$scope.confirm = "";

		if ($scope.password != $scope.confirm) {
			alert("Not equal!");
		}
	}
});