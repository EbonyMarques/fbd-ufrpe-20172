$(function(){
    $(document).on('click', '#excluir', function(){
        var elem = $(this).parent().children('li#dados').children('a')[0];
        var attrs = decodeURI(elem.href).split("?").slice(1,this.length);
        for (var i = 0; i < attrs.length; i++) {
            $($('#inputs').children()[i]).val(attrs[i]);
        }
    });
    if (tipo != '' && mensagem != '') {
        Alerta = {
            tipo: tipo,
            mensagem: mensagem,
            show: function() {
                $('div.container').append('<div class="alert alert-'+ this.tipo +' alert-dismissable alerta"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+  this.mensagem +'</div>');
                $('div.alerta').fadeIn(1000);
                setTimeout(function () {
                    $('div.alerta').fadeOut(1000);
                }, 4000);
            }
        }
        Alerta.show();
    }

});
