(function(){
	'use strict';

	var loginBtn = document.getElementById('login');
	const COMMAND = env('MY_COMMAND');
	var getCommand = 0;
	var num;

	document.addEventListener('keyup', function(){
		num = event.keyCode;
		getCommand = combine(num, getCommand);
		console.log(getCommand)

		if(getCommand > 440){
			getCommand = 0;
		}
		
		if(COMMAND == getCommand){
			loginBtn.style.display = "inline";
		}

	});

	function combine(num, getCommand){

		num = getCommand + num;
		return num;

	}


}());