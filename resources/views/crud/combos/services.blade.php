<div class="panel-body">
    @if(count($flavour_retrieve) == 0)
        <div class="alert alert-info" role="alert">Nenhum sabor encontrado com a sua pesquisa.</div>
    @else
        <div class="alert alert-info" role="alert">Valor promocional não será utilizado no cálculo do valor do combo. O valor utilizado será o valor normal. Está listado apenas para ilustrar</div>
        @foreach ($flavour_retrieve as $key => $category)
            @php
                $id = str_replace(' ', '_', $key);
            @endphp
            <hr>
            {{ $key }}
            <table class="table table-striped">
                <thead>
                    <th>Usar no combo</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Valor promocional</th>
                </thead>
                @foreach ($category as $flavour)
                    <tr>
                        <td><input type="checkbox" value="{{ $flavour->id }}" data-value="{{ $flavour->old_value }}" class="add_flavour"/></td>
                        <td> {{ $flavour->name }} </td>
                        <td> {{ number_format($flavour->old_value, 2, ',', '.') }} </td>
                        <td>
                            @if ($flavour->new_value)
                                {{ number_format($flavour->new_value, 2, ',', '.') }}
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @endforeach
    @endif
</div>
