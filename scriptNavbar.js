//FONCTION QUI PERMET LE DEROULAGE DU DROPDOWN AU SURVOL
$('ul.nav li.dropdown').hover(
	function() 
	{
		$(this).find('.dropdown-menu').stop(true, true).fadeIn(100); //fadeIn : afficher
		//$(this).find('.dropdown-menu').stop(true, true).delay(X).fadeIn(200);
		//delay(X) permet d'attendre X ms d'enleverl'affichage
	},	
	function() 
	{
		$(this).find('.dropdown-menu').stop(true, true).fadeOut(100); //fadeOut : désafficher
		//$(this).find('.dropdown-menu').stop(true, true).delay(X).fadeOut(500);
		//delay(X) permet d'attendre X ms d'enleverl'affichage
	}
);

//FONCTION QUI PERMET DE CLIQUER SUR LE "PARENT" DU DROPDOWN
$('.dropdown').on('show.bs.dropdown', function () 
{
	$(this).siblings('.open').removeClass('open').find('a.dropdown-toggle').attr('data-toggle', 'dropdown');
	$(this).find('a.dropdown-toggle').removeAttr('data-toggle');
});