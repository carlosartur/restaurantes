@extends('layouts.appFront')

@section('content')
<div class="container clearfix param_move">
	<section class="cont-left">
		<h2 class="cardapio">Cardápio</h2>
		<nav class="cardapio-mont">
			<ul>
				<li class="listamenucardapio">
					<a href="#" class="linksess" data-sessao="1" title="Pizzas">
						<img src="https://static.expressodelivery.com.br/imagens/icones/1025/Expresso-Delivery_f673c0e51f4bb73015ba40b0d0598163.png">Pizzas</a>
				</li>
				<li class="listamenucardapio ativo">
					<a href="#" class="linksess selecionar_primeiro " data-sessao="6" title="Bebidas">
						<img src="https://static.expressodelivery.com.br/imagens/icones/281/Expresso-Delivery_625eda6776b9a69ff0560944dcc67bb8.png">Bebidas</a>
				</li>
				<li class="listamenucardapio">
					<a href="#" class="linksess" data-sessao="13" title="Sobremesas">
						<img src="https://static.expressodelivery.com.br/imagens/icones/1769/Expresso-Delivery_760d1774251dd663cc3531f52f020a7b.png">Sobremesas</a>
				</li>
				<li class="listamenucardapio">
					<a href="#" class="linksess" data-sessao="600004" title="Paletas">
						<img src="https://static.expressodelivery.com.br/imagens/icones/3899/Expresso-Delivery_6a27c0979d7a2b6b37031117d3f53b74.png">Paletas</a>
				</li>
			</ul>
		</nav>
		<div class="item_e" id="grupo_sessao_1">
			<h3 class="tit-cont">Pizzas</h3>
			<div class="select_box"> <span class="titulo_groupcattam">Tamanhos</span>
				<select class="select_sessao" id="selccc_1" data-tipo="tamanho" data-codsessao="1">
					<option value="14">Pizza Média</option>
					<option selected="" value="15">Pizza Grande</option>
				</select>
			</div>
			<div class="listade_produtos">
				<div class="lista_deabas">
					<div class="aba_sessao abaativa  abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="15">Especiais</div>
					<div class="aba_sessao abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="16">Premium</div>
					<div class="aba_sessao abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="17">Doces</div>
					<div class="aba_sessao abbb_1" data-codsessao="1" data-tipo="categoria" data-cod="600005">Novidade</div>
				</div>
				<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;80&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;63064ac14ce17bd45ff300b530c31061&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Alho Poró - (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22069/180/Expresso-Delivery_4a87a6b3a0d605f37a033e45cd51be23.png" alt="Especiais: Alho Poró - Pizza Média (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" tomate="" seco)'="" title="Alho PoróPizza Média - (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko"></div>
			</div>
			<div itemprop="name" class="nome-prod">Alho Poró</div>
			<div itemprop="description" class="brevdesc-prod">Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko's, Mussarela, Tomate Seco</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 37.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="37.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;80&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;63064ac14ce17bd45ff300b530c31061&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600043&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1274cba808993dd296666769a5c2e379&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Americana - (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" ovo,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4996/180/Expresso-Delivery_62c2847ee8e6b0760cc1c3a36c628ea9.png" alt="Especiais: Americana - Pizza Média (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" ovo,="" salsinha)'="" title="AmericanaPizza Média - (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Americana</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Ovo, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 41.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="41.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600043&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1274cba808993dd296666769a5c2e379&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600041&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;072face97c574993f55fa2ac5328dc98&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Best Bacon - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko" s,="" salsinha,="" creme="" de="" alho,="" cruzado="" requeijão,="" milho="" verde) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4994/180/Expresso-Delivery_38beedefde26da7c7bf462a67a650a71.png" alt="Especiais: Best Bacon - Pizza Média (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko" s,="" salsinha,="" creme="" de="" alho,="" cruzado="" requeijão,="" milho="" verde)'="" title="Best BaconPizza Média - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Best Bacon</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko's, Salsinha, Creme de Alho, Cruzado de Requeijão, Milho Verde</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600041&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;072face97c574993f55fa2ac5328dc98&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600009&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;44a2e9497f6bb2ae85539ba9a5d5416a&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Calabresa Especial - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17430/180/Expresso-Delivery_b8ab23803ace04afc126840fa3a91134.png" alt="Especiais: Calabresa Especial - Pizza Média (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" salsinha)'="" title="Calabresa EspecialPizza Média - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calabresa Especial</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 40.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="40.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600009&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;44a2e9497f6bb2ae85539ba9a5d5416a&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600026&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;406222625bf4d5e54e0c3726181fe7cd&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Chicken Pork - (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12114/180/Expresso-Delivery_9bd7558dab76ece9d6f0fe989f148799.png" alt="Especiais: Chicken Pork - Pizza Média (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha)'="" title="Chicken PorkPizza Média - (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Chicken Pork</div>
<div itemprop="description" class="brevdesc-prod">Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko's, Mussarela, Orégano, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 41.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="41.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600026&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;406222625bf4d5e54e0c3726181fe7cd&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600019&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a806e0ecfd56cefae30bb15dd58e27b3&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Cuko" s="" -="" (ingredientes:="" alho="" poró,="" champignon,="" cruzado="" de="" requeijão,="" molho="" tomate="" cuko 's,="" mussarela,="" nozes,="" palmito,="" peito="" peru,="" salsinha)'="">
	<div class="image-prod">
		<div class="formapizza-lista">
			<img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
			<img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4990/180/Expresso-Delivery_e9d8ce65b5a0964b5c686ac0655a0bef.png" alt="Especiais: Cuko" s="" -="" pizza="" média="" (ingredientes:="" alho="" poró,="" champignon,="" cruzado="" de="" requeijão,="" molho="" tomate="" cuko 's,="" mussarela,="" nozes,="" palmito,="" peito="" peru,="" salsinha)'="" title="Cuko" spizza="">
		</div>
	</div>
	<div itemprop="name" class="nome-prod">Cuko's</div>
	<div itemprop="description" class="brevdesc-prod">Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Nozes, Palmito, Peito de Peru, Salsinha</div>
	<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
		<meta itemprop="priceCurrency" content="BRL">
		<meta itemprop="price" content="42.00">
		<link itemprop="availability" href="http://schema.org/InStock">
	</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600019&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a806e0ecfd56cefae30bb15dd58e27b3&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600014&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;96b89b758acc68aedf9f1f721018a4f1&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Frango Especial - (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4986/180/Expresso-Delivery_7a874c2862cfc5242ccd5e4596bbfae2.png" alt="Especiais: Frango Especial - Pizza Média (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha,="" tomate)'="" title="Frango EspecialPizza Média - (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Frango Especial</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko's, Mussarela, Orégano, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600014&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;96b89b758acc68aedf9f1f721018a4f1&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600015&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;fc805ba24372d755e2c3cbf6bc71fe88&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Hassin - (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" pimenta="" biquinho,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4987/180/Expresso-Delivery_9ed85ac6103ffb6face5cd410d6f1290.png" alt="Especiais: Hassin - Pizza Média (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" pimenta="" biquinho,="" tomate)'="" title="HassinPizza Média - (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Hassin</div>
<div itemprop="description" class="brevdesc-prod">Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko's, Mussarela, Orégano, Pimenta Biquinho, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600015&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;fc805ba24372d755e2c3cbf6bc71fe88&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600042&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;9a4d43849afe642ceb4fa3ffa622e209&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Lombinho - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko" s,="" salsinha,="" cruzado="" de="" requeijão,="" pimentões) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4995/180/Expresso-Delivery_557903b51652b9b206e943635091d726.png" alt="Especiais: Lombinho - Pizza Média (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko" s,="" salsinha,="" cruzado="" de="" requeijão,="" pimentões)'="" title="LombinhoPizza Média - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Lombinho</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko's, Salsinha, Cruzado de Requeijão, Pimentões</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600042&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;9a4d43849afe642ceb4fa3ffa622e209&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;79&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;32c770ec5f8a25917f2baeba458007e6&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Marguerita - (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" parmesão,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4981/180/Expresso-Delivery_0cbce43c3003dd644e3f2298c6d25ae2.png" alt="Especiais: Marguerita - Pizza Média (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" parmesão,="" tomate)'="" title="MargueritaPizza Média - (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Marguerita</div>
<div itemprop="description" class="brevdesc-prod">Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Parmesão, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 37.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="37.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;79&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;32c770ec5f8a25917f2baeba458007e6&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600038&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a1a5397273ae47816e50cec2c65cc2d2&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Palmito com Bacon - (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" palmito,="" salsinha,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5275/180/Expresso-Delivery_d0ab2fe56b3972450d1503e65c162657.png" alt="Especiais: Palmito com Bacon - Pizza Média (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" palmito,="" salsinha,="" tomate="" seco)'="" title="Palmito com BaconPizza Média - (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Palmito com Bacon</div>
<div itemprop="description" class="brevdesc-prod">Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Palmito, Salsinha, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600038&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a1a5397273ae47816e50cec2c65cc2d2&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600082&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;dadc6fa022cd46750e6fb42acbfc85d3&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Pepperoni - (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko" s,="" mussarela,="" pepperoni) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12115/180/Expresso-Delivery_9981f62cba7fe644db71c1fe0e65521f.png" alt="Especiais: Pepperoni - Pizza Média (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko" s,="" mussarela,="" pepperoni)'="" title="PepperoniPizza Média - (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Pepperoni</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko's, Mussarela, Pepperoni</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 45.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="45.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600082&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;dadc6fa022cd46750e6fb42acbfc85d3&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600010&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2abff754b5768bea973f7247bf274a55&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Portuguesa - (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" ovos="" cozidos,="" presunto) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17304/180/Expresso-Delivery_f9cbaa61c53c4a5e873caf6136a6b4b5.png" alt="Especiais: Portuguesa - Pizza Média (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" ovos="" cozidos,="" presunto)'="" title="PortuguesaPizza Média - (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Portuguesa</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko's, Mussarela, Orégano, Ovos Cozidos, Presunto</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 40.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="40.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600010&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2abff754b5768bea973f7247bf274a55&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;917716&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;be36b0d372d1c9d931ea0f008b46db5c&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Presunto Especiale - (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" presunto,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22071/180/Expresso-Delivery_e6400e471ccc1d9dff2a3e50c47a9f10.png" alt="Especiais: Presunto Especiale - Pizza Média (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" presunto,="" tomate="" cereja)'="" title="Presunto EspecialePizza Média - (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Presunto Especiale</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Cream Cheese, Molho de Tomate Cuko's, Mussarela, Orégano, Presunto, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 38.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="38.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;917716&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;be36b0d372d1c9d931ea0f008b46db5c&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600012&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;5611d86029ac12822997483deaa4a339&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Primavera - (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" nozes,="" palmito,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4985/180/Expresso-Delivery_00087c34c675097c00013e0e170c0ae9.png" alt="Especiais: Primavera - Pizza Média (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" nozes,="" palmito,="" salsinha)'="" title="PrimaveraPizza Média - (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Primavera</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Nozes, Palmito, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 40.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="40.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600012&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;5611d86029ac12822997483deaa4a339&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600039&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;5505dce7ecd503680d35a11bd7e75730&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x15" title="Rúcula com Tomate Seco - (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" rúcula,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4992/180/Expresso-Delivery_366b4c45b4e15160b9e5ae6d30deb2bc.png" alt="Especiais: Rúcula com Tomate Seco - Pizza Média (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" rúcula,="" tomate="" seco)'="" title="Rúcula com Tomate SecoPizza Média - (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Rúcula com Tomate Seco</div>
<div itemprop="description" class="brevdesc-prod">Borda à Francesa de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Rúcula, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 40.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="40.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600039&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;5505dce7ecd503680d35a11bd7e75730&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600018&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;24a51bd8e24794ba36952976877d6159&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="6 Queijos Finos - (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko" s,="" gotas="" de="" requeijão,="" borda="" à="" francesa="" brie,="" gruyére,="" gouda) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4989/180/Expresso-Delivery_99b876c6d5b1613f2eaeb83d984abb12.png" alt="Premium: 6 Queijos Finos - Pizza Média (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko" s,="" gotas="" de="" requeijão,="" borda="" à="" francesa="" brie,="" gruyére,="" gouda)'="" title="6 Queijos FinosPizza Média - (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">6 Queijos Finos</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko's, Gotas de Requeijão, Borda à Francesa de Requeijão, Brie, Gruyére, Gouda</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 50.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="50.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600018&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;24a51bd8e24794ba36952976877d6159&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600034&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1c65c7ea412e6d9088bcc55926ad9e0a&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="B.B.Q. - (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" requeijão,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5000/180/Expresso-Delivery_d8831c6454da6ed4a86a44f29c134b44.png" alt="Premium: B.B.Q. - Pizza Média (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" requeijão,="" salsinha,="" tomate)'="" title="B.B.Q.Pizza Média - (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">B.B.Q.</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko's, Mussarela, Orégano, Requeijão, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 47.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="47.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600034&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1c65c7ea412e6d9088bcc55926ad9e0a&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600046&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d830ec5791b76550c63939c2cd2f1ce4&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Calabresa Prime - (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5003/180/Expresso-Delivery_7ffc4632d707c5f7f93f8e0edff656cf.png" alt="Premium: Calabresa Prime - Pizza Média (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" tomate="" seco)'="" title="Calabresa PrimePizza Média - (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calabresa Prime</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 48.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="48.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600046&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d830ec5791b76550c63939c2cd2f1ce4&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600045&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1826b57a515d85da0902c2fb0c76f94a&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Calábria - (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" salsinha,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17431/180/Expresso-Delivery_7ce4870d2ac4f71106f47038e51507ad.png" alt="Premium: Calábria - Pizza Média (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" salsinha,="" tomate="" seco)'="" title="CalábriaPizza Média - (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calábria</div>
<div itemprop="description" class="brevdesc-prod">Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Gouda, Salsinha, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600045&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1826b57a515d85da0902c2fb0c76f94a&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600044&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;bf49622fc795bd7f0dba504dc7ba5a4c&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Carne Seca - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4997/180/Expresso-Delivery_afc6ad4d87e887ace313a30799e77984.png" alt="Premium: Carne Seca - Pizza Média (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" tomate="" seco)'="" title="Carne SecaPizza Média - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Carne Seca</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Gouda, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 52.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="52.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600044&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;bf49622fc795bd7f0dba504dc7ba5a4c&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600020&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2b2391d5ba2e1e5f69ded427dbee4a73&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Casquinha de Camarão - (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" pimenta="" biquinho,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22070/180/Expresso-Delivery_45f46d8c3f3274934838b7bdea9a7862.png" alt="Premium: Casquinha de Camarão - Pizza Média (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" pimenta="" biquinho,="" tomate="" cereja)'="" title="Casquinha de CamarãoPizza Média - (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Casquinha de Camarão</div>
<div itemprop="description" class="brevdesc-prod">Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Pimenta Biquinho, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 52.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="52.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600020&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2b2391d5ba2e1e5f69ded427dbee4a73&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600083&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8ee704a90a6fd37e7429d843eaddbf8d&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Pompeia - (Ingredientes: Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" parmesão,="" pepperoni,="" salsinha,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12116/180/Expresso-Delivery_ddad5c275b6c1cbf0279801971237735.png" alt="Premium: Pompeia - Pizza Média (Ingredientes: Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" parmesão,="" pepperoni,="" salsinha,="" tomate="" cereja)'="" title="PompeiaPizza Média - (Ingredientes: Creme de Alho, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Pompeia</div>
<div itemprop="description" class="brevdesc-prod">Creme de Alho, Molho de Tomate Cuko's, Mussarela, Parmesão, Pepperoni, Salsinha, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 45.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="45.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600083&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8ee704a90a6fd37e7429d843eaddbf8d&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600023&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d79ab34c2ed60739cefc5e975da68ea0&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Salmão - (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" rúcula,="" salmão="" defumado,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22072/180/Expresso-Delivery_b8c6c09f3ffc041d4f0b2a8dae505a05.png" alt="Premium: Salmão - Pizza Média (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" rúcula,="" salmão="" defumado,="" tomate)'="" title="SalmãoPizza Média - (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Salmão</div>
<div itemprop="description" class="brevdesc-prod">Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko's, Mussarela, Rúcula, Salmão Defumado, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600023&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d79ab34c2ed60739cefc5e975da68ea0&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600017&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;55035d4440718ee66f74d2c17ab0eaf6&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x16" title="Siri Picante - (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko" s,="" mussarela,="" pimenta="" biquinho,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22073/180/Expresso-Delivery_71a86eaaa5b0df74068dbb40bd88bae6.png" alt="Premium: Siri Picante - Pizza Média (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko" s,="" mussarela,="" pimenta="" biquinho,="" salsinha,="" tomate)'="" title="Siri PicantePizza Média - (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Siri Picante</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko's, Mussarela, Pimenta Biquinho, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 51.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="51.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600017&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;55035d4440718ee66f74d2c17ab0eaf6&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600086&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;127d902b8181810d06ff3c4575c8abb1&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x17" title="KIT KAT - (Ingredientes: Chocolate, Deliciosa Massa Doce Cuko" s,="" kit="" kat,="" leite="" condensado,="" morango,="" mussarela) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17305/180/Expresso-Delivery_288a4cf2950d94a85387e62dc7e59e67.png" alt="Doces: KIT KAT - Pizza Média (Ingredientes: Chocolate, Deliciosa Massa Doce Cuko" s,="" kit="" kat,="" leite="" condensado,="" morango,="" mussarela)'="" title="KIT KATPizza Média - (Ingredientes: Chocolate, Deliciosa Massa Doce Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">KIT KAT</div>
<div itemprop="description" class="brevdesc-prod">Chocolate, Deliciosa Massa Doce Cuko's, Kit Kat, Leite Condensado, Morango, Mussarela</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 37.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="37.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600086&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;127d902b8181810d06ff3c4575c8abb1&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600088&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;b7bae8aa1eb58b81e42500715141e973&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x17" title="M&amp;M" s="" -="" (ingredientes:="" deliciosa="" massa="" doce="" cuko 's,="" leite="" condensado,="" m&m's,="" morango,="" mussarela,="" nutella) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17433/180/Expresso-Delivery_75a849690384dd32a9011175f46d30d9.png" alt="Doces: M&amp;M" s="" -="" pizza="" média="" (ingredientes:="" deliciosa="" massa="" doce="" cuko's,="" leite="" condensado,="" m&m 's,="" morango,="" mussarela,="" nutella)'="" title="M&amp;M" spizza=""></div>
</div>
<div itemprop="name" class="nome-prod">M&amp;M's</div>
<div itemprop="description" class="brevdesc-prod">Deliciosa Massa Doce Cuko's, Leite Condensado, M&amp;M's, Morango, Mussarela, Nutella</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 39.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="39.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600088&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;b7bae8aa1eb58b81e42500715141e973&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600029&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d3a7da976c1f68db4464b8b8995bcdb0&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x17" title="Nutella - (Ingredientes: Creme de Leite, Leite Condensado, Morango, Mussarela, Nozes, Nutella)">
	<div class="image-prod">
		<div class="formapizza-lista">
			<img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
			<img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4999/180/Expresso-Delivery_453254891ecd151d3d99f2e611278336.png" alt="Doces: Nutella - Pizza Média (Ingredientes: Creme de Leite, Leite Condensado, Morango, Mussarela, Nozes, Nutella)" title="NutellaPizza Média - (Ingredientes: Creme de Leite, Leite Condensado, Morango, Mussarela, Nozes, Nutella)">
		</div>
	</div>
	<div itemprop="name" class="nome-prod">Nutella</div>
	<div itemprop="description" class="brevdesc-prod">Creme de Leite, Leite Condensado, Morango, Mussarela, Nozes, Nutella</div>
	<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 37.00
		<meta itemprop="priceCurrency" content="BRL">
		<meta itemprop="price" content="37.00">
		<link itemprop="availability" href="http://schema.org/InStock">
	</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600029&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d3a7da976c1f68db4464b8b8995bcdb0&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600087&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;28cdaa56c82c9c588c60eb151eefc761&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x17" title="Queijo com Goiabada - (Ingredientes: Creme de Leite, Deliciosa Massa Doce Cuko" s,="" goiabada,="" mussarela,="" raspas="" de="" limão,="" requeijão) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17432/180/Expresso-Delivery_62bffc77367cf81a7c0b6bca48d2bfe5.png" alt="Doces: Queijo com Goiabada - Pizza Média (Ingredientes: Creme de Leite, Deliciosa Massa Doce Cuko" s,="" goiabada,="" mussarela,="" raspas="" de="" limão,="" requeijão)'="" title="Queijo com GoiabadaPizza Média - (Ingredientes: Creme de Leite, Deliciosa Massa Doce Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Queijo com Goiabada</div>
<div itemprop="description" class="brevdesc-prod">Creme de Leite, Deliciosa Massa Doce Cuko's, Goiabada, Mussarela, Raspas de Limão, Requeijão</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 35.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="35.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600087&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;28cdaa56c82c9c588c60eb151eefc761&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270944&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7fc55252360a5af1cb670e2e30ea6783&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x600005" title="Cipriota - (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" pimenta="" biquinho,="" requeijão,="" salame="" italiano,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37622/180/Expresso-Delivery_28d00cd8a6adf6429ab4387224deb6a9.png" alt="Novidade: Cipriota - Pizza Média (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" pimenta="" biquinho,="" requeijão,="" salame="" italiano,="" salsinha)'="" title="CipriotaPizza Média - (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Cipriota</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko's, Pimenta Biquinho, Requeijão, Salame Italiano, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 50.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="50.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270944&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7fc55252360a5af1cb670e2e30ea6783&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270946&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2bab8e466e5d0184d93100af8a8ac50c&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x600005" title="Florença - (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" peito="" de="" peru,="" requeijão,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37623/180/Expresso-Delivery_7dfa803b97c9e0022bc0d76c8060086a.png" alt="Novidade: Florença - Pizza Média (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" peito="" de="" peru,="" requeijão,="" tomate="" seco)'="" title="FlorençaPizza Média - (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Florença</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Champignon, Molho de Tomate Cuko's, Mussarela, Orégano, Peito de Peru, Requeijão, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 42.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="42.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270946&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2bab8e466e5d0184d93100af8a8ac50c&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270945&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;3abdee3684ee835a8ca935f713767bb9&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x14 clk_categoria_x600005" title="Vegetariana - (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko" s,="" mussarela,="" pimentões="" coloridos,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37624/180/Expresso-Delivery_e1ba7611ea44c9a967ce0e73c2f79487.png" alt="Novidade: Vegetariana - Pizza Média (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko" s,="" mussarela,="" pimentões="" coloridos,="" tomate="" cereja)'="" title="VegetarianaPizza Média - (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Vegetariana</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko's, Mussarela, Pimentões coloridos, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 41.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="41.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270945&quot;,&quot;codtaman&quot;:&quot;14&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;3abdee3684ee835a8ca935f713767bb9&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;80&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;aa48288254bf4e5ff680f7b165b03898&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Alho Poró - (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22069/180/Expresso-Delivery_4a87a6b3a0d605f37a033e45cd51be23.png" alt="Especiais: Alho Poró - Pizza Grande (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" tomate="" seco)'="" title="Alho PoróPizza Grande - (Ingredientes: Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Alho Poró</div>
<div itemprop="description" class="brevdesc-prod">Alho e Cebola Fritos no Azeite, Alho Poró, Cream Cheese, Creme de Alho, Molho de Tomate Cuko's, Mussarela, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 44.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="44.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;80&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;aa48288254bf4e5ff680f7b165b03898&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600043&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;bcf292728c5c29f972b359cf1cb52a00&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Americana - (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" ovo,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4996/180/Expresso-Delivery_62c2847ee8e6b0760cc1c3a36c628ea9.png" alt="Especiais: Americana - Pizza Grande (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" ovo,="" salsinha)'="" title="AmericanaPizza Grande - (Ingredientes: Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Americana</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Bacon, Cebola, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Ovo, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 48.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="48.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600043&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;bcf292728c5c29f972b359cf1cb52a00&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600041&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;fa79d6b90c0ad099d6af5c1879179d06&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Best Bacon - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko" s,="" salsinha,="" creme="" de="" alho,="" cruzado="" requeijão,="" milho="" verde) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4994/180/Expresso-Delivery_38beedefde26da7c7bf462a67a650a71.png" alt="Especiais: Best Bacon - Pizza Grande (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko" s,="" salsinha,="" creme="" de="" alho,="" cruzado="" requeijão,="" milho="" verde)'="" title="Best BaconPizza Grande - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Best Bacon</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Bacon, Azeitona, Molho de Tomate Cuko's, Salsinha, Creme de Alho, Cruzado de Requeijão, Milho Verde</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600041&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;fa79d6b90c0ad099d6af5c1879179d06&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600009&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;0c75c09e2603c50254ba8d357d201a5f&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Calabresa Especial - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17430/180/Expresso-Delivery_b8ab23803ace04afc126840fa3a91134.png" alt="Especiais: Calabresa Especial - Pizza Grande (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" salsinha)'="" title="Calabresa EspecialPizza Grande - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calabresa Especial</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Bacon, Borda à Francesa de Requeijão, Calabresa Laminada, Cebola, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 47.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="47.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600009&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;0c75c09e2603c50254ba8d357d201a5f&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600026&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a1c33d6d93a467e8e5e3c1b63cbb1b71&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Chicken Pork - (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12114/180/Expresso-Delivery_9bd7558dab76ece9d6f0fe989f148799.png" alt="Especiais: Chicken Pork - Pizza Grande (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha)'="" title="Chicken PorkPizza Grande - (Ingredientes: Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Chicken Pork</div>
<div itemprop="description" class="brevdesc-prod">Bacon Laminado, Borda à Francesa de Requeijão, Frango Desfiado, Milho Verde, Molho de Tomate Cuko's, Mussarela, Orégano, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 48.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="48.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600026&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;a1c33d6d93a467e8e5e3c1b63cbb1b71&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600019&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d4e3132097418780a12a215829bab867&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Cuko" s="" -="" (ingredientes:="" alho="" poró,="" champignon,="" cruzado="" de="" requeijão,="" molho="" tomate="" cuko 's,="" mussarela,="" nozes,="" palmito,="" peito="" peru,="" salsinha)'="">
	<div class="image-prod">
		<div class="formapizza-lista">
			<img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
			<img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4990/180/Expresso-Delivery_e9d8ce65b5a0964b5c686ac0655a0bef.png" alt="Especiais: Cuko" s="" -="" pizza="" grande="" (ingredientes:="" alho="" poró,="" champignon,="" cruzado="" de="" requeijão,="" molho="" tomate="" cuko 's,="" mussarela,="" nozes,="" palmito,="" peito="" peru,="" salsinha)'="" title="Cuko" spizza="">
		</div>
	</div>
	<div itemprop="name" class="nome-prod">Cuko's</div>
	<div itemprop="description" class="brevdesc-prod">Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Nozes, Palmito, Peito de Peru, Salsinha</div>
	<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
		<meta itemprop="priceCurrency" content="BRL">
		<meta itemprop="price" content="49.00">
		<link itemprop="availability" href="http://schema.org/InStock">
	</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600019&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d4e3132097418780a12a215829bab867&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600014&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2d08d97443f697e6e1f040bad62a97f5&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Frango Especial - (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4986/180/Expresso-Delivery_7a874c2862cfc5242ccd5e4596bbfae2.png" alt="Especiais: Frango Especial - Pizza Grande (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" salsinha,="" tomate)'="" title="Frango EspecialPizza Grande - (Ingredientes: Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Frango Especial</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Cebola, Cruzado de Requeijão, Frango, Molho de Tomate Cuko's, Mussarela, Orégano, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600014&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2d08d97443f697e6e1f040bad62a97f5&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600015&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;65df06e99044501b0d0ac6e892c8ff5e&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Hassin - (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" pimenta="" biquinho,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4987/180/Expresso-Delivery_9ed85ac6103ffb6face5cd410d6f1290.png" alt="Especiais: Hassin - Pizza Grande (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" pimenta="" biquinho,="" tomate)'="" title="HassinPizza Grande - (Ingredientes: Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Hassin</div>
<div itemprop="description" class="brevdesc-prod">Atum, Borda à Francesa de Requeijão, Cebola, Limão, Molho de Tomate Cuko's, Mussarela, Orégano, Pimenta Biquinho, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600015&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;65df06e99044501b0d0ac6e892c8ff5e&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600042&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;255491b82e5f70f892a92cda72718f35&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Lombinho - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko" s,="" salsinha,="" cruzado="" de="" requeijão,="" pimentões) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4995/180/Expresso-Delivery_557903b51652b9b206e943635091d726.png" alt="Especiais: Lombinho - Pizza Grande (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko" s,="" salsinha,="" cruzado="" de="" requeijão,="" pimentões)'="" title="LombinhoPizza Grande - (Ingredientes: Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Lombinho</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Bacon, Lombo Canadense, Alho Poró, Molho de Tomate Cuko's, Salsinha, Cruzado de Requeijão, Pimentões</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600042&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;255491b82e5f70f892a92cda72718f35&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;79&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8b56e3b917b7de9c3d3e3385fed87b54&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Marguerita - (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" parmesão,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4981/180/Expresso-Delivery_0cbce43c3003dd644e3f2298c6d25ae2.png" alt="Especiais: Marguerita - Pizza Grande (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" parmesão,="" tomate)'="" title="MargueritaPizza Grande - (Ingredientes: Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Marguerita</div>
<div itemprop="description" class="brevdesc-prod">Borda à Francesa de Requeijão, Gotas de Requeijão, Manjericão Fresco, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Parmesão, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 44.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="44.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;79&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8b56e3b917b7de9c3d3e3385fed87b54&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600038&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;c9fbdc8940bfb4158a5ea4aab5f7ef19&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Palmito com Bacon - (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" palmito,="" salsinha,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5275/180/Expresso-Delivery_d0ab2fe56b3972450d1503e65c162657.png" alt="Especiais: Palmito com Bacon - Pizza Grande (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" palmito,="" salsinha,="" tomate="" seco)'="" title="Palmito com BaconPizza Grande - (Ingredientes: Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Palmito com Bacon</div>
<div itemprop="description" class="brevdesc-prod">Bacon, Borda à Francesa de Requeijão, Gotas de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Palmito, Salsinha, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600038&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;c9fbdc8940bfb4158a5ea4aab5f7ef19&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600082&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;e4c2f218c437f3f6741cec2fef13d331&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Pepperoni - (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko" s,="" mussarela,="" pepperoni) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12115/180/Expresso-Delivery_9981f62cba7fe644db71c1fe0e65521f.png" alt="Especiais: Pepperoni - Pizza Grande (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko" s,="" mussarela,="" pepperoni)'="" title="PepperoniPizza Grande - (Ingredientes: Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Pepperoni</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Champignon, Gorgonzola, Molho de Tomate Cuko's, Mussarela, Pepperoni</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 52.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="52.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600082&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;e4c2f218c437f3f6741cec2fef13d331&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600010&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8c64e52e9028938faa0a36786ad025f7&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Portuguesa - (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" ovos="" cozidos,="" presunto) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17304/180/Expresso-Delivery_f9cbaa61c53c4a5e873caf6136a6b4b5.png" alt="Especiais: Portuguesa - Pizza Grande (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" ovos="" cozidos,="" presunto)'="" title="PortuguesaPizza Grande - (Ingredientes: Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Portuguesa</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Borda à Francesa de Requeijão, Cebola Laminada, Ervilha Fresca, Molho de Tomate Cuko's, Mussarela, Orégano, Ovos Cozidos, Presunto</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 47.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="47.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600010&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;8c64e52e9028938faa0a36786ad025f7&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;917716&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;98dd47b35deb62c6e9ff6a593facbfe2&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Presunto Especiale - (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" presunto,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22071/180/Expresso-Delivery_e6400e471ccc1d9dff2a3e50c47a9f10.png" alt="Especiais: Presunto Especiale - Pizza Grande (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" presunto,="" tomate="" cereja)'="" title="Presunto EspecialePizza Grande - (Ingredientes: Cebola, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Presunto Especiale</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Cream Cheese, Molho de Tomate Cuko's, Mussarela, Orégano, Presunto, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 45.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="45.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;917716&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;98dd47b35deb62c6e9ff6a593facbfe2&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600012&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;65fd4ce6170513b44789c6acc15dbda0&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Primavera - (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" nozes,="" palmito,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4985/180/Expresso-Delivery_00087c34c675097c00013e0e170c0ae9.png" alt="Especiais: Primavera - Pizza Grande (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" nozes,="" palmito,="" salsinha)'="" title="PrimaveraPizza Grande - (Ingredientes: Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Primavera</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Champignon, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Nozes, Palmito, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 47.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="47.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600012&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;65fd4ce6170513b44789c6acc15dbda0&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600039&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;744dbee2fb08ea9a8aa75bb3cd58cbfe&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x15" title="Rúcula com Tomate Seco - (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" rúcula,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4992/180/Expresso-Delivery_366b4c45b4e15160b9e5ae6d30deb2bc.png" alt="Especiais: Rúcula com Tomate Seco - Pizza Grande (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" rúcula,="" tomate="" seco)'="" title="Rúcula com Tomate SecoPizza Grande - (Ingredientes: Borda à Francesa de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Rúcula com Tomate Seco</div>
<div itemprop="description" class="brevdesc-prod">Borda à Francesa de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Rúcula, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 47.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="47.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600039&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;744dbee2fb08ea9a8aa75bb3cd58cbfe&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600018&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;129dae6de86393d7056f156cace2881d&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="6 Queijos Finos - (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko" s,="" gotas="" de="" requeijão,="" borda="" à="" francesa="" brie,="" gruyére,="" gouda) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4989/180/Expresso-Delivery_99b876c6d5b1613f2eaeb83d984abb12.png" alt="Premium: 6 Queijos Finos - Pizza Grande (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko" s,="" gotas="" de="" requeijão,="" borda="" à="" francesa="" brie,="" gruyére,="" gouda)'="" title="6 Queijos FinosPizza Grande - (Ingredientes: Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">6 Queijos Finos</div>
<div itemprop="description" class="brevdesc-prod">Mussarela, Orégano, Cebola, Parmesão, Manjericão Fresco, Provolone, Gorgonzola, Alho Poró, Molho de Tomate Cuko's, Gotas de Requeijão, Borda à Francesa de Requeijão, Brie, Gruyére, Gouda</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 57.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="57.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600018&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;129dae6de86393d7056f156cace2881d&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600034&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;0bcf5284f94e02b654b72227a90c487c&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="B.B.Q. - (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" requeijão,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5000/180/Expresso-Delivery_d8831c6454da6ed4a86a44f29c134b44.png" alt="Premium: B.B.Q. - Pizza Grande (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" requeijão,="" salsinha,="" tomate)'="" title="B.B.Q.Pizza Grande - (Ingredientes: Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">B.B.Q.</div>
<div itemprop="description" class="brevdesc-prod">Alho Poró, Cebola, Linguiça Defumada com Pimenta Calabresa, Molho Barbecue, Molho de Tomate Cuko's, Mussarela, Orégano, Requeijão, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 54.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="54.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600034&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;0bcf5284f94e02b654b72227a90c487c&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600046&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;02f93dd02aca630c0f3549d2f7cf593d&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Calabresa Prime - (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/5003/180/Expresso-Delivery_7ffc4632d707c5f7f93f8e0edff656cf.png" alt="Premium: Calabresa Prime - Pizza Grande (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" tomate="" seco)'="" title="Calabresa PrimePizza Grande - (Ingredientes: Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calabresa Prime</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Bacon, Calabresa Fatiada, Cruzado de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 55.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="55.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600046&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;02f93dd02aca630c0f3549d2f7cf593d&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600045&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7c692ea3a3a403f4705fc41ea56ddfeb&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Calábria - (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" salsinha,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/17431/180/Expresso-Delivery_7ce4870d2ac4f71106f47038e51507ad.png" alt="Premium: Calábria - Pizza Grande (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" salsinha,="" tomate="" seco)'="" title="CalábriaPizza Grande - (Ingredientes: Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Calábria</div>
<div itemprop="description" class="brevdesc-prod">Bacon, Calabresa, Cruzado de Requeijão, Lombo Canadense, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Gouda, Salsinha, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 56.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="56.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600045&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7c692ea3a3a403f4705fc41ea56ddfeb&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600044&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d5c4aac59e36d209846ae9112b6eb6a8&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Carne Seca - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/4997/180/Expresso-Delivery_afc6ad4d87e887ace313a30799e77984.png" alt="Premium: Carne Seca - Pizza Grande (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" queijo="" gouda,="" tomate="" seco)'="" title="Carne SecaPizza Grande - (Ingredientes: Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Carne Seca</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Bacon, Borda à Francesa de Requeijão, Carne Seca Desfiada, Cebola, Gotas de Requeijão, Molho de Tomate Cuko's, Mussarela, Orégano, Queijo Gouda, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 59.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="59.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600044&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;d5c4aac59e36d209846ae9112b6eb6a8&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600020&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;6a6fe18ea62cd22ba96a1a09e2837092&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Casquinha de Camarão - (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" pimenta="" biquinho,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22070/180/Expresso-Delivery_45f46d8c3f3274934838b7bdea9a7862.png" alt="Premium: Casquinha de Camarão - Pizza Grande (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" parmesão,="" pimenta="" biquinho,="" tomate="" cereja)'="" title="Casquinha de CamarãoPizza Grande - (Ingredientes: Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Casquinha de Camarão</div>
<div itemprop="description" class="brevdesc-prod">Alcaparras, Azeitona Preta, Cebola, Cream Cheese, Creme de Camarão, Molho de Tomate Cuko's, Mussarela, Orégano, Parmesão, Pimenta Biquinho, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 59.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="59.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600020&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;6a6fe18ea62cd22ba96a1a09e2837092&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600083&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1ba09ef1bcc68d94922a0c14106f5472&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Pompeia - (Ingredientes: Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" parmesão,="" pepperoni,="" salsinha,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/12116/180/Expresso-Delivery_ddad5c275b6c1cbf0279801971237735.png" alt="Premium: Pompeia - Pizza Grande (Ingredientes: Creme de Alho, Molho de Tomate Cuko" s,="" mussarela,="" parmesão,="" pepperoni,="" salsinha,="" tomate="" cereja)'="" title="PompeiaPizza Grande - (Ingredientes: Creme de Alho, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Pompeia</div>
<div itemprop="description" class="brevdesc-prod">Creme de Alho, Molho de Tomate Cuko's, Mussarela, Parmesão, Pepperoni, Salsinha, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 52.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="52.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600083&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;1ba09ef1bcc68d94922a0c14106f5472&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600023&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;3fb171354909e6772e86071052526bdd&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Salmão - (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" rúcula,="" salmão="" defumado,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22072/180/Expresso-Delivery_b8c6c09f3ffc041d4f0b2a8dae505a05.png" alt="Premium: Salmão - Pizza Grande (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko" s,="" mussarela,="" rúcula,="" salmão="" defumado,="" tomate)'="" title="SalmãoPizza Grande - (Ingredientes: Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Salmão</div>
<div itemprop="description" class="brevdesc-prod">Alcaparras, Alho Frito, Cream Cheese, Molho de Tomate Cuko's, Mussarela, Rúcula, Salmão Defumado, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 56.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="56.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600023&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;3fb171354909e6772e86071052526bdd&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600017&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;86de290579e3b05653444aea215d4ba1&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x16" title="Siri Picante - (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko" s,="" mussarela,="" pimenta="" biquinho,="" salsinha,="" tomate) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/22073/180/Expresso-Delivery_71a86eaaa5b0df74068dbb40bd88bae6.png" alt="Premium: Siri Picante - Pizza Grande (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko" s,="" mussarela,="" pimenta="" biquinho,="" salsinha,="" tomate)'="" title="Siri PicantePizza Grande - (Ingredientes: Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Siri Picante</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Cream Cheese, Molho de Pimenta, Molho de Tomate Cuko's, Mussarela, Pimenta Biquinho, Salsinha, Tomate</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 58.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="58.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600017&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;86de290579e3b05653444aea215d4ba1&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270944&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7f0fc4c07eca4035781141e79276eb41&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x600005" title="Cipriota - (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" pimenta="" biquinho,="" requeijão,="" salame="" italiano,="" salsinha) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37622/180/Expresso-Delivery_28d00cd8a6adf6429ab4387224deb6a9.png" alt="Novidade: Cipriota - Pizza Grande (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko" s,="" pimenta="" biquinho,="" requeijão,="" salame="" italiano,="" salsinha)'="" title="CipriotaPizza Grande - (Ingredientes: Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Cipriota</div>
<div itemprop="description" class="brevdesc-prod">Alho Frito, Azeitona, Cebola, Cream Cheese, Molho de Tomate Cuko's, Pimenta Biquinho, Requeijão, Salame Italiano, Salsinha</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 57.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="57.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270944&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;7f0fc4c07eca4035781141e79276eb41&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270946&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2dfd13e5c8cb0e46f00bf536a39c5111&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x600005" title="Florença - (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" peito="" de="" peru,="" requeijão,="" tomate="" seco) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37623/180/Expresso-Delivery_7dfa803b97c9e0022bc0d76c8060086a.png" alt="Novidade: Florença - Pizza Grande (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko" s,="" mussarela,="" orégano,="" peito="" de="" peru,="" requeijão,="" tomate="" seco)'="" title="FlorençaPizza Grande - (Ingredientes: Cebola, Champignon, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Florença</div>
<div itemprop="description" class="brevdesc-prod">Cebola, Champignon, Molho de Tomate Cuko's, Mussarela, Orégano, Peito de Peru, Requeijão, Tomate Seco</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 49.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="49.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270946&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;2dfd13e5c8cb0e46f00bf536a39c5111&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3270945&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;effa564f74d356d1dd6775b0f0972af0&quot;}" data-montador="montarpizza" class="box-produto hvr-overline-from-left prodpizza montaresteitem clk_sessao_x1 clk_tamanho_x15 clk_categoria_x600005" title="Vegetariana - (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko" s,="" mussarela,="" pimentões="" coloridos,="" tomate="" cereja) '="">
                                        <div class="image-prod">
                                            <div class="formapizza-lista">
                                                <img class="back_foto_" src="https://static.expressodelivery.com.br/imagens/produtos/112/180/Expresso-Delivery_14d69ba2ec163c6e6dd76db92b4374bc.png">
                                                <img class="img_items_" itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/37624/180/Expresso-Delivery_e1ba7611ea44c9a967ce0e73c2f79487.png" alt="Novidade: Vegetariana - Pizza Grande (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko" s,="" mussarela,="" pimentões="" coloridos,="" tomate="" cereja)'="" title="VegetarianaPizza Grande - (Ingredientes: Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko"></div>
</div>
<div itemprop="name" class="nome-prod">Vegetariana</div>
<div itemprop="description" class="brevdesc-prod">Azeitona, Cebola, Champignon, Cream Cheese, Ervas Finas, Manjericão, Molho de Tomate Cuko's, Mussarela, Pimentões coloridos, Tomate cereja</div>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 48.00
	<meta itemprop="priceCurrency" content="BRL">
	<meta itemprop="price" content="48.00">
	<link itemprop="availability" href="http://schema.org/InStock">
</div> <a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3270945&quot;,&quot;codtaman&quot;:&quot;15&quot;,&quot;codtipo&quot;:&quot;1&quot;,&quot;hashitem&quot;:&quot;effa564f74d356d1dd6775b0f0972af0&quot;}" data-montador="montarpizza" class="clk_botao_itempersonal btn-ter-item socomprar abriritemmontador"><span class="inbtncomprar">Comprar</span></a>
</div>
<h3 class="msg_naohaitenstc" style="display:none;">Nenhum item encontrado.<br>Selecione outro tamanho ou categoria acima.</h3>
</div>
</div>
<div class="item_e showsessao" id="grupo_sessao_6">
	<h3 class="tit-cont">Bebidas</h3>
	<div class="listade_produtos">
		<div class="lista_deabas">
			<div class="aba_sessao  abbb_6 abaativa" data-codsessao="6" data-tipo="categoria" data-cod="10">Refrigerante</div>
			<div class="aba_sessao abbb_6" data-codsessao="6" data-tipo="categoria" data-cod="13">Suco</div>
			<div class="aba_sessao abbb_6" data-codsessao="6" data-tipo="categoria" data-cod="11">Cerveja</div>
			<div class="aba_sessao abbb_6" data-codsessao="6" data-tipo="categoria" data-cod="12">Água</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;44&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;456aeae5405060cd2a99d462f60a763e&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/236/180/Expresso-Delivery_7f5ed1df30a43062cd9a8f61a28148fb.jpg" alt="Refrigerante: Coca-Cola 1,5L - Refrigerante Cola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;44&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;456aeae5405060cd2a99d462f60a763e&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Coca-Cola 1,5L</div>
			<div class="descriitem">Refrigerante Cola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 8.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="8.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;45&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;f7211a3924d2220757a874742e18e549&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/237/180/Expresso-Delivery_5c858fb55e403c54ec86ffb469f0627d.jpg" alt="Refrigerante: Coca-Cola 600ml - Refrigerante Cola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;45&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;f7211a3924d2220757a874742e18e549&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Coca-Cola 600ml</div>
			<div class="descriitem">Refrigerante Cola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 6.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="6.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;43&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;c88a2b7c34dcd15c7929f9f99c9eacca&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/235/180/Expresso-Delivery_3ca5f8b4ad6d53c62db6d764957ee85a.jpg" alt="Refrigerante: Coca-Cola Lata 350ml - Refrigerante Cola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;43&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;c88a2b7c34dcd15c7929f9f99c9eacca&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Coca-Cola Lata 350ml</div>
			<div class="descriitem">Refrigerante Cola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600002&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;803e0946bfba26dc82ef3618cb7366fb&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3551/180/Expresso-Delivery_751d7f6a87065f729fde70a8c6c66007.jpg" alt="Refrigerante: Coca-Cola Zero 1,5L - Refrigerante Cola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600002&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;803e0946bfba26dc82ef3618cb7366fb&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Coca-Cola Zero 1,5L</div>
			<div class="descriitem">Refrigerante Cola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 8.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="8.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;47&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;79876412e7e1f2464c71b0b804982a3f&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/239/180/Expresso-Delivery_b98ed669e594103b2ce61a2254015486.jpg" alt="Refrigerante: Coca-Cola Zero Lata 350ml - Refrigerante Cola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;47&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;79876412e7e1f2464c71b0b804982a3f&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Coca-Cola Zero Lata 350ml</div>
			<div class="descriitem">Refrigerante Cola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600001&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;49726b43d7d6c9b6d59a072c6941ca02&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3550/180/Expresso-Delivery_e105bb72523caa09da22562d8ccc784e.jpg" alt="Refrigerante: Guaraná Antarctica 1,5L - Refrigerante Guaraná" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600001&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;49726b43d7d6c9b6d59a072c6941ca02&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Guaraná Antarctica 1,5L</div>
			<div class="descriitem">Refrigerante Guaraná</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 8.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="8.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;50&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;13440cf70ef3cc8de64e1430f649236d&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/242/180/Expresso-Delivery_5d01876190c1bcc2fe1fbd766e724c08.jpg" alt="Refrigerante: Guaraná Antarctica 600ml - Refrigerante Guaraná" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;50&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;13440cf70ef3cc8de64e1430f649236d&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Guaraná Antarctica 600ml</div>
			<div class="descriitem">Refrigerante Guaraná</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 6.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="6.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;49&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;9589ebf7c48f7234e524931bb10fa178&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/241/180/Expresso-Delivery_83c7da0583c5170b238637e971c2fa65.jpg" alt="Refrigerante: Guaraná Antarctica Lata 350ml - Refrigerante Guaraná" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;49&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;9589ebf7c48f7234e524931bb10fa178&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Guaraná Antarctica Lata 350ml</div>
			<div class="descriitem">Refrigerante Guaraná</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600003&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;58bc587c09e9ecf43fa8c7aeaa189653&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3552/180/Expresso-Delivery_38312515c43eb419ef80188d455473af.jpg" alt="Refrigerante: Schweppes 1,5L - Refrigerante Limão" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600003&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;58bc587c09e9ecf43fa8c7aeaa189653&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Schweppes 1,5L</div>
			<div class="descriitem">Refrigerante Limão</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 8.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="8.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600005&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7f13aa46c4300d42d93317a8d1243b75&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3554/180/Expresso-Delivery_5c3a47320b16378ea17ad6e9f4a14557.jpg" alt="Refrigerante: Schweppes Lata 350ml - Refrigerante Limão" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600005&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7f13aa46c4300d42d93317a8d1243b75&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Schweppes Lata 350ml</div>
			<div class="descriitem">Refrigerante Limão</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600004&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;37aa691fb83941d752883bd4aa4b2ec1&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3553/180/Expresso-Delivery_e6327537557c901c6b778965ac93a3c5.jpg" alt="Refrigerante: Sprite 1,5L - Refrigerante Limão" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600004&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;37aa691fb83941d752883bd4aa4b2ec1&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Sprite 1,5L</div>
			<div class="descriitem">Refrigerante Limão</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 8.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="8.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;61&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7a8ffa94c77a6129d803abeb7cc60811&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x10" style="display: block;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/253/180/Expresso-Delivery_07c3e2d482cf94d40ef4814425659867.jpg" alt="Refrigerante: Sprite Lata 350ml - Refrigerante Limão" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;61&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7a8ffa94c77a6129d803abeb7cc60811&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Sprite Lata 350ml</div>
			<div class="descriitem">Refrigerante Limão</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600006&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;1ba7e64ba9916240fabace952bc4f5ac&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3555/180/Expresso-Delivery_49ae8868546b112751535f0afb8b0d6b.jpg" alt="Suco: Suco Casa Madeira Uva 1L - Suco Sabor Uva" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600006&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;1ba7e64ba9916240fabace952bc4f5ac&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco Casa Madeira Uva 1L</div>
			<div class="descriitem">Suco Sabor Uva</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 22.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="22.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600008&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;1788b25d3e94f0ac6abe5645f4ebaf09&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/3589/180/Expresso-Delivery_27838795a4f87fe513e0fe299b096e26.jpg" alt="Suco: Suco Casa Madeira Uva 500ml - Suco Sabor Uva" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600008&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;1788b25d3e94f0ac6abe5645f4ebaf09&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco Casa Madeira Uva 500ml</div>
			<div class="descriitem">Suco Sabor Uva</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 13.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="13.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600073&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7fb70ef4ba2aad9df717bd346731ca84&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6366/180/Expresso-Delivery_e17819bc02c9404bb9edf645371e8bd4.png" alt="Suco: Suco de Acerola 1L - Sabor Acerola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600073&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7fb70ef4ba2aad9df717bd346731ca84&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Acerola 1L</div>
			<div class="descriitem">Sabor Acerola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 11.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="11.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600067&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;b4eec0df524b1e4817197c3ce9e0221c&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6300/180/Expresso-Delivery_a77a62b731aa1dcde908663723ccf25f.jpg" alt="Suco: Suco de Acerola 300ml - Sabor Acerola" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600067&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;b4eec0df524b1e4817197c3ce9e0221c&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Acerola 300ml</div>
			<div class="descriitem">Sabor Acerola</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 4.50
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="4.50">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600075&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;6768a397bb0e62ff44a64f66f40df671&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6368/180/Expresso-Delivery_3a714bfbea2e62daa0d9cebb267e1199.png" alt="Suco: Suco de Cajá 1L - Sabor Cajá" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600075&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;6768a397bb0e62ff44a64f66f40df671&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Cajá 1L</div>
			<div class="descriitem">Sabor Cajá</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 12.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="12.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600069&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;a639c67a1867cb9f7f4c15630b93b09b&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6302/180/Expresso-Delivery_1a02b9a389fd49fbc0ebe08effe5816e.jpg" alt="Suco: Suco de Cajá 300ml - Sabor Cajá" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600069&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;a639c67a1867cb9f7f4c15630b93b09b&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Cajá 300ml</div>
			<div class="descriitem">Sabor Cajá</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600011&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;6a9be2fddc656ebd06759701c663ad0d&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35452/180/Expresso-Delivery_f80aa7376085ca9445018bc698af42d5.png" alt="Suco: Suco de Laranja Integral 1L - Suco de Laranja Integral New Frut." class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600011&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;6a9be2fddc656ebd06759701c663ad0d&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Laranja Integral 1L</div>
			<div class="descriitem">Suco de Laranja Integral New Frut.</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 12.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="12.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600072&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7674d5f0534313d1e1e62bfb5a28b7ae&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6365/180/Expresso-Delivery_c5ee7084f975872d25a79dd0f2cc8dea.png" alt="Suco: Suco de Maracujá 1L - Suco Maracujá" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600072&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7674d5f0534313d1e1e62bfb5a28b7ae&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Maracujá 1L</div>
			<div class="descriitem">Suco Maracujá</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 13.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="13.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600066&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;b86a379e86598c36be0dc3b947eab0bf&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6299/180/Expresso-Delivery_83d37e258e53b95ad9476f8572bd4742.jpg" alt="Suco: Suco de Maracujá 300ml - Sabor Maracujá" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600066&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;b86a379e86598c36be0dc3b947eab0bf&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Maracujá 300ml</div>
			<div class="descriitem">Sabor Maracujá</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600074&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;3af715bf62836dd56110bb020134c968&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6367/180/Expresso-Delivery_c7f920f12140c56143ab24d76378c646.png" alt="Suco: Suco de Morango 1L - Sabor Morango" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600074&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;3af715bf62836dd56110bb020134c968&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Morango 1L</div>
			<div class="descriitem">Sabor Morango</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 12.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="12.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600068&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;0fd9fe67abd1add547f5a7e8d015356c&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6301/180/Expresso-Delivery_cb4fbea197e45754f6b1042eb6d4509a.jpg" alt="Suco: Suco de Morango 300ml - Sabor Morango" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600068&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;0fd9fe67abd1add547f5a7e8d015356c&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Morango 300ml</div>
			<div class="descriitem">Sabor Morango</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600076&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;9616b9fde4fa4301a0b19a3d9c135061&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6369/180/Expresso-Delivery_82bc0d9b165aa507804fcaa5cdaeb2a7.png" alt="Suco: Suco de Pitanga 1L - Sabor Pitanga" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600076&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;9616b9fde4fa4301a0b19a3d9c135061&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Pitanga 1L</div>
			<div class="descriitem">Sabor Pitanga</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 12.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="12.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600070&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;186bc47746cad6dd7cf72ee472b552a8&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x13" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/6303/180/Expresso-Delivery_24318d858a85a01377d1b1d209a9d1a1.jpg" alt="Suco: Suco de Pitanga 300ml - Sabor Pitanga" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600070&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;186bc47746cad6dd7cf72ee472b552a8&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Suco de Pitanga 300ml</div>
			<div class="descriitem">Sabor Pitanga</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 5.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="5.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3276636&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;19709b16aae833144a29f5e88b64197f&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x11" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/40535/180/Expresso-Delivery_853d40115169c11b10f2b768f8bab9cf.jpg" alt="Cerveja: Budweiser 343ml - Cerveja" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3276636&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;19709b16aae833144a29f5e88b64197f&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Budweiser 343ml</div>
			<div class="descriitem">Cerveja</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 7.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="7.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;3276635&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7287b687a932ca30f0e56887270d0f8f&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x11" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/40534/180/Expresso-Delivery_08515fc71fc74bf4acdd6b8c8c2656bb.jpg" alt="Cerveja: Heineken 355ml - Cerveja" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;3276635&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;7287b687a932ca30f0e56887270d0f8f&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Heineken 355ml</div>
			<div class="descriitem">Cerveja</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 7.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="7.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;67&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;4b89ba9003a50dfa51228cc3ce21e109&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x12" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/259/180/Expresso-Delivery_01ffa5075428f160290c94ba3976712a.jpg" alt="Água: Água 500ml - Água" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;67&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;4b89ba9003a50dfa51228cc3ce21e109&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Água 500ml</div>
			<div class="descriitem">Água</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 3.20
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="3.20">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;68&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;2af021747ff6b4f3051efa01dbd433a9&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x6 clk_categoria_x12" style="display: none;">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/260/180/Expresso-Delivery_47ea01bef9a5cf26af6439e15ad13bd7.jpg" alt="Água: Água c/Gás 500ml - Água" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;68&quot;,&quot;codtipo&quot;:&quot;6&quot;,&quot;hashitem&quot;:&quot;2af021747ff6b4f3051efa01dbd433a9&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Água c/Gás 500ml</div>
			<div class="descriitem">Água</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 3.90
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="3.90">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<h3 class="msg_naohaitenstc" style="display:none;">Nenhum item encontrado.<br>Selecione outro tamanho ou categoria acima.</h3>
	</div>
</div>
<div class="item_e" id="grupo_sessao_13">
	<h3 class="tit-cont">Sobremesas</h3>
	<div class="listade_produtos" style="border:none; margin-top: 20px;">
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600081&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;638de0a12b11ffc1361a67efb8cae40b&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x13 clk_categoria_x26">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35561/180/Expresso-Delivery_2845a610af583ca661c1f6f32760e9b1.png" alt="Sobremesas: Açaí Paletitas 500gr - Açaí tradicional Paletitas" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600081&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;638de0a12b11ffc1361a67efb8cae40b&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Açaí Paletitas 500gr</div>
			<div class="descriitem">Açaí tradicional Paletitas</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 16.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="16.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600079&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;a79d914519de457c27d7eac176b10726&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x13 clk_categoria_x26">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35562/180/Expresso-Delivery_5473c098309c7436b3fbcc7ed899eafe.png" alt="Sobremesas: Sorvete Crunchy Maltine 900ml - Sorvete Paletitas sabor crunchy maltine 900ml" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600079&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;a79d914519de457c27d7eac176b10726&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Sorvete Crunchy Maltine 900ml</div>
			<div class="descriitem">Sorvete Paletitas sabor crunchy maltine 900ml</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 19.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="19.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;86&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;1ee379bf7940059f644d4e753c3fdaad&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x13 clk_categoria_x26">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35559/180/Expresso-Delivery_4237a27b9db9fe6e4f4a2488cecdb282.png" alt="Sobremesas: Sorvete Paleblito 900ml - Sorvete Paletitas sabor Paleblito 900ml" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;86&quot;,&quot;codtipo&quot;:&quot;13&quot;,&quot;hashitem&quot;:&quot;1ee379bf7940059f644d4e753c3fdaad&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Sorvete Paleblito 900ml</div>
			<div class="descriitem">Sorvete Paletitas sabor Paleblito 900ml</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 19.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="19.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<h3 class="msg_naohaitenstc" style="display:none;">Nenhum item encontrado.<br>Selecione outro tamanho ou categoria acima.</h3>
	</div>
</div>
<div class="item_e" id="grupo_sessao_600004">
	<h3 class="tit-cont">Paletas</h3>
	<div class="listade_produtos" style="border:none; margin-top: 20px;">
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600052&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;d8f3cf9461b6856a5569b870260969bd&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35460/180/Expresso-Delivery_2f21a23ab07375830e8fafa27bb6bd13.png" alt="Paletas: Avelana - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600052&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;d8f3cf9461b6856a5569b870260969bd&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Avelana</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600053&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;a5f3be5b72486caad5d44f273b6b006e&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35563/180/Expresso-Delivery_3922af16d1ab38cfe0d9660dcb8b87b6.png" alt="Paletas: Creme trufado - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600053&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;a5f3be5b72486caad5d44f273b6b006e&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Creme trufado</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600051&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;91df488fa21ae30ffc6647ad07f330a7&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35610/180/Expresso-Delivery_498e97f809cd6197d4f59efa4c94171c.png" alt="Paletas: Crunchy Maltine - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600051&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;91df488fa21ae30ffc6647ad07f330a7&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Crunchy Maltine</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600054&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;3b9fc77551c5fb12d7708b45e65356da&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35573/180/Expresso-Delivery_5545af6808b6a2a8b887db0f2012f62f.png" alt="Paletas: Menta trufada - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600054&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;3b9fc77551c5fb12d7708b45e65356da&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Menta trufada</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600058&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;f2e95c9d7f485e302c8d04d2b45cc0cd&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35459/180/Expresso-Delivery_62c91e70944458e18c320b69d484c99e.png" alt="Paletas: Morango com Leite Condensado - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600058&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;f2e95c9d7f485e302c8d04d2b45cc0cd&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Morango com Leite Condensado</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600059&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;19e19417b9b5c4f2653d081036763183&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35460/180/Expresso-Delivery_2f21a23ab07375830e8fafa27bb6bd13.png" alt="Paletas: Ninho Trufado - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600059&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;19e19417b9b5c4f2653d081036763183&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Ninho Trufado</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600056&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;54489da79635882f00aa951e5c710303&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35610/180/Expresso-Delivery_498e97f809cd6197d4f59efa4c94171c.png" alt="Paletas: Tentación - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600056&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;54489da79635882f00aa951e5c710303&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Tentación</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<div itemscope="" itemtype="http://schema.org/Product" data-dadositem="{&quot;coditem&quot;:&quot;600055&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;66c4c947afc6949e56acdd4fafd2b1a0&quot;}" class="box-produto hvr-overline-from-left compraritemso clk_sessao_x600004 clk_categoria_x600007">
			<div class="image-prod">
				<img itemprop="image" src="https://static.expressodelivery.com.br/imagens/produtos/35563/180/Expresso-Delivery_3922af16d1ab38cfe0d9660dcb8b87b6.png" alt="Paletas: Torta de limão - Paleta Mexicana" class="imgprod noradiuns"><a href="#" title="Adicionar item ao pedido" data-dadositem="{&quot;coditem&quot;:&quot;600055&quot;,&quot;codtipo&quot;:&quot;600004&quot;,&quot;hashitem&quot;:&quot;66c4c947afc6949e56acdd4fafd2b1a0&quot;}" class="clk_botao_itemsimples btn-ter-item socomprar "><span class="inbtncomprar">Comprar</span></a>
			</div>
			<div itemprop="name" class="nome-prod">Torta de limão</div>
			<div class="descriitem">Paleta Mexicana</div>
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="preco-prod">R$ 9.00
				<meta itemprop="priceCurrency" content="BRL">
				<meta itemprop="price" content="9.00">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>
		</div>
		<h3 class="msg_naohaitenstc" style="display:none;">Nenhum item encontrado.<br>Selecione outro tamanho ou categoria acima.</h3>
	</div>
</div>
<section class="banners-combo">
	<h3 class="tit-home">Combos e Promoções</h3>
	<div class="box_combo  ">
		<a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;973416&quot;,&quot;data_hash&quot;:&quot;72fb8354a7cf7dc0f683fa5876065895&quot;}">
			<img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/42270/Expresso-Delivery_3242bce1a6def10258cc29c5ddb06b3b.png"> <span class="box_combo_nome">A queridinha da casa voltou! </span><span class="box_combo_descricao">A #promoção da queridinha da casa está de volta! Nossa #CalabresaEspecial está saindo por R$34,99 neste mês de agosto. Faça seu #PedidoOnline. </span>
		</a>
	</div>
	<div class="box_combo  ">
		<a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;887416&quot;,&quot;data_hash&quot;:&quot;8dae2914bb47e78764cedff3c537b6c9&quot;}">
			<img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/19091/Expresso-Delivery_e487d86c5ce0d3ed806aed1a0174e4e9.jpg"> <span class="box_combo_nome"># Pizza G + Pizza M + Pizza doce por R$ 112,00 </span><span class="box_combo_descricao">Pizza G (qualquer sabor especial) + Pizza M (qualquer sabor especial) + Pizza doce (qualquer sabor doce) por R$ 112,00 </span>
		</a>
	</div>
	<div class="box_combo  ">
		<a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;887417&quot;,&quot;data_hash&quot;:&quot;913010537144fb0256477d0fb5119e51&quot;}">
			<img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/19044/Expresso-Delivery_7606b70393dfc6aa6290b442ff72b4d8.jpg"> <span class="box_combo_nome"># 2 pizzas G + refrigerante 1,5L por R$ 97,00 </span><span class="box_combo_descricao">2 pizzas G (especiais) + refrigerante 1,5L (qualquer sabor) por R$ 97,00 </span>
		</a>
	</div>
	<div class="box_combo  ">
		<a href="#" class="openCombo" data-dadoscombo="{&quot;data_cod&quot;:&quot;887418&quot;,&quot;data_hash&quot;:&quot;70fa06b8f507ebcf5343da272c63d1bd&quot;}">
			<img class="box_combo_imagem" src="https://static.expressodelivery.com.br/imagens/banners/19092/Expresso-Delivery_d7b17287e82f0a268c68e1658f0c8df4.jpg"> <span class="box_combo_nome"># 3 pizzas G + Pizza doce + Refrigerante 1,5L por R$ 169,00 </span><span class="box_combo_descricao">3 pizzas G (tradicionais ou especiais) + Pizza doce (qualquer sabor) + Refrigerante 1,5L (qualquer sabor) por R$ 169,00 </span>
		</a>
	</div>
</section>
</section>
<!-- cont-left -->
<section class="cont-dir">
	<section class="colum_move" id="pedido-dir" style="margin-top: 1078px;">
		<div class="top-ing">
			<p class="tit-ing" id="tit-listaing"><span class="icon24"></span>Meu Pedido</p>
		</div>
		<div id="cont_resumo">
			<!-- itens do pedido -->
		</div>
		<!-- cont_menu -->
		<div id="total-finaliza-ped">
			<!-- totais do pedido -->
		</div>
	</section>
</section>
<!-- cont-dir -->
</div>

@endsection