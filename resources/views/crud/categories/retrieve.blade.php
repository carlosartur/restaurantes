@extends('layouts.app')

@section('content')
<div class='container'>
    <form id='form-retrieve' class='form-horizontal' action='{{ action("CategoryController@retrieve") }}' method='post'>
        <fieldset>
            <!-- Form Name -->
            <legend>Listar categorias</legend>

            <!-- Search input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome da categoria</label>
                <div class="col-md-4">
                <div class="input-group">
                    <input id="name" value="{{ $name }}" name="name" type="search" placeholder="Nome da categoria" class="form-control input-md">
                        <span class="input-group-btn">
                        <a id="search" class='btn btn-small btn-primary' href='#' title='Pesquisar'><span class="glyphicon glyphicon-search"></span></a>
                        <a id="new_category" class='btn btn-small btn-success' href='{{ action("CategoryController@add") }}' title='Formulário de inclusão'><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
            </div>
        </fieldset>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    </form>
    @if(count($category_retrieve) == 0)
        <div class="alert alert-info" role="alert">Nenhuma categoria encontrado com a sua pesquisa.</div>
    @else
        <table class='table table-bordered table-hover table-striped'>
            <tr>
                <td>Nome categoria</td>
                <td>Açoes</td>
            </tr>
            @foreach ($category_retrieve as $category)
                <tr>
                    <td> {{ $category->name }} </td>
                    <td>
                        <a class='btn btn-small btn-primary' href='{{ action("CategoryController@edit", $category->id) }}' title='Editar {{ $category->name }}'>
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class='btn btn-small btn-danger' href='#' value='{{ action("CategoryController@delete", $category->id) }}' title='Excluir {{ $category->name }}'>
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
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
