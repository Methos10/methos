var cars = angular.module('cars', ['uiSlider']);

cars.controller('carsController', function($scope, $http) {
	$http.get('?q=json/cars').success(function(result) {
		$scope.cars = (function () {
			return result.nodes;
		})();
	});

    $scope.lower_price_bound = 60;
    $scope.upper_price_bound = 60000;

    $scope.priceFilter = function (car) {
      var price = parseFloat(car.node.price);
      var min = parseFloat($scope.lower_price_bound);
      var max = parseFloat($scope.upper_price_bound);
      
      if (!price) {
        return false;
      }
    
      if(min && price < min) {
        return false;
      }
      
      if(max && price > max) {
        return false;
      }
    
      return true;
    };

    $scope.custom = false;
    $scope.toggleCustom = function() {
        $scope.custom = $scope.custom === false ? true: false;
    };
    
});
