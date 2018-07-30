var ids = {};
$(function() {
    $(".add_flavour").click(function() {
        if ($('#discount').val()) {
            var id = ' ' + $(this).val();
            if (!ids.hasOwnProperty(id)) {
                ids[id] = $(this).attr('data-value');
            } else {
                delete ids[id];
            }
            calcula_desconto();
        } else {
            swal('Não tem desconto.');
            $('#discount').focus();
            return false;
        }
    });
    $("#discount").change(function() {
        calcula_desconto();
    });
    $("#discount").click(function() {
        calcula_desconto();
    });
});

function calcula_desconto() {
    var ids_array = [];
    var val = 0;
    for (var i in ids) {
        ids_array.push(i);
        val += parseFloat(ids[i]);
    }
    var disc = (val / 100) * $("#discount").val();
    $("#value").val((val - disc).toFixed(2).toString().split('.').join(','));
    $("#ids").val(ids_array.join(','));
}
