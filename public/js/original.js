(function(){
	'use strict';

	var loginBtn = document.getElementById('login');
	var hiddenBtn = document.getElementById('hiddenDropdown');
	var returnAjax = getEnvFromJs('MY_COMMAND');
	const COMMAND = returnAjax;
	console.log(COMMAND);
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
			hiddenDropdown.style.display = "block";
			loginBtn.style.display = "inline";
		}

	});

	function combine(num, getCommand){
		num = getCommand + num;
		return num;
	}

	function getEnvFromJs(request) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var def = $.Deferred(); 
			var returnAjax = $.ajax({
				url: 'profile/getenv',
				dataType: 'text', //text, html, xml, json, jsonp, script
				type: 'POST', //method
				data: {
					'request': request
				},
				async: false
			}).responseText;

			return returnAjax;
	}

	function typewriter(){
		var text = 'Takuya Ohno Portfolio';
		var textArray = text.split('');
		var i = 0;
		function show(){
			var h1Tag = document.getElementById('typing');
			h1Tag.innerHTML = h1Tag.innerHTML + textArray[i];
			i++;
			var tid = setTimeout(function(){
				show();
			}, 100);
			if(i == textArray.length){
				clearTimeout(tid);
			}
		}
		show();
	}
	typewriter();

}());