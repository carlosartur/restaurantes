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

$(() => {
    $(".acordeon_title").click(function() {
        var span = $(this).find('.glyphicon');
        span.toggleClass('glyphicon-chevron-down');
        span.toggleClass('glyphicon-chevron-up');
    });
});
