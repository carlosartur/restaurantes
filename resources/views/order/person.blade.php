@extends('layouts.app')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Cadastrar pessoa/endereco
                </h2>
            </div>
            <form class="form-horizontal" method='post' action='{{ route("admin.new_person") }}'>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3 col-sm-11 col-xs-11">
                            {{ csrf_field() }}
                            @if (count($errors) > 0 )
                                <div class='alert alert-danger'>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <p>
                                <b>Nome</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input autocomplete="off" id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome da pessoa" required>
                                    <input id="id" name="id" class="form-control" type="hidden">
                                </div>
                                <div id="lista_nomes" class="autocomplete-items"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <p>&nbsp;</p>
                            <div class="preloader pl-size-xs" id="loader-name">
                                <div class="spinner-layer pl-red-grey">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-11 col-xs-11">
                            <p>
                                <b>CEP</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input autocomplete="off" id="shipcode" value="{{ old('shipcode') }}" maxlength="9" name="shipcode" class="form-control" type="text" placeholder="CEP" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <p>&nbsp;</p>
                            <div class="preloader pl-size-xs" id="loader-cep">
                                <div class="spinner-layer pl-red-grey">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p>
                                <b>Telefone</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="phone" value="{{ old('phone') }}" name="phone" class="form-control" type="text" placeholder="Telefone" required>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-md-4">
                            <p>
                                <b>Nascimento</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="birthday" value="{{ old('birthday') }}" name="birthday" class="form-control" type="date" max="{{ date('Y-m-d', strtotime('-18 years')) }}" placeholder="Nascimento" required>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-md-4">
                            <p>
                                <b>Preferencias</b>
                            </p>
                            <div class="input-group">
                                <textarea name="preferences" id="preferences" class="form-control" placeholder="Preferências">{{ old('preferences') }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <p>
                                <b>Observações</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea name="comments" id="comments" class="form-control" placeholder="Observações">{{ old('comments') }}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <p>
                                <b>Endereço</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="address" value="{{ old('address') }}" name="address" class="form-control" type="text" placeholder="Endereco" required>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <p>
                                <b>Bairro</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="neighborhood" value="{{ old('neighborhood') }}" name="neighborhood" class="form-control" type="text" placeholder="Bairro" required>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <p>
                                <b>Cidade</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">        
                                    <input id="city" value="{{ old('city') }}" name="city" class="form-control" type="text" placeholder="Cidade" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <p>
                                <b>Referencia</b>
                            </p>
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="reference" value="{{ old('reference') }}" name="reference" class="form-control" type="text" placeholder="Ponto de referencia">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{ route("admin.autocomplete_people") }}/" id="route"/>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success waves-effect control-label">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('style')
    <style>
        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            /* display: inline-block; */
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff; 
            border-bottom: 1px solid #d4d4d4; 
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9; 
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important; 
            color: #ffffff; 
        }
    </style>
    {{-- <link src="{{ asset("/css/autocomplete.css") }}" rel="stylesheet" type="text/css"> --}}
@endpush

@push('scripts')
    <script src="{{ asset("/js/script.js") }}"></script>
    <script src="{{ asset("/js/jquery.inputmask.bundle.js") }}"></script>
    <script src="{{ asset("/js/inputmask.phone.extensions.js") }}"></script>
    <script src="{{ asset("/js/phone.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>    
    <script>
        var autocomplete_response = {};
        var input_length = 0;

        $(function() {
            $('#phone').inputmask('(99) 99999-9999');
            $('#shipcode').inputmask("99999-999");
            $(".preloader").hide();

            $('#name').keyup(() => {
                /** pega o numero de caracteres no input*/
                input_length = $('#name').val().length;
                let person = new PersonAutocomplete($('#name').val());
                person.timeout();
            });

            $('#shipcode').keyup(() => {
                var value = $('#shipcode').val().replace(/\D/g, '');
                if (value.length < 8) {
                    return null;
                }
                $("#loader-cep").fadeIn();
                $.ajax({
                    url: "{{ route("admin.autocomplete_postcode") }}/" + value,
                    type: 'get',
                    dataType: 'json'
                }).done(function(data){
                    $("#loader-cep").fadeOut();
                    if (data.erro) {
                        swal('Cep não encontrado');
                        return;
                    }
                    $("#address").val(data.logradouro);
                    $("#neighborhood").val(data.bairro);
                    $("#city").val(data.localidade);
                });
            });
        });
    </script>
@endpush
