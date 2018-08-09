@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar tipo de produto</div>
        <form class="form-horizontal" method='post' action='{{ action("CategoryController@save") }}'>
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
                    <div class="form-group col-xs-12" id="categories_father_div">
                        <label class="col-md-4 control-label" for="categories_father">Tipo de produtos pai</label>
                        <div class="col-md-4">
                            <select name="categories_father" id="categories_father" class="form-control input-md">
                                <option value="">
                                    Selecione uma opção
                                </option>
                                @foreach($Categories as $Category)
                                    <option value="{{ $Category->id }}">
                                        {{ $Category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="help-block">Tipo de produtos pai</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome da tipo de produto" required="">
                            <p class="help-block">Nome da tipo de produto.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="additional">Borda/Adicional</label>
                        <div class="col-md-4">
                            <input id="additional" value="{{ old('additional') }}" name="additional" type="checkbox">
                            <p class="help-block">Borda/Adicional</p>
                        </div>
                    </div>
                    <span id="categories_div">
                        <div class="form-group col-xs-12">
                            <label class="col-md-4 control-label" for="required">Borda/Adicional é obrigatório</label>
                            <div class="col-md-4">
                                <input id="required" value="{{ old('required') }}" name="required" type="checkbox">
                                <p class="help-block">Marque essa caixa caso seu adicional seja obrigatório. Bom para incrementos que fazem parte do seu produto.</p>
                            </div>
                        </div>
                        <div class="form-group col-xs-12" >
                            <label class="col-md-4 control-label" for="categories">É borda/adicional de:</label>
                            <div class="col-md-4">
                                <select name="categories[]" multiple="" id="categories" class="form-control input-md">
                                    @foreach($Categories as $Category)
                                        <option value="{{ $Category->id }}">
                                            {{ $Category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="help-block">tipo de produtos.</p>
                            </div>
                        </div>
                    </span>
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
    <script src="{{ url("/js/sizes.js") }}"></script>
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
