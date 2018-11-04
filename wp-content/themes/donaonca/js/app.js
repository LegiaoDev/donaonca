const $ = jQuery;

$(document).ready(()=> {
	let descricao = document.querySelector('#tab-title-description a'),
	avaliacao = document.querySelector('#tab-title-reviews a'),
	areaAvaliacao = document.querySelector('#tab-reviews');

	
	$(areaAvaliacao).hide();

	
	descricao.addEventListener('click', (e) => {
		e.preventDefault();
		alert('clicou');
	});
	
	avaliacao.addEventListener('click', (e) => {
		e.preventDefault();
		alert('clicou');
	});
	
});