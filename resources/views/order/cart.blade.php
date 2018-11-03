@extends('layouts.app')

@section('content')
    <div class='container'>
        <form class="form-horizontal" method='post' action='{{ route("admin.order_person") }}'>
            {{ csrf_field() }}
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Carrinho</div>
                <div class="panel-body">
                    <!-- Form Name -->
                    <!-- Appended checkbox -->
                    @if (count($errors) > 0 )
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @php
                        $total = 0;
                        $count = 0;
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
                            <a class="btn btn-warning control-label" href="{{ route("admin.startOrder") }}">Adicionar mais um produto</a>
                            <button id="submit" name="submit" class="btn btn-success waves-effect control-label">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

