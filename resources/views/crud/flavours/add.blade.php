@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar sabor</div>
        <form class="form-horizontal" method='post' action='{{ action("FlavourController@save") }}'>
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
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome do sabor" required="">
                            <p class="help-block">Nome do sabor.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="category">Categoria</label>
                        <div class="col-md-4">
                            <select id="category" name="category" class="form-control input">
                                <option value="">Selecione uma categoria</option>
                                @foreach ($Categories as $key => $value)
                                    <option value="{{ $value->id }}" {{ $value->id == old('category') ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <p class="help-block">Categoria.</p>
                        </div>
                    </div>
                    @foreach($Sizes as $size)
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="old_value_{{ $size->id }}">Preço Tamanho {{ $size->name }}</label>
                            <div class="col-md-4">
                                <input id="old_value" name="value_size[{{ $size->id }}]" class="form-control" type="text" placeholder="Preço" required="">
                                <p class="help-block">Preço Tamanho {{ $size->name }}</p>
                            </div>
                        </div>
                    @endforeach
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
    <script src="{{ url("/js/flavour.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
