(function(){
	var app = angular.module('pep2016', ['ui.router']);

	app.config(function($locationProvider, $stateProvider, $urlRouterProvider) {
		//console.log($stateProvider, $urlRouterProvider);

		$urlRouterProvider.otherwise("/home");

		$stateProvider
		    .state('home', {
		      url: "/home",
		      templateUrl: "partials/home.html"
		    })
		    .state('rules', {
		    	url: "/rules",
		    	templateUrl: "partials/rules.html"
		    })
		    .state('faq', {
		    	url: "/faq",
		    	templateUrl: "partials/faq.html"
		    })
	    ;

	});
}());