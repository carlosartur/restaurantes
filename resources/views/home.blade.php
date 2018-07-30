@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Visitas</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>
                                Data
                            </th>
                            <th>
                                Numero de visitas
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($Visits as $Visit)
                                <tr>
                                    <td>
                                        @php
                                            $test = new DateTime($Visit->data);
                                        @endphp
                                        {{ date_format($test, 'd/m/Y') }}
                                    </td>
                                    <td>
                                        {{ $Visit->visitas }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <!-- Scripts da página -->
    <script>
        var visits = {!! json_encode([
            'visitas' => $Visits->map(function (&$item) {
                $item->time = strtotime($item->data);
                return $item;
            })
        ]) !!};
    </script>
@endpush
