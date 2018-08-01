@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar Tamanho</div>
        <form class="form-horizontal" method='post' action='{{ action("SizeController@save") }}'>
            <fieldset>
                <div class="panel-body">
                    {{ csrf_field() }}
                    <!-- Appended checkbox -->
                    @if(count($errors) > 0)
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
                            <input value="{{ old("name") }}" type="text" name="name" id="name" required="" class="form-control">
                            <p class="help-block">Nome do tamanho.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Pedaços</label>
                        <div class="col-md-4">
                            <input value="{{ old("slices") }}" type="number" name="slices" id="slices" required="" class="form-control input-md">
                            <p class="help-block">Pedaços.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Sabores</label>
                        <div class="col-md-4">
                            <input value="{{ old("flavours") }}" type="number" name="flavours" id="flavours" required="" class="form-control input-md" >
                            <p class="help-block">Sabores.</p>
                        </div>
                    </div>                    
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="categories">Categorias deste tamanho</label>
                        <div class="col-md-4">
                            <select name="categories" multiple="" id="categories" class="form-control input-md">
                                @foreach($Categories as $Category)
                                    <option value="{{ $Category->id }}">
                                        {{ $Category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="help-block">Categorias.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button id="submit" name="submit" class="btn btn-success control-label">Ok</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ url("/js/script.js") }}"></script>
    <script>
        var templates_multiselect = {
            filter: '<li class="multiselect-item filter"><div class="input-group"><input class="form-control multiselect-search" type="text"></div></li>',
            filterClearBtn: '',
        }
        $(function(){
            $("#categories").multiselect({
                buttonText: function(options, select) {
                    switch (options.length) {
                        case 0:
                            return 'Selecione uma espécie';
                        case 1:
                            return options.html();
                        default:
                            return `${options.length} espécies selecionadas`;
                    }
                },
                filterPlaceholder: 'Busca',
                enableFiltering: true,
                enableCaseInsensitiveFiltering : true,
                includeSelectAllOption: true,
                maxHeight: 400,
                buttonWidth: '400px',
                templates: templates_multiselect,
                selectAllText: 'Selecionar todos',
                onChange: function() {
                }
            });
        });
    </script>
@endpush
