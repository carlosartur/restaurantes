@extends('layouts.app')

@php
    $categories_selected = $Size->categories->pluck('id')->all();
@endphp

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Editar tamanho
                    </h2>
                </div>
                <form id='form-retrieve' class='form-horizontal' action='{{ action("SizeController@save", $Size->id) }}' method='post'>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                {{ csrf_field() }}
                                @if (count($errors) > 0 )
                                    <div class='alert alert-danger'>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <p>
                                    <b>Nome</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input  type="text" value="{{ $Size->name }}" id="name" name="name" class="form-control date" placeholder="Nome tamanho" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <p>
                                    <b>Fatias/Porções</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input value="{{ $Size->slices }}" type="number" min="1" step="1" name="slices" id="slices" class="form-control date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>
                                    <b>Sabores</b>&nbsp;<small>Sabores diferentes que o tamanho permite.</small>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input value="{{ $Size->flavours }}" type="number" min="1" step="1" name="flavours" id="flavours" class="form-control date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <p>
                                    <b>Categoria</b>
                                </p>
                                <select name="category[]" id="category" class="form-control show-tick" multiple required>
                                    <option value="">Selecione uma opção</option>
                                    @foreach($Categories as $Category)
                                        <option value="{{ $Category->id }}" {{ in_array($Category->id, $categories_selected) ? 'selected' : '' }}>
                                            {{ $Category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            @foreach($Categories as $Category)
                                <div class="col-md-4 category_values" id="values_{{ $Category->id }}" {!! in_array($Category->id, $categories_selected) ? '' : 'style="display: none"' !!}>
                                    <p>
                                        <b>Valor para categoria {{ $Category->name }}</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input {!! in_array($Category->id, $categories_selected) 
                                                ? 'value="' . (\App\Helpers::floatParaDinheiro($Size->categories->where('id', $Category->id)->first()->pivot->value)) . '"' 
                                                : "" !!} id="values_input_{{ $Category->id }}" type="text" name="values[{{ $Category->id }}]" class="form-control date coin" placeholder="Valor para categoria {{ $Category->name }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-3">
                                <button class="btn btn-success control-label">Ok</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ url("/js/script.js") }}"></script>
    {{-- <script src="{{ url("/js/sizes.js") }}"></script> --}}

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>

    <script src="{{ assert('/js/sizes.js') }}"></script>
@endpush
