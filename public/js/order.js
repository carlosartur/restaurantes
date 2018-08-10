var templates_multiselect = {
  filter: '<li class="multiselect-item filter"><div class="input-group"><input class="form-control multiselect-search" type="text"></div></li>',
  filterClearBtn: '',
}
var getSizes = function () {
  var route = $("#route_category").val();
  var category_id = $(this).val();
  $.ajax({
      url: `${route}/${category_id}`
    })
    .done(function (response) {
      $("#sizes_div").html("");
      var div = `<div class="form-group">
                <label class="col-md-4 control-label" for="sizes">Tamanho</label>
                <div class="col-md-4">
                    <select onchange="getFlavours(this);" id="sizes" name="sizes" class="form-control input">
                        <option value="">Selecione um tamanho</option>
                        <<options>>
                    </select>
                    <p class="help-block">Tamanho.</p>
                </div>
            </div>`;
      var input = "";
      for (var i in response.sizes) {
        let size = response.sizes[i];
        let id = size.id;
        let name = size.name;
        input += `<option value="${id}">${name}</option>`;
      }
      var div = div.split("<<options>>").join(input);
      $("#sizes_div").append(div);
    })
    .fail(function () {
      swal("Houve um erro ao obter os tamanhos desta tipo de produto.");
    });
};

var getFlavours = function ($this) {
  var route = $("#route_flavours").val();
  var size_id = $($this).val();
  var category_id = $("#categories").val();
  console.log(`${route}/${size_id}/${category_id}`);
  $.ajax({
      url: `${route}/${size_id}/${category_id}`
    })
    .done(function (response) {
      $("#flavours_div").html(response);
      $(".flavour_select").multiselect({
        buttonText: function (options, select) {
          switch (options.length) {
            case 0:
              return 'Selecione um sabor';
            case 1:
              return options.html();
            default:
              return `${options.length} sabores`;
          }
        },
        filterPlaceholder: 'Busca',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        includeSelectAllOption: false,
        maxHeight: 400,
        buttonWidth: '400px',
        templates: templates_multiselect
      });
    })
    .fail(function () {
      swal("Houve um erro ao obter os sabores.");
    });
};

$(document).ready(function () {
  $("#categories").change(getSizes);
});