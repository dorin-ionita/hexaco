(function() {
	var module = angular.module('question');
	
	/*----------  Hardcoded values  ----------*/

	//TODO: replace this with an actual database or smth
	var questions = 
	[
	    {
	        "id": 1, 
			"text": "When I start a new project I'm clumsy",
	    },
	    {
	        "id": 2, 
			"text": "When I use git I'm a lot more efficient",
	    } 
	];

	var answers = 
	[
	    {
	        "value": 1, 
			"text": "Ma caracterizeaza aproape intotdeauna",
	    },
	    {
	        "value": 2, 
			"text": "Ma caracterizeaza intr-o mare masura",
	    },
	    {
	        "value": 3, 
			"text": "Ma caracterizeaza cateodata",
	    },
		{
	        "value": 4, 
			"text": "Ma caracterizeaza intr-o mica masura",
	    },
	    {
	        "value": 5, 
			"text": "Nu ma caracterizeaza deloc",
	    }
	];

	/*----------  End of section  ----------*/
		

	/**
	 * Is responsible for delivering the questions across the app
	 */
	var QuestionService = function(){
		var service = this;
		
		this.getQuestion = function(id) {
			//substract 1 because my array is 0-based
			return questions[id - 1];
		};

		this.getQuestionCount = function() {
			return questions.length;
		}

		this.getAnswers = function() {
			return answers;
		}
	};

	module.service('QuestionService',QuestionService);	
})();