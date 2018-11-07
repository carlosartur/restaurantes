@extends('layouts.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Adicionar Ingrediente
                    </h2>
                </div>
                <form id='form-retrieve' class='form-horizontal' action='{{ action("IngredientController@save") }}' method='post'>
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
                                        <input  type="text" id="name" name="name" class="form-control date" placeholder="Nome do Ingrediente" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button class="btn btn-success waves-effect control-label">Ok</button>
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
    
    <script>
        $(() => {
            $("#additional").click(function() {
                if($("#additional").is(':checked')) {
                    $("#categories_div").show();
                } else {
                    $("#categories_div").hide();
                }
            });
        });
    </script>
@endpush
