<div ng-app="cars" class="all-cars" ng-controller="carsController">
	<div class="pageinfo">
		<a href="" ng-click="toggleCustom()" ><div ng-hide="custom">Hide</div><div ng-show="custom">Show</div></a>
	</div>
	<div class="search-bar" ng-hide="custom">
		<div class="search">
			<div class="label"><label>Search:</label></div>
			<input class="long-search" type="text" ng-model="search.$">
		</div>
		<div class="price-slider">
				<div class="label"><label>Price:</label></div>			
				<div class="left">{{lower_price_bound | currency:"€":0}}</div>
				<div class="right">{{upper_price_bound | currency:"€":0}}</div>
		        <slider floor="60" ceiling="60000" ng-model-low="lower_price_bound" ng-model-high="upper_price_bound"></slider>
		</div>
	</div>

	<div class ="cars" ng-repeat="car in (filtered = (cars | filter:search | filter:priceFilter ))">
		<h2><a href="/angular/?q=node/{{ car.node.nid }}">{{ car.node.title }}</a></h2>
		<div class="cover-image">
			<a href="/angular/?q=node/{{ car.node.nid }}" title="{{car.node.title}}"><img ng-src="{{car.node.image.src}}"></a>
		</div>
		<div class="price"><label>Price: </label> {{ car.node.price | currency:"€ ":0}} </div>		
		<!-- <div class="desc"> {{ car.node.description }} </div> -->
	</div>
</div>