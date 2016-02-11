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
 
    // function to submit the form after all validation has occurred            
    $scope.submitForm = function(isValid) {
        // check to make sure the form is completely valid
        if (isValid) {
            alert('our form is amazing');
        }
 
    };
  });
//  angular.bootstrap(document, ['app']);