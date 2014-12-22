var cars = angular.module('cars', []);

cars.controller('carsController', function($scope, $http) {
	$http.get('/json/cars').success(function(result) {
		$scope.cars = (function () {
			return result.nodes;
		})();
	});
});