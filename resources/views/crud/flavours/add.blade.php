@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Adicionar sabor
                    </h2>
                </div>
                <form id='form-retrieve' class='form-horizontal' action='{{ action("FlavourController@save") }}' method='post'>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
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
                                        <input  type="text" id="name" name="name" class="form-control date" placeholder="Nome sabor" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <p>
                                    <b>Categoria</b>
                                </p>
                                <select name="category" id="category" class="form-control show-tick">
                                    <option value="">Selecione uma categoria</option>
                                    @foreach ($Categories as $key => $category)
                                        @if(!$category->categoriesSon)
                                            @php continue; @endphp
                                        @endif
                                        <optgroup label="{{ $category->name }}">
                                            @foreach($category->categoriesSon as $cat_son)
                                                <option value="{{ $cat_son->id }}" {{ $cat_son->id == old('categories') ? 'selected' : '' }}>{{ $cat_son->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>                            
                            <div class="col-md-4">
                                <p>
                                    <b>Valor</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input value="{{ old('new_value') }}" type="text" id="new_value" name="new_value" class="form-control date coin" placeholder="Valor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>
                                    <b>Valor antigo(mostrar em promoções)</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input values="{{ old('old_value') }}" type="text" id="old_value" name="old_value" class="form-control date coin" placeholder="Valor antigo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <b>Ingredientes</b>
                                </p>
                                <select id="ingredients" name="ingredients[]" class="ms" multiple="multiple">
                                    @foreach ($Ingredients as $ingredient)
                                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success waves-effect control-label">Ok</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ url("/js/script.js") }}"></script>
    {{-- <script src="{{ url("/js/sizes.js") }}"></script> --}}

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
    
    <script>
        $(() => {
            $('#ingredients').multiSelect();
            $("#additional").click(function() {
                if($("#additional").is(':checked')) {
                    $("#categories_div").show();
                } else {
                    $("#categories_div").hide();
                }
            });
        });
    </script>
@endpush