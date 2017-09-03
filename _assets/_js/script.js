function format () {
	var element = document.getElementById("code-block");
	var teste = element.innerHTML.replace(/">( )?<\/div>/g,'">').replace(/<\/div>/g,'\n').replace(/<(\/)?[a-z 0-9 _="/-]*(")?>/g,'');
	document.getElementById("code-block").innerHTML = teste;
	$(document).ready(function() {
		$('pre code').each(function(i, block) {
			hljs.highlightBlock(block);
			hljs.lineNumbersBlock(block);
		});
	});
}

function clean () {
	document.getElementById("code-block").innerHTML = '';
}

function identify_language () {
	var element = document.getElementById("arq_name");
	var language = '';
	if(!(element.value.replace(/.*\./,'') === element.value)){
		language = element.value.replace(/.*\./,'');
		if(language!=''){
			change_language(language);
		}
	}
}

function change_language (language_new) {
	language_old = document.getElementById("code-block").classList[2];
	document.getElementById("code-block").classList.remove(language_old);
	document.getElementById("code-block").classList.add(language_new);
	format();
}