(function() {
	var module = angular.module('user');

	var UserService = function(){
		var service = this;
		
		service.currentUser = {};
		
		//TODO : implement some validation
		service.storeCurrentUser = function(user){
			service.currentUser.name = user.name;
		};

		
	};

	module.service('UserService',UserService);

})();