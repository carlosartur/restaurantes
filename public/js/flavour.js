$(document).ready(function () {
    $("#category").change(function () {
        var route = $("#route").val();
        var category_id = $(this).val();
        $.ajax({
            url: `${route}/${category_id}`
        }).done(function (response) {
            $("#input_forms").html('');
            for (var i in response.sizes) {
                let size = response.sizes[i];
                let id = size.id;
                let name = size.name;
                let value = size.pivot.value;
                var input = $(`<div class="form-group">
                    <label class="col-md-4 control-label" for="old_value_${id}">Preço Tamanho ${name}</label>
                    <div class="col-md-4">
                        <input value="${value}" id="old_value" name="value_size[${id}]" class="form-control" type="text" placeholder="Preço" required="">
                        <p class="help-block">Preço Tamanho ${name}</p>
                    </div>
                </div>`);
                $("#input_forms").append(input);
            }
        }).fail(function () {
            swal("Houve um erro ao obter os preços por tamanho desta categoria.");
        });
    });
});