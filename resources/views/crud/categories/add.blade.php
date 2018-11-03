@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Adicionar categorias
                    </h2>
                </div>
                <form id='form-retrieve' class='form-horizontal' action='{{ action("CategoryController@save") }}' method='post'>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                {{ csrf_field() }}
                                <p>
                                    <b>Nome</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control date" placeholder="Nome categoria" required>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-3">
                                <p>
                                    <b>Categoria pai</b>
                                </p>
                                <select name="categories_father" id="categories_father" class="form-control show-tick">
                                    <option value="">
                                        Selecione uma opção
                                    </option>
                                    @foreach($Categories as $Category)
                                        <option value="{{ $Category->id }}">
                                            {{ $Category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <p>
                                    <b>É adicional?</b>
                                </p>
                                <div class="switch">
                                    <label>Não<input type="checkbox" id="additional" value="1" name="additional"><span class="lever"></span>Sim</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <p>
                                    <b>É obrigatório?</b>&nbsp;<small>Marque essa opção caso seu adicional seja obrigatório. Bom para incrementos que fazem parte do seu produto.</small>
                                </p>
                                <div class="switch">
                                    <label>Não<input type="checkbox" id="additional" value="1" name="additional"><span class="lever"></span>Sim</label>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <p>
                                    <b>É adicional de?</b>
                                </p>
                                <select name="categories[]" multiple id="categories_father" class="form-control show-tick">
                                    @foreach($Categories as $Category)
                                        <option value="{{ $Category->id }}">
                                            {{ $Category->name }}
                                        </option>
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
    <script src="{{ url("/js/sizes.js") }}"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
    
    <script>
        $(function() {
            $("#categories_div").hide();
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
