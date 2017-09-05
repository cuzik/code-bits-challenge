var codeEditor;
function init () {
	this.codeEditor = CodeMirror.fromTextArea(document.getElementById("code"), {
		lineNumbers: true,
		mode: "text/x-c++src",
		matchBrackets: true,
		styleActiveLine: true,
		lineWrapping: true,
		autoCloseBrackets: true,
		theme: 'dracula',
		tabSize: 2,
		keyMap: "sublime",
		showCursorWhenSelecting: true
	});
	var mac = CodeMirror.keyMap.default == CodeMirror.keyMap.macDefault;
  	CodeMirror.keyMap.default[(mac ? "Cmd" : "Ctrl") + "-Space"] = "autocomplete";
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

lang_names = {}
lang_names["scala"] = "text/x-scala"
lang_names["c"] = "text/x-csrc"
lang_names["cpp"] = "text/x-c++src"
lang_names["java"] = "text/x-java"
lang_names["css"] = "text/css"
lang_names["py"] = "text/x-python"
lang_names["rb"] = "text/x-ruby"

function change_language (language_new) {
	if(lang_names[language_new]!=null){
		this.codeEditor.setOption("mode", lang_names[language_new]);
	}
}
