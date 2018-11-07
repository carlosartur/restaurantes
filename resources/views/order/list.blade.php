@extends('layouts.app')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Pedidos
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        @if($orders->count())
                            <table class="table" id="order_table">
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
                            {{ $orders->onEachSide(5)->links() }}
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
<script src="{{ asset("/js/script.js") }}"></script>
<script>
    $(() => {
        $('.visibility').click(function() {
            var id = $(this).data("id");
            var order_data = data[id];
            var table = new HtmlElement('table');
            var lines = [];
            for (var i in order_data) {
                lines.push((new HtmlElement('tr')).appendChildren([
                    (new HtmlElement('td')).html(order_data[i].hasOwnProperty('category') && order_data[i].category.hasOwnProperty('name') ? order_data[i].category.name : '-'),
                    (new HtmlElement('td')).html(order_data[i].hasOwnProperty('size') && order_data[i].size.hasOwnProperty('name') ? order_data[i].size.name : '-'),
                    (new HtmlElement('td')).html(order_data[i].flavours.map((item) => { return item.hasOwnProperty('name') ? item.name : '-'; }).join(' - ')),
                    (new HtmlElement('td')).html(order_data[i].hasOwnProperty('excluded_ingredients') && order_data[i].hasOwnProperty('excluded_ingredients') ? order_data[i].excluded_ingredients.join(' - <wbr>') : '-'),
                    (new HtmlElement('td')).html(formataDinheiro(order_data[i].prize))
                ]));
            }
            table.appendChildren([
                (new HtmlElement('thead')).appendChildren([
                    (new HtmlElement('th')).html('Categoria'),
                    (new HtmlElement('th')).html('Tamanho'),
                    (new HtmlElement('th')).html('Sabor'),
                    (new HtmlElement('th')).html('Sem'),
                    (new HtmlElement('th')).html('Valor')
                ]),
                (new HtmlElement('tbody')).appendChildren(lines)
            ]).setClasses(['table']);
            swal({
                width: 600,
                html: String(table)
            });
        });
    });
</script>
@endpush