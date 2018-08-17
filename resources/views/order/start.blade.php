@extends('layouts.app')

@section('content')
<div style="padding-left: 2%; padding-right: 2%;">
    <div class="col-md-6">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Pedido - {{ session()->get('person')['person']['name'] }}</div>
            <form class="form-horizontal" method='post' action='{{ route("admin.step3") }}'>
                <div class="panel-body">
                    <fieldset>
                        {{ csrf_field() }}
                        @if (count($errors) > 0 )
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-md-4" for="categories">Tipo de produto</label>
                            <div class="col-md-4">
                                <select id="categories" name="categories" class="form-control input">
                                    <option value="">Selecione um tipo de produto</option>
                                    @foreach ($categories as $key => $value)
                                        @php 
                                            if($value->category_id) {
                                                continue;
                                            }
                                        @endphp
                                        <option value="{{ $value->id }}" {{ $value->id == old('size') ? 'selected' : '' }}>{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block">tipo de produto.</p>
                            </div>
                        </div>
                        <div id="sizes_div"></div>
                        <div id="flavours_div"></div>
                    </fieldset>
                </div>
                <div class="panel-footer">
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-success">Ok</button>
                        </div>
                    </div>
                </div>
                <input id="route_category" type="hidden" value="{{ route('admin.category.getSizesPrices') }}">
                <input id="route_flavours" type="hidden" value="{{ route('admin.step2') }}">
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <form class="form-horizontal" method='post' action='{{ route("admin.order_ok") }}'>
            {{ csrf_field() }}
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Carrinho</div>
                <div class="panel-body">
                    @php
                        $total = 0;
                        $count = 0;
                        $items = session()->get('items');
                    @endphp
                    @if(is_iterable($items))
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <th>Tamanho</th>
                                <th>Sabores</th>
                                <th>Valor</th>
                                <th>Ações</th>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <td>
                                            {{ $item['size']->name }}
                                        </td>
                                        <td>
                                            {{ implode(', ', $item['flavours']->pluck('name')->all()) }}
                                        </td>
                                        <td>
                                            {{ number_format($item['prize'], 2, ',', '.') }}
                                        </td>
                                        <td>
                                            <div class="form-group text-right">
                                                <div class="col-xs-12">
                                                    <a href="{{ route('admin.remove_cart_item', $key) }}" id="submit" name="submit" class="btn btn-warning control-label">Remover</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $total += $item['prize'];
                                        $count++;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td>
                                        TOTAIS
                                    </td>
                                    <td>
                                        {{ $count }} itens
                                    </td>
                                    <td>
                                        {{ number_format($total, 2, ',', '.') }}
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div class='alert alert-info'>
                            <ul>
                                <li>Carrinho vazio.</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="panel-footer">
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-success">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/order.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
    <script>
        $(".flavour_select").multiselect({
            buttonText: function (options, select) {
                switch (options.length) {
                    case 0:
                        return 'Selecione um sabor';
                    case 1:
                        return options.html();
                    default:
                        return `${options.length} sabores`;
                }
            },
            filterPlaceholder: 'Busca',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            includeSelectAllOption: false,
            maxHeight: 400,
            buttonWidth: '400px',
            templates: templates_multiselect
        });
    </script>
@endpush
