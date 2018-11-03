@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar ingrediente</div>
        <form class="form-horizontal" method='post' action='{{ action("IngredientController@save") }}'>
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
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Nome</label>
                        <div class="col-md-4">
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome do sabor" required="">
                            <p class="help-block">Nome do ingrediente.</p>
                        </div>
                    </div>
                    <span id="input_forms"><span>
                </fieldset>
            </div>
            <div class="panel-footer">
                <div class="form-group text-right">
                    <div class="col-xs-12">
                        <button id="submit" name="submit" class="btn btn-success waves-effect control-label">Ok</button>
                    </div>
                </div>
            </div>
            <input id="route" type="hidden" value="{{ route('admin.category.getSizesPrices') }}">
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ url("/js/ingredient.js") }}"></script>
    <script src="{{ url("/js/script.js") }}"></script>
@endpush
