var templates_multiselect = {
    filter: '<li class="multiselect-item filter"><div class="input-group"><input class="form-control multiselect-search" type="text"></div></li>',
    filterClearBtn: '',
}
$(function () {
    $("#categories").multiselect({
        buttonText: function (options, select) {
            switch (options.length) {
                case 0:
                    return 'Selecione uma tipo de produto';
                case 1:
                    return options.html();
                default:
                    return `${options.length} tipo de produtos selecionadas`;
            }
        },
        filterPlaceholder: 'Busca',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        includeSelectAllOption: false,
        maxHeight: 400,
        buttonWidth: '400px',
        templates: templates_multiselect,
        onChange: function (option, checked, select) {
            let val = option.val();
            if (checked) {
                let name = option.html().trim();
                let input = `<div class="form-group col-xs-12" id="div_${val}">
                            <label class="col-md-4 control-label" for="flavours">Valor para tipo de produto ${name}</label>
                            <div class="col-md-4">
                                <input type="number" min="0" value="1" step=".01" name="values[${val}]" id="values_${val}" required="" class="form-control input-md" >
                                <p class="help-block">Sabores.</p>
                            </div>
                        </div>`;
                $("#form_size").append(input);
            } else {
                $(`#div_${val}`).remove();
            }
        }
    });
});