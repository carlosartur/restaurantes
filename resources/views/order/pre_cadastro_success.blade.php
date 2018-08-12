@extends('layouts.app2')

@section('content')
<div class='container'>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Cadastrar pessoa/endereco</div>
            <div class="panel-body">
                <div class="alert alert-sucess">
                    Bem vindo(a) {{ $person->name }}.<br>
                    Você pode agora aproveitar nossas promoçoes. Acesse <a target="_blank" href="http://www.cheffdapizza.com.br/">aqui</a> para poder ver nossas ofertas imperdíveis.<br>
                    Agradecemos a preferencia<br>
                    Equipe da Cheffdapizza<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
