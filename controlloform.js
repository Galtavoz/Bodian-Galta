
var dettagli_form = {
	
		"nome": ["Inserire nome", /[a-z]+$/, "Inserire nome"],
		
		"cognome": ["Inserire cognome", /[a-z]+$/, "Inserire cognome"],

		"email": ["Inserire indirizzo email", /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/, "Indirizzo email non valido"],
		
		"telefono": ["Inserire numero", /^[0-9]{10}$/, "Inserire numero di 10 cifre senza il prefisso +39"],
				
		"messaggio": ["Inserire messaggio", /.+$/ , "Inserire messaggio"],

	};
	
		
	function validazioneCampo(input) {
		var p = input.parentNode;
		if (p.children.length == 2) {
			p.removeChild(p.children[1]);
		}
		var regex = dettagli_form[input.id][1];
		var text = input.value;
		if ((text == dettagli_form[input.id][0]) || (text.search(regex) != 0)) {
			alert(dettagli_form[input.id][2]);
			return false;
		}
		return true;
	}
		
	function validazioneForm() {
		var corretto = 0;
		for(var key in dettagli_form) {
			var input = document.getElementById(key);
			var risultato = validazioneCampo(input);
			if(risultato) corretto=corretto+1;
		}
		if(corretto==5){
		return true
		};
		
		return false;
	}
		

