function confirm_delete(name, url) {
    name = name.split(' ');
    delete name[0];
    name = name.join(' ');
    swal({
        title: 'Tem certeza que deseja excluir ' + name + '?',
        text: "Isso não pode ser desfeito",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then(function (willDelete) {
      if (willDelete) {
        window.location = url;
      } else {
        swal(name + " - Não foi deletado!");
      }
    });
}

$(document).ready(function() {
    $(".btn-danger").click(function() {
        var name = $(this).attr('title');
        var url = $(this).attr('value');
        confirm_delete(name, url);
    });
    $("#search").click(function() {
        $("#form-retrieve").submit();
    });
    $(".acordeon_title").click(function() {
        var span = $(this).find('.glyphicon');
        span.toggleClass('glyphicon-chevron-down');
        span.toggleClass('glyphicon-chevron-up');
    });
});
