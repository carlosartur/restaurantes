<html>
    <head>
    </head>
    <body>
        <div>
            Pedido nº {{ $order->id }}<br>
            Valor: {{ number_format($order->value, 2, ',', '.') }}<br>
            <hr>
            Pessoa: {{ $person->name }}<br>
            Preferencias: {{ $person->preferences }}<br>
            Telefone: {{ $person->phone }}<br>
            Endereco: {{ $address->address }}<br>
            Bairro: {{ $address->neighborhood }}<br>
            Cidade: {{ $address->city }}<br>
            CEP: {{ $address->shipcode }}<br>
            Referência: {{ $address->reference }}<br>
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
                    <td>
                        Não colocar
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
                        <td>
                            {{ implode(', ', $item['excluded_ingredients']) }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>