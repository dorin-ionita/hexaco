(function(){
	//get module
	var module = angular.module('questionDisplay');
	/**
	 * questionDisplay Controller
	*/
	var QuestionDisplayController = function(QuestionService, QuizService){
		var controller = this;
		controller.questionId = 1;
		controller.answer = {};
		controller.answers = QuestionService.getAnswers();
		controller.questionCount = QuestionService.getQuestionCount();
		
		controller.reloadQuestion = function(){
			controller.question = QuestionService.getQuestion(this.questionId);
		}

		controller.nextQuestion = function(){
			
			if(controller.questionId === controller.questionCount) {
				//end of quiz here
				return;
			};


			this.questionId = this.questionId + 1;
			this.reloadQuestion();
		}

		controller.submitAnswer = function(){
			//TODO: implement validation : make sure an answear is selected

			QuizService.saveAnswer(controller.questionId,controller.answer);
			QuizService.outputAnswers();
			controller.nextQuestion();
		}

		//first call - get first question
		this.reloadQuestion();
	};
	
	QuestionDisplayController.$inject = ['QuestionService','QuizService'];

	module.component('questionDisplay',{
		templateUrl: 'question-display.template',
        // template: "<h3>question</h3>",
        controller: QuestionDisplayController
	});

})();	