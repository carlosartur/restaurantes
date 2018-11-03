@extends('layouts.app')

@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pedido - {{ session()->get('person')['person']['name'] }}
                </h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <form class="form-horizontal" method='post' action='{{ route("admin.step3") }}'>
                        {{ csrf_field() }}
                        @if (count($errors) > 0 )
                            <div class='alert alert-danger'>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                <b>Selecione uma categoria</b>
                            </p>
                            <select id="categories" name="categories" class="form-control show-tick" data-live-search="true">
                                <option value="">Selecione uma categoria</option>
                                @foreach ($categories as $key => $category)
                                    @if(!$category->categoriesSon || $category->additional)
                                        @php continue; @endphp
                                    @endif
                                    <optgroup label="{{ $category->name }}">
                                        @foreach($category->categoriesSon as $cat_son)
                                            <option value="{{ $cat_son->id }}" {{ $cat_son->id == old('categories') ? 'selected' : '' }}>{{ $cat_son->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="sizes_div"></div>
                        </div>
                        <div id="flavours_div"></div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success waves-effect control-label">Ok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Carrinho
                </h2>
            </div>
            <form class="form-horizontal" method='post' action='{{ route("admin.order_ok") }}'>
                <div class="body">
                    <div class="row clearfix">
                        {{ csrf_field() }}
                        @php
                            $total = 0;
                            $count = 0;
                            $items = session()->get('items');
                        @endphp
                        @if(is_iterable($items))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tamanho</th>
                                        <th>Sabores</th>
                                        <th>Valor</th>
                                        <th>Borda/Massa/Adicionais</th>
                                        <th>Ações</th>
                                    </tr>
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
                                                @foreach ($item['additionals'] as $item2)
                                                    {{ $item2['category']->name }} | Sabor : {{ $item2['flavour']->name }}<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="delete" data-name="{{ $key }}" data-url="{{ action("SizeController@delete", $key) }}" style="cursor: pointer;">
                                                    <a href="{{ route('admin.remove_cart_item', $key) }}" id="submit" name="submit" class="btn btn-danger">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </span>
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
                                Carrinho vazio.
                            </div>
                        @endif
                    </div>

                    <div class="row clearfix">
                        <div class="col-xs-6">
                            <a href="{{ route('admin.restartOrder') }}" id="submit" name="submit" class="btn btn-danger">Recomeçar pedido</a>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-success waves-effect">Ok</button>
                        </div>
                    </div>
                </div>
                <input id="route_category" type="hidden" value="{{ route('admin.category.getSizesPrices') }}">
                <input id="route_flavours" type="hidden" value="{{ route('admin.step2') }}">
            </form>
        </div>
    </div>
</div>
@endsection

@push('style')
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="{{ url("/js/order.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <script>
        @if(!session()->get('person'))
            location.href = "{{ route('admin.order_person') }}";
        @endif
        // $(".flavour_select").multiselect({
        //     buttonText: function (options, select) {
        //         switch (options.length) {
        //             case 0:
        //                 return 'Selecione um sabor';
        //             case 1:
        //                 return options.html();
        //             default:
        //                 return `${options.length} sabores`;
        //         }
        //     },
        //     filterPlaceholder: 'Busca',
        //     enableFiltering: true,
        //     enableCaseInsensitiveFiltering: true,
        //     includeSelectAllOption: false,
        //     maxHeight: 400,
        //     buttonWidth: '400px',
        //     templates: templates_multiselect
        // });
    </script>
@endpush
