@extends('layouts.app2')

@section('content')
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class='container'>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Bem vindo(a) {{ $person->name }}</div>
                <div class="panel-body" style="opacity: 0.95; color: #440615; background-color: white;">
                    <div class="alert alert-sucess">
                        <h1><strong><center>Termos e condições!</center></strong></h1>
                        Ótimo, a partir de agora, 3 vezes por semana até 31/08/18 será sorteado um Detetive da PIZZA!! <br>
                        Entregaremos a PIZZA inteiramente Grátis, os sorteados deverão fazer uma avaliação de nossos serviços e produtos, realizando uma verdadeira investigação, para ajudar a encontrarmos possíveis falhas no processo.<br>
                        O Cadastro para ser validado deverá: 
                        <ul>
                            <li>
                                Ser preenchido corretamente. 
                            </li>
                            <li>
                                Curtir e Compartilhar a Página do facebook com 4 amigos.
                            </li>
                        </ul>
                        <small>
                            Período da Promoção de 15/08 até 30/09/2018 <br>
                            Os sorteados que são fora do raio de entrega deverá retirar a pizza no local.
                        </small>
                        <center>
                            <div class="form-group col-xs-12">   
                                <div class="fb-posicao">
                                <div class="fb-page" data-href="https://www.facebook.com/maiorpizza" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/maiorpizza" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/maiorpizza">CHEFF DA PIZZA</a></blockquote></div>
                            <p class="help-block" style="color: red;"><b>CURTA NOSSA PÁGINA!</b></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
