@extends('layouts.app')

@section('content')
<div class='container'>
    <form id='form-retrieve' class='form-horizontal' action='{{ action("SizeController@index") }}' method='post'>
        <fieldset>
            <!-- Form Name -->
            <legend>Listar tamanhos</legend>
            <!-- Search input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome do tamanho</label>
                <div class="col-md-4">
                <div class="input-group">
                    <input id="name" value="{{ old('name') }}" name="name" type="search" placeholder="Nome da tamanho" class="form-control input-md">
                        <span class="input-group-btn">
                        <a id="search" class='btn btn-small btn-primary' href='#' title='Pesquisar'><span class="glyphicon glyphicon-search"></span></a>
                        <a id="new_size" class='btn btn-small btn-success' href='{{ action("SizeController@add") }}' title='Formulário de inclusão'><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
            </div>
        </fieldset>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    </form>
    @if(count($size_retrieve) == 0)
        <div class="alert alert-info" role="alert">Nenhum tamanho encontrado com a sua pesquisa.</div>
    @else
        <table class='table table-bordered table-hover table-striped'>
            <tr>
                <td>Nome tamanho</td>
                <td>Sabores por unidade</td>
                <td>Pedaços</td>
                <td>Açoes</td>
            </tr>
            @foreach ($size_retrieve as $size)
                <tr>
                    <td> {{ $size->name }} </td>
                    <td> {{ $size->flavours }} </td>
                    <td> {{ $size->slices }} </td>
                    <td>
                        <a class='btn btn-small btn-primary' href='{{ action("SizeController@edit", $size->id) }}' title='Editar {{ $size->name }}'>
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class='btn btn-small btn-danger' href='#' value='{{ action("SizeController@delete", $size->id) }}' title='Excluir {{ $size->name }}'>
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
