const $ = jQuery;

$(document).ready(()=> {
	let descricao = document.querySelector('#tab-title-description a'),
	avaliacao = document.querySelector('#tab-title-reviews a'),
	informacaoExtra = document.querySelector('#tab-title-additional_information a'),
	areaAvaliacao = document.querySelector('#tab-reviews'),
	areaDescricao = document.querySelector('#tab-description'),
	areaInformacaoExtra = document.querySelector('#tab-additional_information');


	
	$(areaAvaliacao).hide();
	$(areaInformacaoExtra).hide();

	
	if(descricao != null) {
		descricao.addEventListener('click', (e) => {
			e.preventDefault();
			$(areaAvaliacao).hide();
			$(areaDescricao).show();
			$(areaInformacaoExtra).hide();
		});
	}
	
	if(avaliacao != null) {
		avaliacao.addEventListener('click', (e) => {
			e.preventDefault();
			$(areaAvaliacao).show();
			$(areaDescricao).hide();
			$(areaInformacaoExtra).hide();
		});
	}
	if(informacaoExtra != null) {
		informacaoExtra.addEventListener('click', (e) => {
			e.preventDefault();
			$(areaInformacaoExtra).show();
			$(areaDescricao).hide();
			$(areaAvaliacao).hide();
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