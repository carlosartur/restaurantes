@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Pizza Tamanho {{ $size->name }} | Sabores {{ implode(', ', $flavours->pluck('name')->all()) }} | Preço {{ number_format($prize, 2, ',', '') }}</div>
        <form class="form-horizontal" method='post' action='{{ route("admin.order_ok") }}'>

            <div class="panel-body">
                <fieldset>
                    {{ csrf_field() }}
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
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome da pessoa" required="">
                            <p class="help-block">Nome da pessoa.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Endereco</label>
                        <div class="col-md-4">
                            <input id="address" value="{{ old('address') }}" name="address" class="form-control" type="text" placeholder="Endereco" required="">
                            <p class="help-block">Endereco da pessoa.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Bairro</label>
                        <div class="col-md-4">
                            <input id="neighborhood" value="{{ old('neighborhood') }}" name="neighborhood" class="form-control" type="text" placeholder="Bairro" required="">
                            <p class="help-block">Bairro</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Cidade</label>
                        <div class="col-md-4">
                            <input id="city" value="{{ old('city') }}" name="city" class="form-control" type="text" placeholder="Cidade" required="">
                            <p class="help-block">Cidade</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">CEP</label>
                        <div class="col-md-4">
                            <input id="shipcode" value="{{ old('shipcode') }}" name="shipcode" class="form-control" type="text" placeholder="CEP" required="">
                            <p class="help-block">CEP</p>
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" name="size" value="{{ $size->id }}">
                @foreach($flavours as $flavour)
                    <input type="hidden" name="flavour[]" value="{{ $flavour->id }}">
                @endforeach
            </div>
            <div class="panel-footer">
                <div class="form-group text-right">
                    <div class="col-xs-12">
                        <button id="submit" name="submit" class="btn btn-success control-label">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/flavour.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
    <script>
        $(function() {
            $('#name').autocomplete({
                minLength: 4,
    			autoFocus: true,
    			delay: 300,
    			position: {
    				my: 'left top',
    				at: 'right top'
    			},
                source: function() {
                    return ['Carlos'];
                }
            });
        });
    </script>
@endpush
