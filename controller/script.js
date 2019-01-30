var sign = document.getElementById('sign');
sign.addEventListener('click', function(){
	var httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = function (argument) {
	if (httpRequest.readyState === 4)
		document.getElementById('main').innerHTML = httpRequest.responseText;
	}
	httpRequest.open('GET', './Vue/sign.php', true);
	httpRequest.send();
});