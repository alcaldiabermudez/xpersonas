// Abrir el menu laterar
function abrirMenu() {
	$('.menu').removeClass('menu-cerrado').addClass('menu-abierto left');
	$('.menu-lista').css({'display':'inline'});
	$('.content').css({'display':'none'});
	$('.title-menu').css({'display':'block'});
	$('.btn-menu-cerrar').css({'display':'block'});
	$('.btn-menu').css({'display':'none'});
}

// Cerrar menu
function cerrarMenu() {
	$('.content').css({'display':'block'});
	$('.menu').removeClass('menu-abierto').addClass('menu-cerrado');
	$('.menu-lista').css({'display':'none'});
	$('.title-menu').css({'display':'none'});
	$('.btn-menu').css({'display':'block'});
	$('.btn-menu-cerrar').css({'display':'none'});
}


/****************************
	* Menu con un solo boton
 	$('.btn-menu').toggle(
		function(){
			abrirMenu();
		},
		function() {
			cerrarMenu();
		});
 ***************************/
$(document).ready(function(){
		/* Menu con dos botones */
		$('.btn-menu').click(function(){
			abrirMenu();
		});
		$('.btn-menu-cerrar').click(function(){
			cerrarMenu();
		});
});

$('*[rel=tooltip]').tooltip('hide');



function JQload(elem, url) {
	$(elem).load(base_url + url);
}

function redirec(url) {
	if( url == null ){ url = ''; }
	window.location.href= base_url + url;
}