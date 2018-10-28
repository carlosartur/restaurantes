/**
 * Realiza pergunta para deletar
 * @param {string} name 
 * @param {string} url 
 */
function confirm_delete(name, url) {
    swal({
        title: 'Tem certeza que deseja excluir ' + name + '?',
        text: "Isso não pode ser desfeito",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Não deletar!'
    }).then((willDelete) => {
        if (willDelete.value) {
            window.location = url;
        } else {
            swal(name + " - Não foi deletado!");
        }
    });
}

/**
 * Formata moedas
 */
function formatarMoeda(id) {
    var elemento = document.getElementById(id);
    var valor = elemento.value;

    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g,''));
    if (isNaN(valor)) {
        elemento.value = '';
        return;
    }
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    elemento.value = valor;
}


$(() => {
    $(".acordeon_title").click(function() {
        var span = $(this).find('.glyphicon');
        span.toggleClass('glyphicon-chevron-down');
        span.toggleClass('glyphicon-chevron-up');
    });

    $(".coin").keyup(function() {
        formatarMoeda($(this).prop('id'));
    });
});
