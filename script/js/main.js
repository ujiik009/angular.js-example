
/**
*  Module
*
* Description
*/
angular.module('main_app', []);


/**
*  Module
*
* Description
*/
angular.module('main_app')
	.controller('loginController', function ($scope,$http) {
			$scope.checked = false;
			$scope.names = [];
			$scope.action_login = function(){
				$http.get("content.json").then(function(resolve){
					$scope.names = resolve.data;					
				});		
			}
			$scope.show_name = function(index){
					alert($scope.names[index].name);
			}		
	})
	.controller('NameCtrl', function ($scope) {
		
	})