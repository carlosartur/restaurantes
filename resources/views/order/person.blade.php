@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Cadastrar pessoa/endereco</div>
        <form class="form-horizontal" method='post' action='{{ route("admin.order_ok") }}'>

            <div class="panel-body">
                <fieldset>
                    {{ csrf_field() }}
                    <!-- Form Name -->
                    <!-- Appended checkbox -->
                    @if (count($errors) > 0 )
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome da pessoa" required="">
                            <input id="id" name="id" class="form-control" type="hidden">
                            <p class="help-block">Nome da pessoa.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Endereco</label>
                        <div class="col-md-4">
                            <input id="address" value="{{ old('address') }}" name="address" class="form-control" type="text" placeholder="Endereco" required="">
                            <p class="help-block">Endereco da pessoa.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Bairro</label>
                        <div class="col-md-4">
                            <input id="neighborhood" value="{{ old('neighborhood') }}" name="neighborhood" class="form-control" type="text" placeholder="Bairro" required="">
                            <p class="help-block">Bairro</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Cidade</label>
                        <div class="col-md-4">
                            <input id="city" value="{{ old('city') }}" name="city" class="form-control" type="text" placeholder="Cidade" required="">
                            <p class="help-block">Cidade</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">CEP</label>
                        <div class="col-md-4">
                            <input id="shipcode" value="{{ old('shipcode') }}" name="shipcode" class="form-control" type="text" placeholder="CEP" required="">
                            <p class="help-block">CEP</p>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="panel-footer">
                <div class="form-group text-right">
                    <div class="col-xs-12">
                        <button id="submit" name="submit" class="btn btn-success control-label">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url("/js/script.js") }}"></script>
    <script>
        var autocomplete_response = {};
        $(function() {
            $('#name').autocomplete({
                minLength: 4,
    			autoFocus: true,
                source: function(request, response){
					$.ajax({
						url: "{{ route("admin.autocomplete_people") }}/" + request.term,
						type: 'get',
						dataType: 'json'
					}).done(function(data){
                        autocomplete_response = data;
                        var autocomplete_options = [];
						if(data.length > 0) {
                            for(var i in data) {
                                autocomplete_options.push({ 
                                    value : data[i].name,
                                    label : `${data[i].name} - ${data[i].address.neighborhood}`
                                });
                            }
							response(autocomplete_options);
						}
					});
                },
                select: function(event, ui) {
                    var data = {};
                    for (var i in autocomplete_response) {
                        if (autocomplete_response[i]['name'] == ui['item']['value']) {
                            data = autocomplete_response[i];
                            break;
                        }
                    }
                    address_inputs = data.address;
                    $("#id").val(data.id);
                    $("#address").val(address_inputs.address);
                    $("#neighborhood").val(address_inputs.neighborhood);
                    $("#city").val(address_inputs.city);
                    $("#shipcode").val(address_inputs.shipcode);
                }
            });

            $('#city').autocomplete({
                minLength: 2,
    			autoFocus: true,
                source: function(request, response){
					$.ajax({
						url: "{{ route("admin.autocomplete_city") }}/" + request.term,
						type: 'get',
						dataType: 'json'
					}).done(function(data){
                        response(data);
					});
                }
            });

            $('#neighborhood').autocomplete({
                minLength: 2,
    			autoFocus: true,
                source: function(request, response){
					$.ajax({
						url: "{{ route("admin.autocomplete_neighborhood") }}/" + request.term,
						type: 'get',
						dataType: 'json'
					}).done(function(data){
                        response(data);
					});
                }
            });
        });
    </script>
@endpush