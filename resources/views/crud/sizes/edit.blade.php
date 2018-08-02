@extends('layouts.app')
@php
    $categories_selected = $Size->categories->pluck('id')->all();
@endphp
@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Editar tamanho</div>
        <form class="form-horizontal" method='post' action='{{ action("SizeController@save", $Size->id) }}'>
            <fieldset>
                <div class="panel-body" id="form_size">
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
                            <input value="{{ $Size->name }}" type="text" name="name" id="name" required="" class="form-control">
                            <p class="help-block">Nome do tamanho.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Fatias</label>
                        <div class="col-md-4">
                            <input value="{{ $Size->slices }}" type="number" name="slices" id="slices" required="" class="form-control input-md">
                            <p class="help-block">Fatias.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Sabores</label>
                        <div class="col-md-4">
                            <input value="{{ $Size->flavours }}" type="number" name="flavours" id="flavours" required="" class="form-control input-md" >
                            <p class="help-block">Sabores.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="categories">Categorias deste tamanho</label>
                        <div class="col-md-4">
                            <select name="categories[]" multiple="" id="categories" class="form-control input-md">
                                @foreach($Categories as $Category)
                                    <option {{ in_array($Category->id, $categories_selected) ? 'selected' : '' }} value="{{ $Category->id }}">
                                        {{ $Category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="help-block">Categorias.</p>
                        </div>
                    </div>
                    @foreach ($Size->categories as $category)
                        <div class="form-group col-xs-12" id="div_{{ $category->id }}">
                            <label class="col-md-4 control-label" for="flavours">Valor para categoria {{ $category->name }}</label>
                            <div class="col-md-4">
                                <input type="number" min="0" value="{{ $category->pivot->value }}" step=".01" name="values[{{ $category->id }}]" id="values_{{ $category->id }}" required="" class="form-control input-md">
                                <p class="help-block">Valor para categoria {{ $category->name }}</p>
                            </div>
                        </div>
                    @endforeach
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
@endpush
