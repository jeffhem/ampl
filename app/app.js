
angular.module('ampl', [ 'ngRoute','templates','ui.bootstrap', 'ngSanitize'])
.config(function ($routeProvider, $locationProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'pages/main.html',
		controller: 'MainCtrl'
	})
	.when('/people/Prof-Teiichi-Ando', {
		templateUrl: 'pages/prof.html',
		controller: 'ProfCtrl'
	})
	.when('/people/Graduate-Students', {
		templateUrl: 'pages/grads.html',
		controller: 'GradsCtrl'
	})
	.when('/people/:pplType', {
		templateUrl: 'pages/pplList.html',
		controller: 'PplListCtrl'
	})
	.when('/Collaborators', {
		templateUrl: 'pages/pplList.html',
		controller: 'CollaCtrl'
	})
	.when('/Facilities', {
		templateUrl: 'pages/facilities.html',
		controller: 'FaciliCtrl'
	})
	.when('/Research-Areas', {
		templateUrl: 'pages/research.html',
		controller: 'ResearchCtrl'
	})
	.when('/Publications', {
		templateUrl: 'pages/publications.html',
		controller: 'PublicatCtrl'
	})
	.when('/Events', {
		templateUrl: 'pages/events.html',
		controller: 'EventCtrl'
	})
	.otherwise({
        redirectTo: '/'
     });

	$locationProvider.html5Mode(true);
});

