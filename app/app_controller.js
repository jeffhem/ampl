
angular.module('ampl')
//index
.controller('MainCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/main.json').success(function(data){
		$scope.main = data;
	});
})
//prof
.controller('ProfCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/prof.json').success(function(data){
		$scope.prof = data;
	});
})
//grad
.controller('GradsCtrl', function ($scope, $http, $modal, $log) {
	$http.get('/Research/AMPL/redesign/pages/grads.json').success(function(data){
		$scope.grads = data.grads;
  	});

	$scope.open = function (index) {
		var modalInstance = $modal.open({
			templateUrl: 'myModalContent.html',
			controller: 'ModalInstanceCtrl',
			size: 'lg',
			resolve: {
				data: function () {
					return $scope.grads[index];
				}
			}
		});
	};
})
.controller('ModalInstanceCtrl', function ($scope, $modalInstance, data) {

	$scope.grad = data;

	$scope.cancel = function () {
		$modalInstance.dismiss('cancel');
	};
})
//other people listing page
.controller('PplListCtrl', function ($scope, $http, $routeParams) {
	//console.log($routeParams.pplType);
	var page = '';
	switch ($routeParams.pplType) {
		case 'Undergraduate-Students':
			page = 'undergrads';
			break;
		case 'Visiting-Research-Associates':
			page = 'visitings';
			break;
		case 'Alumni':
			page = 'alumni';
			break;
		case 'Previous-Visiting-Scholars':
			page = 'scholars';
			break;
	}
	$http.get('/Research/AMPL/redesign/pages/'+page+'.json').success(function(data){
		$scope.pageData = data;
		
	});
	
})
//collaborator
.controller('CollaCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/collaborators.json').success(function(data){
		$scope.pageData = data;
	});
})
//research
.controller('ResearchCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/research.json').success(function(data){
		$scope.sponsors = data.sponsors;
		$scope.researches = data.researches;
	});
})
//facilities
.controller('FaciliCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/facilities.json').success(function(data){
		$scope.facilities = data.facilities;
	});
})
//facilities
.controller('PublicatCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/publications.json').success(function(data){
		$scope.publications = data.publications;

	});
})
//events
.controller('EventCtrl', function ($scope, $http) {
	$http.get('/Research/AMPL/redesign/pages/events.json').success(function(data){
		$scope.events = data.events;
		
	});
})
;

