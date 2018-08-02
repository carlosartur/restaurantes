@extends('layouts.appFront')

@section('content')
<div class="container clearfix param_move">
        <section class="cont-left">

            <section class="banners-combo">

                <h3 class="tit-home">Combos</h3>
                <div class="box_combo  ">
                    <a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;2&quot;,&quot;data_hash&quot;:&quot;71ff61b9abf0fe8955b382fa40245fc3&quot;}"><img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/165/Expresso-Delivery_c8c11e7da4b05dfe55acd7eccd43c69e.png"> <span class="box_combo_nome">BIG Combo - Quinta-Feira </span>
                        <span class="box_combo_descricao">Pizza Grande c/ Borda Recheada + Pizza Broto Doce + Refrigerante 2 litros por apenas R$ 75,90 </span></a>
                </div>
                <div class="box_combo  ">
                    <a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;1&quot;,&quot;data_hash&quot;:&quot;4e69b89edaba36b478a0b70084bd5d84&quot;}"><img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/169/Expresso-Delivery_936ba2ba1412ecc00b25006204fd90d1.png"> <span class="box_combo_nome">Combo Trio Burgão </span><span class="box_combo_descricao">30% de Desconto em Qualquer Hambúrguer + Porção de Batata Média + Refrigerante Lata </span></a>
                </div>
            </section>

            <div class="item_e showsessao" id="grupo_sessao_1">
                <h3 class="tit-cont">Pizza</h3>
                <div class="select_box">
                    <span class="titulo_groupcattam">Tamanhos</span>
                    <select class="select_sessao" id="selccc_1" data-tipo="tamanho" data-codsessao="1">
                        <option value="3">Pizza Broto</option>
                        <option value="1">Pizza Média</option>
                        <option selected="" value="2">Pizza Grande</option>
                    </select>
                </div>
                <div class="listade_produtos">
                    <div class="lista_deabas">
                        <div class="aba_sessao  abbb_1 abaativa" data-codsessao="1" data-tipo="categoria" data-cod="1">Tradicionais</div>
                        <div class="aba_sessao abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="3">Especiais</div>
                        <div class="aba_sessao abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="2">Doces</div>
                    </div>
                    <div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;40&quot;,&quot;codtaman&quot;:&quot;1&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;98ac16c3a904ea3394880d06bcf56d1a&quot;}" data-montador="montarpizza" class="box-produto prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x1 clk_categoria_x3" title="Mexicana - (Ingredientes: Cebola, Molho, Orégano, Azeitonas, Mussarela, Calabresa Moída, Molho de Pimenta, Tomate Picado)" style="display: none;">
                        <div class="image-prod">
                            <div class="formapizza-lista">
                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/134/180/Expresso-Delivery_7c4e01b23ec688f6db2a3aee2ac4cc88.png" alt="Especiais: Mexicana - Pizza Média (Ingredientes: Cebola, Molho, Orégano, Azeitonas, Mussarela, Calabresa Moída, Molho de Pimenta, Tomate Picado)" title="MexicanaPizza Média - (Ingredientes: Cebola, Molho, Orégano, Azeitonas, Mussarela, Calabresa Moída, Molho de Pimenta, Tomate Picado)">
                            </div>
                        </div>
                        <div itemprop="name" class="nome-prod">Mexicana</div>
                        <div itemprop="description" class="brevdesc-prod">Cebola, Molho, Orégano, Azeitonas, Mussarela, Calabresa Moída, Molho de Pimenta, Tomate Picado</div>

                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod"> R$ 29.00
                            <meta itemprop="priceCurrency" content="BRL">
                            <meta itemprop="price" content="29.00">
                            <link itemprop="availability" href="https://schema.org/InStock">
                        </div>
                        <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;40&quot;,&quot;codtaman&quot;:&quot;1&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;98ac16c3a904ea3394880d06bcf56d1a&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
                    </div>
                    <div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;7&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;449942533c0c09795007be56dca5fa3b&quot;}" data-montador="montarpizza" class="box-produto prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x2 clk_categoria_x1" title="Napolitana - (Ingredientes: Cebola, Molho, Orégano, Tomate)" style="display: block;">
                        <div class="image-prod">
                            <div class="formapizza-lista">
                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/130/180/Expresso-Delivery_ac1bdc6638f2deca832b64b3ab2fb1f0.png" alt="Tradicionais: Napolitana - Pizza Grande (Ingredientes: Cebola, Molho, Orégano, Tomate)" title="NapolitanaPizza Grande - (Ingredientes: Cebola, Molho, Orégano, Tomate)">
                            </div>
                        </div>
                        <div itemprop="name" class="nome-prod">Napolitana</div>
                        <div itemprop="description" class="brevdesc-prod">Cebola, Molho, Orégano, Tomate</div>

                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod"> R$ 29.90
                            <meta itemprop="priceCurrency" content="BRL">
                            <meta itemprop="price" content="29.90">
                            <link itemprop="availability" href="https://schema.org/InStock">
                        </div>
                        <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;7&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;449942533c0c09795007be56dca5fa3b&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
                    </div>
                    <div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;56&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;9c874bdde7f86c3bfa97ef63754be244&quot;}" data-montador="montarpizza" class="box-produto prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x2 clk_categoria_x3" title="Rúcula - (Ingredientes: Rúcula, Tomate Seco)" style="display: none;">
                        <div class="image-prod">
                            <div class="formapizza-lista">
                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6345/180/Expresso-Delivery_db237e4df751187c52b975a945429eec.png" alt="Especiais: Rúcula - Pizza Grande (Ingredientes: Rúcula, Tomate Seco)" title="RúculaPizza Grande - (Ingredientes: Rúcula, Tomate Seco)">
                            </div>
                        </div>
                        <div itemprop="name" class="nome-prod">Rúcula</div>
                        <div itemprop="description" class="brevdesc-prod">Rúcula, Tomate Seco</div>

                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod"> R$ 36.00
                            <meta itemprop="priceCurrency" content="BRL">
                            <meta itemprop="price" content="36.00">
                            <link itemprop="availability" href="https://schema.org/InStock">
                        </div>
                        <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;56&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;9c874bdde7f86c3bfa97ef63754be244&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
                    </div>
                    <div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;11&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;83ca2483431ec92ed18e3d68d15a3aa3&quot;}" data-montador="montarpizza" class="box-produto prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x2 clk_categoria_x2" title="Romeu e Julieta - (Ingredientes: Mussarela, Goiabada)" style="display: none;">
                        <div class="image-prod">
                            <div class="formapizza-lista">
                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3532/180/Expresso-Delivery_8b24d77a3dc5dcf089ffa90ea58ea76e.png" alt="Doces: Romeu e Julieta - Pizza Grande (Ingredientes: Mussarela, Goiabada)" title="Romeu e JulietaPizza Grande - (Ingredientes: Mussarela, Goiabada)">
                            </div>
                        </div>
                        <div itemprop="name" class="nome-prod">Romeu e Julieta</div>
                        <div itemprop="description" class="brevdesc-prod">Mussarela, Goiabada</div>

                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod"> R$ 31.00
                            <meta itemprop="priceCurrency" content="BRL">
                            <meta itemprop="price" content="31.00">
                            <link itemprop="availability" href="https://schema.org/InStock">
                        </div>
                        <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;11&quot;,&quot;codtaman&quot;:&quot;2&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;83ca2483431ec92ed18e3d68d15a3aa3&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
                    </div>
                    <h3 class="msg_naohaitenstc" style="display:none;">Nenhum item encontrado.<br>Selecione outro tamanho ou categoria acima.</h3>
                </div>
            </div>
        </section>
        <!-- cont-left -->
                <section class="cont-dir">
                    <section class="colum_move" id="pedido-dir" style="margin-top: 0px;">
                        <div class="top-ing">
                            <p class="tit-ing" id="tit-listaing"><span class="icon24"></span>Meu Pedido</p>
                        </div>
                        <div id="cont_resumo"><div class="car-sem-item"> <img src="https://static.expressodelivery.com.br/media/0.01.001/img/emot-fome.png"> <img style="margin-top: 50px;" src="https://static.expressodelivery.com.br/media/0.01.001/img/seta-add-item.png"> </div></div><!-- cont_menu -->
                        <div id="total-finaliza-ped"></div>
                    </section>
                </section>
        <!-- cont-dir -->

    </div>
    @endsection