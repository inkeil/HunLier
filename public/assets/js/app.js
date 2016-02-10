//Your Application's Landing Page.
  var app = angular.module('app', ['ngRoute']).config(function($interpolateProvider, $routeProvider, $locationProvider) {
    // To prevent the conflict of `{{` and `}}` symbols
    // between Blade template engine and AngularJS templating we need
    // to use different symbols for AngularJS.

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
	$routeProvider
   .when('/login', {
    templateUrl: '/login',
    controller: 'LoginController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  })
  .controller('HomeController', function($scope, $route, $routeParams, $location) {
      $scope.greeting = 'Your Application\'s Landing Page!';
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
  })  
  .controller('LoginController', function($scope, $route, $routeParams, $location) {
	  $scope.$route = $route;
      $scope.$location = $location;
      $scope.$routeParams = $routeParams;
	   $scope.submit = function() {
        alert(this.email);
		this.error_email=true;
      };
  });
//  angular.bootstrap(document, ['app']);