@extends('layouts.app')

@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Carrinho
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        @if($orders->count())
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Data</th>
                                        <th>Pessoa</th>
                                        <th>Qtd Itens</th>
                                        <th>Valor</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $item)
                                        <script>
                                            var data = typeof data == "undefined" ? {} : data;
                                            data[{{ $item->id }}] = ({!! json_encode($item->data) !!});
                                        </script>
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                                {{ \App\Helpers::dataBR($item->created_at) }}
                                            </td>
                                            <td>
                                                {{ $item->person->name }}
                                            </td>
                                            <td>
                                                {{ count((array) $item->data) }}
                                            </td>
                                            <td>
                                                {{ \App\Helpers::floatParaDinheiro($item->value) }}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info visibility" data-id="{{ $item->id }}" title="Ver itens">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class='alert alert-info'>
                                Nenhum pedido encontrado.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
<script>
    $(() => {
        $('.visibility').click(function() {
            var id = $(this).data("id");
            var order_data = data[id];

            swal({
            //    html: 
            });
        });
    });
</script>
@endpush