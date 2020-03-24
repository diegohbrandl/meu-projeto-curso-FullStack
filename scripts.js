$(function(){
	//aqui vai todo o nosso codigo de java script
	$('nav.mobile').click(function(){
		//o que vai acontecer quando clicar no menu mobile
		var listaMenu = $('nav.mobile ul')
			if (listaMenu.is(':hidden')==true) {
				var icone = $('.botao-menu-mobile').find('i')
				icone.removeClass('fa-bars fa-2x')
				icone.addClass('fa-times fa-2x')
				listaMenu.slideToggle()
			}else{
				var icone = $('.botao-menu-mobile').find('i')
				icone.removeClass('fa-times fa-2x')
				icone.addClass('fa-bars fa-2x')
				listaMenu.slideToggle()
			}
		
	})
})