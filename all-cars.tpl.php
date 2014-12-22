<div ng-app="cars" class="all-cars" ng-controller="carsController">
	<div class="search">
		<div class="label"><label>Search:</label></div>
		<input class="long-search" type="text" ng-model="search.$">
	</div>

	<div class ="cars" ng-repeat="car in cars | filter:search">
		<h2><a href="/angular/?q=node/{{ car.node.nid }}">{{ car.node.title }}</a></h2>
		<div class="cover-image">
			<a href="/angular/?q=node/{{ car.node.nid }}" title="{{car.node.title}}"><img ng-src="{{car.node.image.src}}"></a>
		</div>
		<div class="price"><label>Price: </label> {{ car.node.price | currency:"€ ":0}} </div>		
		<div class="desc"> {{ car.node.description }} </div>
	</div>
</div>