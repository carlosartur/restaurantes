@extends('layouts.app2')

@section('content')

<div class='container'>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="panel panel-default">
        <style>
            input {
                resize: horizontal;
                width: 200px;
            }
            
            input:active {
                width: auto;   
            }
            
            input:focus {
                min-width: 200px;
            }
        </style> 
        <!-- Default panel contents -->
        <div class="panel-heading-personalizado"><b>CHEFFE DA PIZZA | PROMOÇÃO DETETIVE DA PIZZA</b></div>
        <form class="form-horizontal" method='post' action='{{ route("pre_cadastro_salvar") }}'>

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
                    <div class="form-group col-sm-4">
                        <div class="col-lg-4">
                            <label>Nome:
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control input" type="text" placeholder="Nome da pessoa" required="">
                            <input id="id" name="id" class="form-control" type="hidden">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>CEP:
                            <input id="shipcode" value="{{ old('shipcode') }}" maxlength="9" name="shipcode" class="form-control input" type="text" placeholder="CEP" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Telefone:
                            <input id="phone" value="{{ old('phone') ?: '' }}" data-inputmask="'alias': 'phone'" im-insert="true" name="phone" class="form-control input" type="text" placeholder="Telefone" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Whatsapp:
                            <input id="whatsapp" value="{{ old('phone') ?: '' }}" data-inputmask="'alias': 'phone'" im-insert="true" name="whatsapp" class="form-control input" type="text" placeholder="Whatsapp" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Endereço:
                            <input id="email"  value="{{ old('email') }}" name="email" class="form-control" type="text" placeholder="Email" required="">
                        </label>
                    </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Nascimento:
                            <input id="birthday" value="{{ old('birthday') }}" name="birthday" class="form-control" type="date" placeholder="Nascimento" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Endereço:
                            <input id="address"  value="{{ old('address') }}" name="address" class="form-control" type="text" placeholder="Endereco" required="">
                        </label>
                        </div>
                    </div>
                    <input type="hidden" name="recomendante" id="recomendante" value="{{ $recomendante }}"/>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Bairro:
                            <input id="neighborhood" value="{{ old('neighborhood') }}" name="neighborhood" class="form-control" type="text" placeholder="Bairro" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="col-lg-4">
                             <label>Cidade:
                            <input id="city" value="{{ old('city') }}" name="city" class="form-control" type="text" placeholder="Cidade" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-5">
                        <div class="col-lg-12">
                            <br>
                             <label>Quantas pizzas você costuma pedir por mês?
                            <input id="how_many_pizzas" value="{{ old('how_many_pizzas') }}" name="how_many_pizzas" class="form-control-personalizado" type="number" value="1" min="1" step="1" placeholder="0" required="">
                        </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-10">
                        <div class="col-lg-5">
                             <label>Quais sabores da sua preferência?
                            <input id="preferences" value="{{ old('preferences') }}" name="preferences" class="form-control" type="text" placeholder="Preferências" required="">
                        </label>
                        </div>
                    </div>
                    <center>
                    <button id="submit" name="submit" class="btn btn-success control-label"><span><center><b>Enviar</b></center></span></button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset("/js/script.js") }}"></script>
    <script src="{{ asset("/js/jquery.inputmask.bundle.js") }}"></script>
    <script>
        var autocomplete_response = {};
        $(function() {
            $('#phone').inputmask("99-99999-9999");
            $('#whatsapp').inputmask("99-99999-9999");
            $('#shipcode').inputmask("99999-999");

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

            $('#shipcode').autocomplete({
                minLength: 8,
    			autoFocus: true,
                source: function(request, response) {
                    if (request.term.replace(/\D/g,'').length > 8) {
                        return false;
                    }
					$.ajax({
						url: "{{ route("admin.autocomplete_postcode") }}/" + request.term,
						type: 'get',
						dataType: 'json'
					}).done(function(data){
                        if (data.erro) {
                            swal('Cep não encontrado');
                        }
                        autocomplete_response[data.cep] = data;
                        if (data.cep) {
                            response([{
                                value : data.cep,
                                label : `${data.cep} - ${data.logradouro} - ${data.bairro}`
                            }]);
                        }
					});
                },
                select: function(event, ui) {
                    var data = autocomplete_response[ui.item.value];
                    $("#address").val(data.logradouro);
                    $("#neighborhood").val(data.bairro);
                    $("#city").val(data.localidade);
                }
            });
        });
    </script>
@endpush
