@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Selecione os sabores</div>
        <form class="form-horizontal" method='post' action='{{ route("admin.step3") }}'>
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
                    @for ($i = 0; $i < $size->flavours; $i++)
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="flavour">Sabor {{ $i + 1 }}</label>
                            <div class="col-md-4">
                                <select id="flavour" name="flavour[]" class="form-control input">
                                    <option value="">Selecione um sabor</option>
                                    @foreach ($flavours as $key => $value)
                                        <option value="{{ $value->id }}" {{ $value->id == old('flavour') ? 'selected' : '' }}>{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block">Sabor {{ $i + 1 }}</p>
                            </div>
                        </div>
                    @endfor
                </fieldset>
                <input type="hidden" name="size" value="{{ $size->id }}">
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
@endpush
