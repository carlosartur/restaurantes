var templates_multiselect = {
	filter: '<li class="multiselect-item filter"><div class="input-group"><input class="form-control multiselect-search" type="text"></div></li>',
	filterClearBtn: '',
}

var getSizes = function () {
	var route = $("#route_category").val();
	var category_id = $(this).val();
	$.ajax({
		url: `${route}/${category_id}`
	}).done(function (response) {
		$("#sizes_div").html("");
		var div = `<p>
			<b>Selecione uma categoria</b>
		</p>
		<select onchange="getFlavours(this);" id="sizes" name="sizes" class="form-control show-tick" data-live-search="true">
			<option value="">Selecione um tamanho</option>
			<<options>>
		</select>`;
		var input = "";
		for (var i in response.sizes) {
			let size = response.sizes[i];
			let id = size.id;
			let name = size.name;
			input += `<option value="${id}">${name}</option>`;
		}
		var div = div.split("<<options>>").join(input);
		$("#sizes_div").append(div);
		$('select').selectpicker();
	}).fail(function () {
		swal("Houve um erro ao obter os tamanhos desta categoria.");
	});
};

var getFlavours = function ($this) {
	var route = $("#route_flavours").val();
	var size_id = $($this).val();
	var category_id = $("#categories").val();
	if (!size_id) {
		$("#flavours_div").html('');
		return;
	}
	$.ajax({
		url: `${route}/${size_id}/${category_id}`
	}).done(function (response) {
		$("#flavours_div").html(response);
		$('select').selectpicker();
	}).fail(function () {
		swal("Houve um erro ao obter os sabores.");
	});
};

$(document).ready(function () {
	$("#categories").change(getSizes);
});