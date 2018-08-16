@extends('layouts.app2')

@section('content')
    <style>
        tr:nth-child(even){background-color: #f2f2f2 !important;}
        th, td {
            padding: 15px !important;
            text-align: left !important;
        }
    </style>
    <div class='container'>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Meus cadastros</div>
                <div class="panel-body" style="opacity: 0.95; color: #440615; background-color: white;">
                    <table id="customers" style="border-bottom: 1px solid #ddd !important; width:100%;">
                        <tr style="border-bottom: 1px solid #ddd !important;">
                            <th>Nome</th>
                            <th>Bairro</th>
                        </tr>
                        @php $count = 0; @endphp
                        @foreach ($people as $person)
                            <tr style="border-bottom: 1px solid #ddd !important; background-color: {{ (++$count % 2) !== 0 ? '#f5f5f5' : '#FFFFFF'  }} !important;">
                                <td>{{ $person->name }}</td>
                                <td>{{ $person->address->neighborhood }}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
