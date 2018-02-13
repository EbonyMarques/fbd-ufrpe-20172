$(function(){
    $('#excluir').click(function(e){
        var elem = $(this).parent().children('li#dados').children('a')[0];
        var attrs = decodeURI(elem.href).split("?").slice(1,this.length);
        for (var i = 0; i < attrs.length; i++) {
            $($('#inputs').children()[i]).val(attrs[i]);
        }
    });
});
