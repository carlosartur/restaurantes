@extends('layouts.app')

@section('content')
<div class='container'>
    <script src='/js/flavour.js'></script>
    <form id='form-retrieve' class='form-horizontal' action='{{ route("admin.flavour.retrieve") }}' method='post'>
        <fieldset>

            <!-- Form Name -->
            <legend>Listar sabores</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">tipo de produto</label>
                <div class="col-md-4">
                    <input id="category" value="{{ $category }}" name="category" type="search" placeholder="tipo de produto" class="form-control input-md">
                </div>
            </div>

            <!-- Search input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome do sabor</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="name" value="{{ $name }}" name="name" type="search" placeholder="Nome do sabor" class="form-control input-md">
                        <span class="input-group-btn">
                            <a id="search" class='btn btn-small btn-primary' href='#' title='Pesquisar'><span class="glyphicon glyphicon-search"></span></a>
                            <a id="new_flavour" class='btn btn-small btn-success' href='{{ action("FlavourController@add") }}' title='Formulário de inclusão'><span class="glyphicon glyphicon-plus"></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </fieldset>
        <input type='hidden' name='_token' value='{{{ csrf_token() }}}'>
    </form>
    @if(count($flavour_retrieve) == 0)
        <div class="alert alert-info" role="alert">Nenhum sabor encontrado com a sua pesquisa.</div>
    @else
        <table class='table table-bordered table-hover table-striped'>
            <tr>
                <td>Nome sabor</td>
                <td>tipo de produto</td>
                <td>Valor</td>
                {{-- <td>Valor promocional</td> --}}
                <td>Açoes</td>
            </tr>
            @foreach ($flavour_retrieve as $flavour)
                <tr>
                    <td> {{ $flavour->name }} </td>
                    <td> {{ $flavour->category_name }} </td>
                    <td> 
                        @foreach ($flavour->flavour_size as $size)
                            {{ $size->size->name }} : R$ {{ number_format($size->value , 2 , ',' , '.' ) }} <br> 
                        @endforeach 
                    </td>
                    <td>
                        <a class='btn btn-small btn-primary' href='{{ route("admin.flavour.edit", $flavour->id) }}' title='Editar {{ $flavour->name }}'>
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class='btn btn-small btn-danger' href='#' value='{{ route("admin.flavour.delete", $flavour->id) }}' title='Excluir {{ $flavour->name }}'>
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
    <script src="{{ url("/js/flavour.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
