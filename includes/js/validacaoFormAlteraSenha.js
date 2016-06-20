function confirmacaoAlert(acao){
    if(acao == "cadastraMercadoria") {
        $('#message').html('<div class="alert alert-success fade in" id="mensagemConfirmacao"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Mercadoria cadastrada com sucesso!</div>');
    }
}