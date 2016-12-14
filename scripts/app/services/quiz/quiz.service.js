(function() {
	var module = angular.module('quiz');

	/**
	* QuizService : its purpose(for now) is to store the results as the quiz progresses 
	* TODO : put this and other services in a separate services folder
	*/
	var QuizService = function() {
		var service = this;
		service.answers = [];
		// Stores a key-value dict. internally
		// The answer value is supposed to be a number from 1 to 5
		// TODO: check if answer really is in [1,5]
		
		service.saveAnswer = function(questionId, answer) {
			service.answers[questionId] = answer;
		};

		service.outputAnswers = function() {
			console.log(service.answers);
		};
	};

	module.service('QuizService',QuizService);

})();