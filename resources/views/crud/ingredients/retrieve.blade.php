@extends('layouts.app')

@section('content')
<div class='container'>
    <script src='/js/ingredient.js'></script>
    <form id='form-retrieve' class='form-horizontal' action='{{ route("admin.ingredient.retrieve") }}' method='post'>
        <fieldset>

            <!-- Form Name -->
            <legend>Listar Ingredientes</legend>
            <!-- Search input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome do ingrediente</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="name" value="{{ $name }}" name="name" type="search" placeholder="Nome do sabor" class="form-control input-md">
                        <span class="input-group-btn">
                            <a id="search" class='btn btn-small btn-primary' href='#' title='Pesquisar'><span class="glyphicon glyphicon-search"></span></a>
                            <a id="new_ingredient" class='btn btn-small btn-success' href='{{ action("IngredientController@add") }}' title='Formulário de inclusão'><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </fieldset>
        <input type='hidden' name='_token' value='{{{ csrf_token() }}}'>
    </form>
    @if(count($ingredient_retrieve) == 0)
        <div class="alert alert-info" role="alert">Nenhum sabor encontrado com a sua pesquisa.</div>
    @else
        <table class='table table-bordered table-hover table-striped'>
            <tr>
                <td>Nome sabor</td>
                <td>Açoes</td>
            </tr>
            @foreach ($ingredient_retrieve as $ingredient)
                <tr>
                    <td> {{ $ingredient->name }} </td>
                    <td>
                        <a class='btn btn-small btn-primary' href='{{ route("admin.ingredient.edit", $ingredient->id) }}' title='Editar {{ $ingredient->name }}'>
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class='btn btn-small btn-danger' href='{{ route("admin.ingredient.delete", $ingredient->id) }}' title='Excluir {{ $ingredient->name }}'>
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/ingredient.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
