// TODO: find a way to snippet creating modules and components
(function (){

	var module = angular.module('userForm');
	/**
	 * [userDataController ]
	 * @param  {[service]} User [stores the info sent via form]
	 * @return {[controller]}      [this function is a constructor]
	 */
	var userDataController = function(UserService){
		var ctrl = this;
		ctrl.user = {};
		//TODO: add validation
		ctrl.submit = function(){
			UserService.storeCurrentUser(ctrl.user);
			alert(UserService.currentUser.name);		
		};
	};

	userDataController.$inject = ['UserService'];

	module.component('userForm',{
		controller: userDataController,
		templateUrl: 'user-form.template'
	});

})();

