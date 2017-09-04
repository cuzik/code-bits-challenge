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
	// language_old = document.getElementById("code-block").classList[2];
	// document.getElementById("code-block").classList.remove(language_old);
	// document.getElementById("code-block").classList.add(language_new);
}