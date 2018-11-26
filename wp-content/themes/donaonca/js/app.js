const $ = jQuery;

$(document).ready(()=> {
	let descricao = document.querySelector('#tab-title-description a'),
	avaliacao = document.querySelector('#tab-title-reviews a'),
	areaAvaliacao = document.querySelector('#tab-reviews');
	areaDescricao = document.querySelector('#tab-description');

	
	$(areaAvaliacao).hide();

	
	if(descricao != null) {
		descricao.addEventListener('click', (e) => {
			e.preventDefault();
			$(areaAvaliacao).hide();
			$(areaDescricao).show();
		});
	}
	
	if(avaliacao != null) {
		avaliacao.addEventListener('click', (e) => {
			e.preventDefault();
			$(areaAvaliacao).show();
			$(areaDescricao).hide();
		});
	}
	$('.banners').slick();

	let fecharMenu = $('#fechar-mobile'),
	menuMobile = $('.area-menu-mobile'),
	iconeMobile = $('.icone-mobile');

	$(fecharMenu).click(() => {
		menuMobile.hide();
	});
	
	$(iconeMobile).click(() => {
		menuMobile.show();
	});
});