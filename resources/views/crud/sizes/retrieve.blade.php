@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Buscar tamanhos
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <form id='form-retrieve' class='form-horizontal' action='{{ action("SizeController@index") }}' method='post'>
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="search" id="name" value="{{ old('name') }}" name="name" class="form-control date" placeholder="Nome tamanho">
                                    </div>
                                    <span class="input-group-addon" style="cursor: pointer;" id="search">
                                        <i class="material-icons">search</i>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if(count($size_retrieve) == 0)
                        <div class="alert alert-info" role="alert">Nenhum tamanho encontrado com a sua pesquisa.</div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome tamanho</th>
                                    <th>Açoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($size_retrieve as $size)
                                    <tr>
                                        <td> {{ $size->name }} </td>
                                        <td>
                                            <span onclick="window.location.href='{{ action('SizeController@edit', $size->id) }}';" style="cursor: pointer;">
                                                <i class="material-icons">mode_edit</i>
                                            </span>
                                            <span class="delete" data-name="{{ $size->name }}" data-url="{{ action("SizeController@delete", $size->id) }}" style="cursor: pointer;">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script>
        $(() => {
            $(".delete").click(function() {
                confirm_delete($(this).data('name'), $(this).data('url'));
            });
            $("#search").click(() => {
                $("#form-retrieve").submit();
            });
        });
    </script>
@endpush

