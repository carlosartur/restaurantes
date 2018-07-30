@extends('layouts.app')

@section('content')
    <div class='container'>
        <legend>Página não encontrada! :(</legend> <br>
        <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
    </div>
@endsection

@section('scripts')
    <script src="{{ url("/js/edit_home_page.js") }}"></script>
@endsection
