$(function(){
	// Aqui vai todo o código de javascript
	$('nav.mobile').click(function(){
		// o que acontece quando clicamos na nav.mobile
		var listaMenu = $('nav.mobile ul');
		
		//Abrir menu usando fadeIn
		/*
		if(listaMenu.is(':hidden') == true)
			listaMenu.fadeIn();
		else
			listaMenu.fadeOut();
		*/
		// Abrir ou fechar o menu usando função propria jquery
		listaMenu.slideToggle();

	})

})