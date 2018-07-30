@extends('layouts.app')

@section('content')
<div class='container'>
    <form id='form-retrieve' class='form-horizontal' action='{{ action("CategoryController@retrieve") }}' method='post'>
        <fieldset>
            <!-- Form Name -->
            <legend>Listar combos</legend>

            <!-- Search input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome do combo</label>
                <div class="col-md-4">
                <div class="input-group">
                    <input id="name" value="{{ old('name') }}" name="name" type="search" placeholder="Nome do combo" class="form-control input-md">
                        <span class="input-group-btn">
                        <a id="search" class='btn btn-small btn-primary' href='#' title='Pesquisar'><span class="glyphicon glyphicon-search"></span></a>
                        <a id="new_category" class='btn btn-small btn-success' href='{{ route("admin.combo.add") }}' title='Formulário de inclusão'><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
            </div>
        </fieldset>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    </form>
    @if(count($combos) == 0)
        <div class="alert alert-info" role="alert">Nenhum combo encontrado com a sua pesquisa.</div>
    @else
        <table class='table table-bordered table-hover table-striped'>
            <tr>
                <td>Nome do combo</td>
                <td>Valor</td>
                <td>Valor sem desconto</td>
                <td>Descontos</td>
                <td>Açoes</td>
            </tr>
            @foreach ($combos as $combo)
                <tr>
                    <td> {{ $combo->name }} </td>
                    <td> R$ {{ number_format($combo->value, 2, ',', '.') }} </td>
                    <td> R$ {{ number_format($combo->originalValue(), 2, ',', '.') }} </td>
                    <td> {{ $combo->discount }} %</td>
                    <td>
                        <a class='btn btn-small btn-primary' href='{{ route("admin.combo.edit", $combo->id) }}' title='Editar {{ $combo->name }}'>
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class='btn btn-small btn-danger' href='#' value='{{ route("admin.combo.delete", $combo->id) }}' title='Excluir {{ $combo->name }}'>
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
