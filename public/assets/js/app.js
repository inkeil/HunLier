//Your Application's Landing Page.
var app = angular.module('app', ['ngRoute']).run(function ($rootScope) { 
    // first create instance when app starts
    $rootScope.progressbar = NProgress;

    $rootScope.$on("$routeChangeStart", function () {
        $rootScope.progressbar.start();
    });

    $rootScope.$on("$routeChangeSuccess", function () {
        $rootScope.progressbar.done();
    });
})
.config(function($interpolateProvider, $routeProvider, $locationProvider) {
    // To prevent the conflict of `{{` and `}}` symbols
    // between Blade template engine and AngularJS templating we need
    // to use different symbols for AngularJS.

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
	$routeProvider
   .when('/login', {
    templateUrl: '/login',
    controller: 'LoginController'
  })
    .when('/', {
    templateUrl: '/main',
    controller: 'HomeController'
  })
  .when('/register', {
    templateUrl: '/register',
    controller: 'RegisterController'
  })
  .when('/u/:id', {
    templateUrl: '/u/:id',
    controller: 'ProfileController'
  })
  .when('/u/:id/settings/info', {
    templateUrl: '/u/:id/settings/info',
    controller: 'InfoController'
  })
  })
  .controller('HomeController', function($scope, $route, $routeParams, $location) {
      $scope.greeting = 'Your Application\'s Landing Page!';
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
  }) 
  .controller('RegisterController', function($scope, $route, $routeParams, $location) {
      $scope.greeting = 'Your Application\'s Landing Page!';
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
  })   
  .controller('LoginController', function($scope, $route, $routeParams, $location) {
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
 	var form = $(".login-form");
	form.css({
		opacity: 1,
		"-webkit-transform": "scale(1)",
		"transform": "scale(1)",
		"-webkit-transition": ".5s",
		"transition": ".5s"
	});
    // function to submit the form after all validation has occurred            
    $scope.submitForm = function(isValid) {
        // check to make sure the form is completely valid
        if (isValid) {
            alert('our form is amazing');
        }
 
    };
  })
  .controller('ProfileController',function($scope, $route, $routeParams, $location) {
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
  })
  .controller('InfoController',function($scope, $route, $routeParams, $location) {
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
  });
//  angular.bootstrap(document, ['app']);