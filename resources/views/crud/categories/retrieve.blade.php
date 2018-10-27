@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Buscar categorias
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <form id='form-retrieve' class='form-horizontal' action='{{ action("CategoryController@retrieve") }}' method='post'>
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="search" id="name" value="{{ $name }}" name="name" class="form-control date" placeholder="Nome categoria">
                                    </div>
                                    <span class="input-group-addon" style="cursor: pointer;" id="search">
                                        <i class="material-icons">search</i>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if(count($category_retrieve) == 0)
                        <div class="alert alert-info" role="alert">Nenhuma tipo de produto encontrado com a sua pesquisa.</div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome tipo de produto</th>
                                    <th>Açoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category_retrieve as $category)
                                    <tr>
                                        <td> {{ $category->name }} </td>
                                        <td>
                                            <span onclick="window.location.href='{{ action('CategoryController@edit', $category->id) }}';" style="cursor: pointer;">
                                                <i class="material-icons">mode_edit</i>
                                            </span>
                                            <span class="delete" data-name="{{ $category->name }}" data-url="{{ action("CategoryController@delete", $category->id) }}" style="cursor: pointer;">
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
        });
    </script>
@endpush