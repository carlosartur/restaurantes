@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Adicionar categoria</div>
        <form class="form-horizontal" method='post' action='{{ action("CategoryController@save") }}'>
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
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nome da categoria" required="">
                            <p class="help-block">Nome da categoria.</p>
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
@endpush
