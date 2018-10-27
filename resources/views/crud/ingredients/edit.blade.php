@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Editar Sabor</div>
        <form class="form-horizontal" method='post' action='{{ action("FlavourController@save", $Flavour->id) }}'>
            <div class="panel-body">
                <fieldset>

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
                            <input id="name" value="{{ $Flavour->name }}" name="name" class="form-control" type="text" placeholder="Nome do sabor" required="">
                            <p class="help-block">Nome do sabor.</p>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Preço</label>
                        <div class="col-md-4">
                            <input id="old_value" value="{{ number_format($Flavour->old_value , 2 , ',' , '.' ) }}" name="old_value" class="form-control" type="text" placeholder="Preço" required="">
                            <p class="help-block">Preço</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Preço promocional</label>
                        <div class="col-md-4">
                            <input id="new_value" value="{{ number_format($Flavour->new_value , 2 , ',' , '.' ) }}" name="new_value" class="form-control" type="text" placeholder="Preço promocional">
                            <p class="help-block">Preço promocional.</p>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="category">tipo de produto</label>
                        <div class="col-md-4">
                            <select id="category" name="category[]" class="form-control input">
                                <option value="">Selecione uma tipo de produto</option>
                                @foreach ($Categories as $key => $category)
                                    <option value="{{ $category->id }}" {{ ($category->id == old('category') || $category->id == $Flavour->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <p class="help-block">tipo de produto.</p>
                        </div>
                    </div>
                    @foreach($Flavour->flavour_size as $size)
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="old_value_{{ $size->size_id }}">Preço Tamanho {{ $size->size->name }}</label>
                            <div class="col-md-4">
                                <input id="old_value" value="{{ $size->value }}" name="value_size[{{ $size->size_id }}]" class="form-control" type="text" placeholder="Preço" required="">
                                <p class="help-block">Preço Tamanho {{ $size->size->name }}</p>
                            </div>
                        </div>
                    @endforeach
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
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/flavour.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
