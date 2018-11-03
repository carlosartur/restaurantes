@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar combo</div>
        <form enctype="multipart/form-data" class="form-horizontal" method='post' action='{{ route("admin.combo.save") }}'>
            <fieldset>
                <div class="panel-body">
                    {{ csrf_field() }}
                    <!-- Appended checkbox -->
                    @if(count($errors) > 0)
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
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome do combo">
                            <p class="help-block">Nome do combo.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Desconto</label>
                        <div class="col-md-4">
                            <input id="discount" value="{{ old('discount') }}" min='0' max='100' step='1' name="discount" class="form-control" type="number" placeholder="Desconto do combo" required="">
                            <p class="help-block">Desconto em porcentual</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Valor</label>
                        <div class="col-md-4">
                            <input id="value" readonly="" value="{{ old('value') }}" name="value" class="form-control" type="text" placeholder="Valor do combo" required="">
                            <input id="ids" readonly="" value="{{ old('ids') }}" name="ids" class="form-control" type="hidden">
                            <p class="help-block">Valor total</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="name">Foto</label>
                        <div class="col-md-4">
                            <label for="img" class="form-control">Escolher arquivo</label>
                            <input id="img" name="img" class="form-control" type="file" required="" style="display:none;">
                            <p class="help-block">Foto promocional</p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button id="submit" name="submit" class="btn btn-success waves-effect control-label">Ok</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Sabores</div>
        @include('crud.combos.services')
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/script.js") }}"></script>
    <script src="{{ url("/js/combos.js") }}"></script>
@endpush
