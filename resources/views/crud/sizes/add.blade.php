@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar Tamanho</div>
        <form class="form-horizontal" method='post' action='{{ action("SizeController@save") }}'>
            <fieldset>
                <div class="panel-body" id="form_size">
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
                            <input value="{{ old("name") }}" type="text" name="name" id="name" required="" class="form-control">
                            <p class="help-block">Nome do tamanho.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="slices">Fatias</label>
                        <div class="col-md-4">
                            <input value="{{ old("slices") ?? 1 }}" type="number" min="1" step="1" name="slices" id="slices" required="" class="form-control input-md">
                            <p class="help-block">Fatias.</p>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="flavours">Sabores</label>
                        <div class="col-md-4">
                            <input value="{{ old("flavours") ?? 1 }}" type="number" min="1" step="1" name="flavours" id="flavours" required="" class="form-control input-md" >
                            <p class="help-block">Sabores.</p>
                        </div>
                    </div>                    
                    <div class="form-group col-xs-12">
                        <label class="col-md-4 control-label" for="categories">Tipo de produtos deste tamanho</label>
                        <div class="col-md-4">
                            <select name="categories[]" multiple="" id="categories" class="form-control input-md">
                                @foreach($Categories as $Category)
                                    <option value="{{ $Category->id }}">
                                        {{ $Category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="help-block">tipo de produtos.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button id="submit" name="submit" class="btn btn-success control-label">Ok</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ url("/js/script.js") }}"></script>
    <script src="{{ url("/js/sizes.js") }}"></script>
@endpush
