<html>
    <head>
    </head>
    <body>
        <div>
            Pedido nº {{ $order->id }}<br>
            Valor: {{ number_format($order->value, 2, ',', '.') }}<br>
            <hr>
            Pessoa: {{ $person->name }}<br>
            Endereco: {{ $address->address }}<br>
            Bairro: {{ $address->neighborhood }}<br>
            Cidade: {{ $address->city }}<br>
            CEP: {{ $address->shipcode }}<br>
            <hr>
            Itens<br>
            <table>
                <tr>
                    <td>
                        Tamanho
                    </td>
                    <td>
                        Sabores
                    </td>
                </tr>
                @foreach($OrderItemsList as $item)
                    <tr>
                        <td>
                            {{ $item['size']->name }}
                        </td>
                        <td>
                            {{ $item['item']->flavours }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>