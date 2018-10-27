@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Editar sabor
                    </h2>
                </div>
                <form id='form-retrieve' class='form-horizontal' action='{{ action("FlavourController@save", $Flavour->id) }}' method='post'>
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
                                        <input value="{{ $Flavour->name }}" type="text" id="name" name="name" class="form-control date" placeholder="Nome sabor" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <p>
                                    <b>Categoria</b>
                                </p>
                                <select name="category" id="category" class="form-control show-tick">
                                    <option value="">Selecione uma opção</option>
                                    @foreach ($Categories as $key => $category)
                                        <option value="{{ $category->id }}" {{ ($category->id == old('category') || $category->id == $Flavour->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <p>
                                    <b>Valor</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input value="{{ \App\Helpers::floatParaDinheiro($Flavour->new_value) }}" type="text" id="new_value" name="new_value" class="form-control date coin" placeholder="Valor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>
                                    <b>Valor antigo(mostrar em promoções)</b>
                                </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input value="{{ \App\Helpers::floatParaDinheiro($Flavour->old_value) }}" type="text" id="old_value" name="old_value" class="form-control date coin" placeholder="Valor antigo" required>
                                    </div>
                                </div>
                            </div>

                            @foreach($Sizes as $size)
                                <div class="col-md-4">
                                    <p>
                                        <b>Valor para tamanho {{ $size->name }}</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                        <input name="value_size[{{ $size->size_id }}]" value="{{ \App\Helpers::floatParaDinheiro($size->value) }}" type="text" class="form-control date coin" placeholder="Valor {{ $size->name }}" required>
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script> --}}
@endpush

