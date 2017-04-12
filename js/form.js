jQuery(document).ready(function (){
	//Primeira seção
	jQuery("#enviaform").click(function(){

		var dados = {
			'action': 'envia_email',
			'dados' : $('#formcontato').serialize()
		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {
			
			console.log(resposta.mensagem);

			if(resposta.status == true) {
				$('#formcontato .call-to-action').fadeOut('fast',function(){
					$('#formcontato .resposta').removeClass('animated shake flipInY').addClass('animated '+resposta.class).html(resposta.mensagem);	
					$('#formcontato input, #formcontato textarea').val('');
				});
			} else {
				$('#formcontato .resposta').removeClass('animated shake flipInY').addClass('animated '+resposta.class).html(resposta.mensagem);
			}

		}, 'json');


	});

});