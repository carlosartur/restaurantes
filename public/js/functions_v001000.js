/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function alinhaHeaderFooter(modal){
    //console.log(modal);
    //$(".headermodal_").hide();
    //$(".footermodal_").hide();
    var estrut = modal.find(".estruturamodal_");
    if(estrut.hasClass("header-sim_")){
        var headmd = modal.find(".headermodal_");
        //console.log(headmd);
        //headmd.show();
        var height_header = headmd.height();
        //console.log(height_header);
       // $(".estruturamodal_").css("padding-top",height_header+"px");
        $(".estruturamodal_").css("padding-top","160px"); /**HUDSON**/
                
        //headmd.css("height",height_header+"px");
        //console.log(headmd.height());
    }
    
    if(estrut.hasClass("footer-sim_")){
        var footermd = modal.find(".footermodal_");
        //footermd.show();
        var height_footer = footermd.height();
        height_footer = height_footer-3;
        //estrut.css("padding-bottom",height_footer+"px !important");
        $(".estruturamodal_").css("padding-bottom",height_footer+"px");
    }
    //console.log(headmd);
}

function rendPromocaoAtiva(){
    var cancelapromocao = false;
    $("#promocao_nomePromocao").text(promocaomontando.promocao_nome);
    $("#promocao_descricaoPromocao").text(promocaomontando.promocao_descricao);
    
    var codabaclickar = [];
    
    var html_liaba = "";
    var html_divlistas = "";
    
    var primeiraaba = null;
    var dados_itensselecpromo = {codpromo : null, codpromoacm : null, itens : [] };
    var cnt_qtditempremio = promocaomontando.promocao_itenspremios.length;
    for(var d=0; d<cnt_qtditempremio; d++){
        dados_itensselecpromo.codpromo = promocaomontando.promocao_id;
        dados_itensselecpromo.codpromoacm = promocaomontando.promocao_idacm;
        var confiditem = promocaomontando.promocao_itenspremios[d].confitem;
        //console.log(confiditem);
        var sessao = get_dadosSessao(confiditem.tipo);
        
        var tamanho = get_tamanho_dados(confiditem.tamanho);
        var borda = get_borda_dados(confiditem.borda, confiditem.tamanho);
        var massa = get_massa_dados(confiditem.massa, confiditem.tamanho);
        var sabores = get_nomes_sabores(confiditem.sabor, confiditem.tamanho);
        var cntsa = sabores.length;
        //console.log(sabores);
        
        if(cntsa == 0){
            cancelapromocao = true;
        }
        
        var tamanhonome = "";
        var nome = "";
        if(tamanho !== false){
            tamanhonome+= tamanho.tamanho_nome + " de ";
        }if(massa !== false){
            nome+= " + " + massa.massa_nome;
        }if(borda !== false){
            nome+= " + " + borda.borda_nome;
        }
        var codaba = gerarValor(8,true,true);
        primeiraaba = (primeiraaba==null)? codaba : primeiraaba;
        //console.log(sabores);
        dados_itensselecpromo.itens[d] = {
			codrefpromo : codaba, 
			codrefitem : null, 
			precoitem : 0, 
			hashitem : promocaomontando.promocao_itenspremios[d].coditem
		};
        //console.log(promocaomontando.promocao_itenspremios[d]);
        //console.log(dados_itensselecpromo.itens[d]);
        var abapromoatv = (d==0)? " abaprmactive " : "";
        html_liaba +="<li class='clk_aba_promocompreganhe "+abapromoatv+"' data-codaba='"+codaba+"'>"+sessao.sessao_nome+"</li>";
        
        html_divlistas += "<div class='lista_itens_aba aba_"+codaba+"'>";
        if(cntsa === 1){
            var cntmumck = codabaclickar.length;            
            codabaclickar[cntmumck] = codaba+"";
        }
        for(var te=0; te<cntsa; te++){
            var fnome = tamanhonome + sabores[te].sabor_nome + nome;
            var dadositens = html_itemselecionarPromo_cg(codaba, fnome, sabores[te]);
            if(dadositens !== false){
                html_divlistas += dadositens;//html_itemselecionarPromo_cg(codaba, fnome, sabores[te]);
            }
        }
        html_divlistas+="</div>";        
    }
    
    $(".abasitenspromo").html(html_liaba);
    $("#lista_itenspromocao").html(html_divlistas);
    $("#lista_itenspromocao").data("itensselecionados",dados_itensselecpromo);
    $(".lista_itens_aba").hide();
    $(".aba_"+primeiraaba).show();
    
    var cntclickpromo = codabaclickar.length;
    if(cntclickpromo > 0){
        for(var i_ck = 0; i_ck < cntclickpromo; i_ck++){
            $("."+codabaclickar[i_ck]+".btn_sel_item.additempromo_cg").trigger("click");
        }
    }
    
    if(cancelapromocao === true){
        $("#modalItensPromo").modal("hide");
        $("#modalQuestionPromo").modal("hide");
    }
    
}

function html_itemselecionarPromo_cg(codaba, nomesabor, dadossabor, preco){
	//console.log(dadossabor);
    var foto = dadossabor.sabor_fotoid + "/150/" + dadossabor.sabor_fotonome;
    return '<div class="item_simp_comb zeroitem '+codaba+' " data-codrefpromo="'+codaba+'">'
            +   '<img src="'+urlsfiles.imagens+'produtos/'+foto+'" alt="'+nomesabor+'" width="110">'
            +   '<p>'+nomesabor+'</p>'
            +   '<a href="#" title="Selecionar" class="btn_sel_item additempromo_cg '+codaba+'" data-codrefpromo="'+codaba+'" data-precoitem="'+dadossabor.sabor_precopromocao+'" data-codsabor="'+dadossabor.sabor_id+'" >Selecionar</a>'
            +'</div>';
    
}

function set_promocaoCompreGanhe(dados){
    $.ajax({
        method: "POST",
        url: "/exec/pedido/promocaocompreganhe",
        data: dados,
        dataType : "json"
    }).done(function( msg ) {
        if(msg.res === true){
            $('#modalItensPromo').modal("hide");            
            get_resumoPedido();    
            $("#add_promocao_cg").removeClass("ativo");
        }else if(msg.res === false){
            
        }else{
            
        }
    });
}

function check_itensPromocaoSelecionados(){
	var dados_promocg_atual = $("#lista_itenspromocao").data("itensselecionados");
    // dados_promocg_atual.itens[ds].precoitem
	//promocaomontando;
	var precopromoescrt = "GRÁTIS";
	if(promocaomontando.promocao_tipodesconto == "porcentagem"){
		var vlpctg = promocaomontando.promocao_valordesconto;
		var total = 0;
		console.log(dados_promocg_atual);
		if(dados_promocg_atual.itens != undefined){
			var cnt_dadospromo = dados_promocg_atual.itens.length;
			for(var ds=0; ds<cnt_dadospromo; ds++){
				total += parseFloat(dados_promocg_atual.itens[ds].precoitem);
			}
			precopromoescrt = "R$ "+  parseReal(total * (1 - (vlpctg/100)) );
		}else{
			precopromoescrt = "";
		}
	}else if(promocaomontando.promocao_tipodesconto == "porapenas"){
		if(dados_promocg_atual.itens != undefined){
			var vlpctg = promocaomontando.promocao_valordesconto;
			precopromoescrt = "R$ "+  parseReal(vlpctg);
		}else{
			precopromoescrt = "";
		}
	}
	
	$(".realprecopromo").text(precopromoescrt);
	
    
    //console.log(dados_promocg_atual);
    var cnt_dadospromo = dados_promocg_atual.itens.length;
    for(var ds=0; ds<cnt_dadospromo; ds++){
        if(null == dados_promocg_atual.itens[ds].codrefitem){
            return false;
        }
    }
    $("#add_promocao_cg").addClass("ativo");
	$('#add_promocao_cg').animateCss('tada');
}

function showMsgItemAdd(){
    
    $(".itemaddcionado").stop().fadeIn( 500 , function(){
        setTimeout(function(){
            $(".itemaddcionado").stop().fadeOut( 500 );
        },2000);
    });
    
    
}

$(document).ready(function(){
    
    $(document).on("click",".openCombo",function(e){
        var dadosmontcombo = $(this).data("dadoscombo");    
        if(dadosmontcombo!==false && dadosmontcombo!==undefined){
            buscaConfComboMontador(dadosmontcombo,"combo");
            $("#montDorCombo").modal("show");
        }else{
            $("#montDorCombo").modal("hide");
            openAlert("Este combo não é válido para hoje!", "Atenção!!");
            fechaModalUniv(2);
        }
    });
    
    $(document).on("click",".openCombinado",function(e){
        var dadosmontcombo = $(this).data("dadoscombo");    
        if(dadosmontcombo!==false && dadosmontcombo!==undefined){
            buscaConfComboMontador(dadosmontcombo,"combinado");
            $("#montDorCombo").modal("show");
        }else{
            $("#montDorCombo").modal("hide");
            openAlert("Este combo não é válido para hoje!", "Atenção!!");
            fechaModalUniv(2);
        }
    });
    
    $('#modalQuestionPromo').on('shown.bs.modal', function() {
        alinhaHeaderFooter($(this));
    });
    
    $('#modalItensPromo').on('shown.bs.modal', function() {
        alinhaHeaderFooter($(this));       
        rendPromocaoAtiva();
    });
    
    $(document).on("click", ".additempromo_cg", function(e){
        var codref = $(this).data("codrefpromo");
        var codsabor = $(this).data("codsabor");
		var precoitem = $(this).data("precoitem");
        var dados_promocg_atual = $("#lista_itenspromocao").data("itensselecionados");
        var cnt_dadospromo = dados_promocg_atual.itens.length;
        for(var ds=0; ds<cnt_dadospromo; ds++){
            if(codref == dados_promocg_atual.itens[ds].codrefpromo){
                dados_promocg_atual.itens[ds].codrefitem = codsabor;
				dados_promocg_atual.itens[ds].precoitem = precoitem;
                $("#lista_itenspromocao").data("itensselecionados",dados_promocg_atual);
                $(".item_simp_comb."+codref).removeClass("selecionado");
                var parent = $(this).parent();
                parent.addClass("selecionado");                
            }
        }
        check_itensPromocaoSelecionados();
    });
    
    $("#add_promocao_cg").click(function(e){
        if($(this).hasClass("ativo")){
            var dados_promocg = $("#lista_itenspromocao").data("itensselecionados");
            set_promocaoCompreGanhe(dados_promocg);
        }
    });
	
	$(document).on("click",".qtdpromorej", function(e){
		promocoesRejeitadas = [];
		var ywydvg = promocoesRejeitadas.join("and");
		setCookie("promocoesrejeitadas", ywydvg);
		rendPromocaoRT();
	});
    
    $("#question_botaonaoaceito").click(function(e){
        $("#modalQuestionPromo").modal("hide");
		var cnt_rej = promocoesRejeitadas.length;
		
		if( !in_array(promocaomontando.promocao_id, promocoesRejeitadas)){
			//console.log(promocaomontando.promocao_id);
			promocoesRejeitadas[cnt_rej] = clone(promocaomontando.promocao_id);
			
			var ywydvg = promocoesRejeitadas.join("and");
			setCookie("promocoesrejeitadas", ywydvg);
			//console.log(cnt_rej);
			//console.log(promocoesRejeitadas);
			if(promocoesRejeitadas.length>0){
				$(".qtdpromorej").show();
				$(".qtdpromorej").text("Promoções rejeitadas: "+promocoesRejeitadas.length+" - clique aqui para liberar");
			}else{
				$(".qtdpromorej").hide();
			}
			rendPromocaoRT();
		}
    });
    
    $("#question_botaoaceito").click(function(e){
        var datacod = $("#question_botaonaoaceito").data("codrefpromo");
        //console.log(datacod);
        $('#modalQuestionPromo').modal("hide");
        setTimeout(function(){
            $("#modalItensPromo").modal("show");
        },600);
    });
    
    $(document).on("click",".clk_aba_promocompreganhe", function(){
        if( !($(this).hasClass("abaprmactive")) ){
            $(".clk_aba_promocompreganhe").removeClass("abaprmactive");
            $(this).addClass("abaprmactive");
            var codsessao = $(this).data("codaba");
            $(".lista_itens_aba").hide();
            $(".aba_"+codsessao).show();
        }
    });
    
    $(document).on("click",'.btndetalhes_resumo',function(e){
        var prt = $(this).parent();
        prt.children('.personalizacoes_item').toggle();
        $(this).children(".material-icons").toggle();
    });
    
    $(document).on("click","#btn_finalizar_pedido",function(e){
        document.location.href = "/finalizar-pedido/";
    });
    
    /*
     * Click botão adicionar item sem personalização
     */
    $(document).on("click", ".clk_botao_itemsimples", function(e){
        var dados = $(this).data("dadositem");
        add_item(dados);
    });
    
    /*
     * Click botão adicionar item com personalização
     */
    $(document).on("click", ".clk_botao_itempersonal", function(e){
        var dados = $(this).data("dadositem");
        var mtdr = $(this).data("montador");
        
        add_item(dados, mtdr);
    });
    
    //
    $(document).on("click", ".deletar_item", function(e){
        var prt = $(this).parent();
        var dados = prt.data("dadosalteracao");        
        acoesItemPedido(dados,"deletar");
    });
    
    $(document).on("click", ".deletarcombo_item", function(e){
        var prt = $(this).parent();
        var dados = prt.data("dadosalteracao");        
        acoesComboPedido(dados,"deletar");
    });
    
    $(document).on("click", ".addmais_item", function(e){
        var prt = $(this).parent();
        var dados = prt.data("dadosalteracao");        
        acoesItemPedido(dados,"aumentar");
    });
    $(document).on("click", ".addmenos_item", function(e){
        var prt = $(this).parent();
        var dados = prt.data("dadosalteracao");        
        acoesItemPedido(dados,"diminuir");
    });
    
    $(document).on("click", ".editar_combopedido", function(e){
        var prt = $(this).parent();
        var dados = prt.data("dadosalteracao");        
        acoesComboPedido(dados,"editar");
		$(".fechar_modal").hide();
    });
    $(document).on("click", ".editar_itempedido", function(e){
        var prt = $(this);
        var dados = prt.data("dadosalteracao");        
        acoesItemPedido(dados,"editar");
    });
    
    


    $(".linksess").click(function(e){
        $(".listamenucardapio").removeClass("ativo");
        $(this).parent().addClass("ativo");
        var valor_sessao = $(this).data("sessao");
        $("#grupo_sessao_"+valor_sessao).trigger("click");

        if( !$("#grupo_sessao_"+valor_sessao).hasClass("showsessao") ){
            $(".item_e").removeClass("showsessao");
           $("#grupo_sessao_"+valor_sessao).addClass("showsessao");
        }

        if($("#selccc_"+valor_sessao).length>0){
            $("#selccc_"+valor_sessao).trigger("change");
        }
        if($(".abbb_"+valor_sessao).length>0){
            $(".abbb_"+valor_sessao+".abaativa").trigger("click");
        }
    });

    $(document).on("click",".aba_sessao", function(e){

        //if( !$(this).hasClass("abaativa") ){
        $(".msg_naohaitenstc").hide();
        var tipo = $(this).data("tipo");
        var sessao_th = $(this).data("codsessao");
        var cod = $(this).data("cod");

        $(".abbb_"+sessao_th).removeClass("abaativa");
        $(this).addClass("abaativa");

        var selec_x = false;
        if($("#selccc_"+sessao_th).length>0){
            selec_x = $("#selccc_"+sessao_th).val();
        }
        $(".clk_sessao_x"+sessao_th).hide();
        if(tipo == "categoria"){
            if(selec_x != false){
                $(".clk_tamanho_x"+selec_x+".clk_categoria_x"+cod).show();
                if($(".clk_tamanho_x"+selec_x+".clk_categoria_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }else{
                $(".clk_categoria_x"+cod).show();
                if($(".clk_categoria_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }
        }else if(tipo == "tamanho"){
            if(selec_x != false){
                $(".clk_tamanho_x"+cod+".clk_categoria_x"+selec_x).show();
                if($(".clk_tamanho_x"+cod+".clk_categoria_x"+selec_x).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }else{
                $(".clk_tamanho_x"+cod).show();
                if($(".clk_tamanho_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
                //console.log("tamanho" + cod);
            }
        }
        //}
    });

    $(document).on("change", ".select_sessao", function(e){
        $(".msg_naohaitenstc").hide();
        var tipo = $(this).data("tipo");
        var sessao_th = $(this).data("codsessao");
        var cod = $(this).val();

        var selec_x = false;
        if($(".abbb_"+sessao_th+".abaativa").length>0){
            selec_x = $(".abbb_"+sessao_th+".abaativa").data("cod");

        }
        $(".clk_sessao_x"+sessao_th).hide();
        if(tipo == "categoria"){
            if(selec_x != false){
                $(".clk_tamanho_x"+selec_x+".clk_categoria_x"+cod).show();
                
                if($(".clk_tamanho_x"+selec_x+".clk_categoria_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
                
            }else{
                $(".clk_categoria_x"+cod).show();
                if($(".clk_categoria_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }
        }else if(tipo == "tamanho"){
            if(selec_x != false){
                $(".clk_tamanho_x"+cod+".clk_categoria_x"+selec_x).show();
                if($(".clk_tamanho_x"+cod+".clk_categoria_x"+selec_x).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }else{
                $(".clk_tamanho_x"+cod).show();
                if($(".clk_tamanho_x"+cod).length == 0){
                    $(".msg_naohaitenstc").show();
                }
            }
        }
    });
    
    
});


function acoesItemPedido(dados,acao){
    var dadosacao = {
        dados : dados,
        acao : acao
    };
    
    $.ajax({
        method: "POST",
        url: "/exec/pedido/itempedido/",
        data: dadosacao,
        dataType : "json"
    }).done(function( msg ) {
        if(msg.res === true){            
            if(msg.dados != undefined){
                if(msg.dados.acao === "editar"){
                    //console.log("jjaaj");
                    if(msg.dados.redirect != undefined && msg.dados.redirect != false){
                        document.location.href = msg.dados.redirect;
                    }else{
                        var codgerado = gerarValor(8,true,true);                    
                        openModalItem_editar(codgerado);
                        setTimeout(function(){
                            $("#montDor").modal("show");
                            peencheDadosRetorno(msg,codgerado);
                            peencheMontadorItem(codgerado);
                        },200);
                    }
                }
            }            
            get_resumoPedido();            
        }else if(msg.res === false){ }else{ }
    });
}

function acoesComboPedido(dados,acao){
    var dadosacao = {
        dados : dados,
        acao : acao
    };
    
    $.ajax({
        method:"POST",
        url: "/exec/pedido/itemcombopedido/",
        data:dadosacao,
        dataType: "json"
    }).done(function( msg ) {
        if(msg.res === true){
            //rendAbrirItem(msg.dados);
            if(acao === "editar"){
                
                if(pgr !== undefined && pgr === true){
                    document.location.href = msg.dados.redirect;
                }else{                
                    $(".btnfinaliza_combo").addClass("ativo");
                    $("#montDorCombo").modal("show");
                    editar_reendInfoCombo(msg.dados, msg.dados.hash);
                    //editar_reendAbasCombo(msg.dados.itens, msg.dados.hash);
                }
            }
            get_resumoPedido();   
        }else if(msg.res === false){
            //document.location.reload();
        }else{
            
        }
    });
}


function removerComboPedido(dados){
    $.ajax({
        method: "POST",
        url: "/exec/pedido/removercombo",
        data: dados,
        dataType : "json"
    }).done(function( msg ) {
        if(msg.res === true){ 
            get_resumoPedido();            
        }else if(msg.res === false){            
            
        }else{
            
        }
    });
}

function add_item(dados, mdtr){
    $.ajax({
        method: "POST",
        url: "/exec/pedido/adicionaritem",
        data: dados,
        dataType : "json"
    }).done(function( msg ) {
        if(msg.res === true){
            if(msg.dados !== false){
                //console.log(mdtr);
                if(mdtr != false && mdtr != undefined){
                    document.location.href = msg.dados.redirect;
                }else{
                    var codgerado = gerarValor(8,true,true);
                    rendAbrirItem(msg, codgerado);
                    $("#montDor").modal("show");
                }
            }else{
                showMsgItemAdd();
                get_resumoPedido();
            }
        }else if(msg.res === false){            
            
        }else{
            
        }
    });
}


function get_resumoPedido(){
    $.ajax({
        method: "POST",
        url: "/exec/pedido/pedido",
        data: { acao : "resumo" },
        dataType : "json"
    }).done(function( msg ) {
        if(msg.res === true){ 
            resumo = msg.resumo;
            promocoesAtivas = msg.promocaoAtiva;
            renderizaResumo();
            //rendResumoNew();
            rendPromocaoRT();
        }else if(msg.res === false){            
            renderizaResumo();
        }else{
            
        }
    });


}


function rendPromocaoRT(){
    /*
    var showModalpromocao = false;
    var promocoesAtivas = [];
     */
    
    /*
    promocao_descricao:"sd fhsdhsdh sdf"
        promocao_itenspremios:[{coditem: "a370e2dd779b077c9cd11989738f2211",…}]
        borda:null
        massa:null
        qtd:1
        quantidademaxsabor:null
        sabor:[18, 1, 5, 3, 6, 7, 4, 2, 21]
        tamanho:null
        tipo:1
    promocao_nome:"dsf sdf sdhsdf"
    promocao_tipodesconto:"porapenas"
    promocao_valordesconto:"1.00"
    
     */
	$(".realprecopromo").text("");
    var cnt_promocao = promocoesAtivas.length;
    if(cnt_promocao > 0){
		
        for(var i=0; i<cnt_promocao; i++){			
            var thisPromo = promocoesAtivas[i];
            if(thisPromo.promocao_tipodesconto == "gratis"){
                showModalpromocao = true;
                promocaomontando = thisPromo;
                showPromocaoGratis(thisPromo);
                i=cnt_promocao;
            }else{ // promocaomontando
                promocaomontando = thisPromo;
                if(!promocaoRejeitada(thisPromo)){
                    i=cnt_promocao;
                    showModalpromocao = true;                
                    showPromocaoComdesconto();
                }else{
                    if(is_array(promocoesRejeitadas)){
                        var prmrjet = promocoesRejeitadas.length;
                        if(prmrjet>0){
                            $(".qtdpromorej").show();
                            $(".qtdpromorej").text("Promoções rejeitadas: "+prmrjet+" - clique aqui para liberar");
                        }else{
                            $(".qtdpromorej").hide();
                            $(".qtdpromorej").text("");
                        }
                    }
                }
            }
        }
    }else{
		//promocoesRejeitadas = [];
		//setCookie("promocoesrejeitadas", promocoesRejeitadas);
	}
}


function promocaoRejeitada(promo){
    
    var cnt_rej = promocoesRejeitadas.length;
    for(var i=0; i<cnt_rej; i++){
        if(promocoesRejeitadas[i] == promo.promocao_id){
            console.log(promo);
            return true;
        }
    }
    return false;
}

function showPromocaoGratis(){
	
    $("#modalItensPromo").modal("show");
}

function showPromocaoComdesconto(){
    if(showModalpromocao){
        $(".question_nomepromocao").text(promocaomontando.promocao_nome);
        $(".question_descricaopromocao").text(promocaomontando.promocao_descricao);
        
        $("#question_botaonaoaceito").data("codrefpromo",{promocao_cod : promocaomontando.promocao_id, promocao_acm : promocaomontando.promocao_idacm});
                
        setTimeout(function(){
            $("#modalQuestionPromo").modal("show");
        }, 2000);
    }
}

/*
 * Funções para renderizar resumo
 */
function renderizaResumo(){
    var htmlresumo = "<div class='car-sem-item'> <img src='"+urlsfiles.media+vsao+"/img/emot-fome.png'> <img style='margin-top: 50px;' src='"+urlsfiles.media+vsao+"/img/seta-add-item.png'> </div>";
    var htmltotais = "";
    if(resumo != undefined){
        
        var itens = resumo.pedido_itens;
        if(itens != undefined && itens.length > 0){
            htmlresumo = "";
            htmltotais = gera_htmlResumoTotais();
            var cntitens = itens.length;
            for(var f=0; f<cntitens; f++){
                htmlresumo += gera_htmlItens_nw(itens[f]);
            }
        }
    }

    $("#cont_resumo").html(htmlresumo);
    $("#total-finaliza-ped").html(htmltotais);
    componentHandler.upgradeDom();
}

function gera_htmlResumoTotais(){
    var desconto = parseFloat(resumo.pedido_desconto);
    //var fretefull = parseFloat(resumo.pedido_fretede);
    var fretevalor = resumo.pedido_fretepor;
    //var fretedesconto = fretefull-fretevalor;
    var valorpedido = parseFloat(resumo.pedido_preco);
    
    var htmltotaisresumo = "<p id='sub_desc' class='preco-item-ped preco-itempizza-ped' style='display: none;width: 100%;padding: 6px 5px;font-size: 14px;'>"
    +        "<span class='subTotaoped'></span>"
    +        "<span class='descontoTotalped'></span>"
    +    "</p>";
    
    if(desconto > 0){
        /*htmltotaisresumo += "<p id='txttotal' class='preco-item-ped preco-itempizza-ped' style='margin-bottom: 15px;'>"
            +        "Desconto: R$ "+parseReal(desconto)
            +    "</p>";  HUDSON */
			
		htmltotaisresumo += "<p class='txtdesconto_resumo'>"
            +        "Desconto: R$ "+parseReal(desconto)
            +    "</p>";	
    }
    
    if(fretevalor != null){
        /*htmltotaisresumo += "<p id='sub_taxaent' class='preco-item-ped preco-itempizza-ped' style='width: 100%;padding: 12px 5px;font-size: 15px;'>"
            +        "<span class='txt_taxa'>Taxa de Entrega</span>"
            +        "<span id='valtaxa'> R$ "+parseReal(fretevalor)+"</span>"
            +    "</p>";*/
		
		htmltotaisresumo += "<p class='txtdesconto_resumo'>"
            +        "<span class='txt_taxa'>Taxa de Entrega</span>"
            +        "<span id='valtaxa'> R$ "+parseReal(fretevalor)+"</span>"
            +    "</p>";
    }
    htmltotaisresumo +=  "<p id='txttotal' class='preco-item-ped preco-itempizza-ped'>" /* style='margin-bottom: 15px;'*/
        +        "Valor Total do Pedido: R$ <span id='totalrs-ped'>"+parseReal(valorpedido)+"</span>"
        +    "</p>"
        +    "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' id='btn_finalizar_pedido' >"
        +        "<i class='material-icons'>check_circle</i> Finalizar Pedido"
        +    "<span class='mdl-button__ripple-container'><span class='mdl-ripple'></span></span></button>"
		+    "<span class='qtdpromorej'></span>";
    
    reendInfoCheckout();
    
    return htmltotaisresumo;
    
}

function reendInfoCheckout(){
    
    if($(".bl-taxa").length >0){
        var fretevalor = resumo.pedido_fretepor;
        var fretevalorde = resumo.pedido_fretede;
        
        if(fretevalor == null){
            $(".bl-taxa").text("Taxa de entrega: (calcular)");
        }else if(fretevalorde != undefined){
            try{
                fretevalorde = parseFloat(fretevalorde);
            }catch(eewe){
                fretevalorde = 0;
            }
            $(".bl-taxa").html("");
            $(".bl-taxa").text("Taxa de entrega:");
            if(fretevalorde >fretevalor){                
                $(".bl-taxa").append('<span class="preco_fretes"><span class="preco_de">de R$ '+parseReal(fretevalorde)+'</span><small>por R$ </small>'+parseReal(fretevalor)+'</span>');
            }else{
                $(".bl-taxa").append('<span class="preco_fretes">R$ '+parseReal(fretevalor)+'</span>');
            }
        }
    }
}

function gera_htmlItens(item){
    var htmlitem = "";
    var tipoitem = item.tipo;
    if(tipoitem === "combo"){
        htmlitem += gera_htmlCombo(item);
    }else if(tipoitem === "simples"){
        htmlitem += gera_htmlItemSimples(item);
    }else if(tipoitem === "composto"){
        htmlitem += gera_htmlItemComposto(item);
    }else if(tipoitem === "promocaocg"){
        htmlitem += gera_htmlPromocao_cg(item);
    }
    return htmlitem;        
}

function gera_htmlCombo(item){
    var combo_nome = item.nome;
    var combo_preco= parseReal(item.preco);
    var combo_economia = parseReal(item.economia);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var itens = item.itens;
    var cntitens = itens.length;
    
    var htmeconomia = "";
    if( parseFloat(item.economia)>0 ){
        htmeconomia = "<p class='economia'><i class='material-icons'>thumb_up</i> Você economizou R$ "+combo_economia+"</p>";
    }
    var html = "<div class='combo'  data-dadosalteracao='"+dadosmanip+"'>"
        +    "<p class='tit_combo_resumo'>"+combo_nome+": R$ "+combo_preco+"</p>"
        +    htmeconomia;

    for(var t=0; t<cntitens;t++){
        html+=   "<div class='item_resumo_combo'>"
            +        "<div class='det_item_resumo'>"
            +            "<p class='nomeitem_resumo'>"+itens[t].nome.linha1+"</p>"
            +            "<p class='descitem_resumo'>"+itens[t].nome.linha2+"</p>"
            +        "</div>"
            +        "<div class='clear'></div>"
            +    "</div>";
    }
    
    html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btn_excluircombo deletarcombo_item'><i class='material-icons'>delete</i> Excluir</button>"
        +    "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btneditar_combo editar_combopedido'><i class='material-icons'>edit</i> Editar Combo</button>"
        +"</div> ";
    
    return html;    
}



function gera_htmlPromocao_cg(item){
    var promocao_nome = item.nome;
    var promocao_preco= parseReal(item.preco);
    var combo_economia = parseReal(item.economia);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var itens = item.itens;
    var cntitens = itens.length;
    
    var precomostrar = ": R$" + promocao_preco;
    var precoreal = parseFloat(item.preco);
    if(promocao_preco > 0){
        precomostrar = " - Por apenas: R$ "+ promocao_preco;
    }else{
        precomostrar = " - Grátis";
    }
    
    var htmeconomia = "";
    if( parseFloat(item.economia)>0 ){
        htmeconomia = "<p class='economia'><i class='material-icons'>thumb_up</i> Você economizou R$ "+combo_economia+"</p>";
    }
    var html = "<div class='combo'  data-dadosalteracao='"+dadosmanip+"'>"
        +    "<p class='tit_combo_resumo'>"+promocao_nome+ precomostrar +"</p>"
        +    htmeconomia;

    for(var t=0; t<cntitens;t++){
        html+=   "<div class='item_resumo_combo'>"
            +        "<div class='det_item_resumo'>"
            +            "<p class='nomeitem_resumo'>"+itens[t].nome.linha1+"</p>"
            +            "<p class='descitem_resumo'>"+itens[t].nome.linha2+"</p>"
            +        "</div>"
            +        "<div class='clear'></div>"
            +    "</div>";
    }
    
    html+= "</div> ";

    /*html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btn_excluircombo deletarcombo_item'><i class='material-icons'>delete</i> Excluir</button>"
        +    "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btneditar_combo editar_combopedido'><i class='material-icons'>edit</i> Editar Combo</button>"
        +"</div> "; */
    
    return html;    
}


function gera_htmlItemSimples(item){
    
    var preco = parseFloat(item.preco.venda);
    var precooriginal = parseFloat(item.preco.original);
    var desconto = parseFloat(item.preco.desconto);
    var qtd = parseInt(item.quantidade);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var htmlpreco = "";
    
    preco = (preco*qtd);
    precooriginal = (precooriginal*qtd);
    desconto = (desconto*qtd);
    
    if(desconto > 0){
        htmlpreco = "<p class='preco_item_resumo_promo'><span class='promopreco'>de <s>"+parseReal(precooriginal)+"</s> por</span><br/>R$ "+parseReal(preco)+"</p>";
    }else{
        htmlpreco = "<p class='preco_item_resumo'>R$ "+parseReal(preco)+"</p>";
    }
    
    var html = "<div class='item_resumo'>"
        +    "<div class='dir_item_resumo'>"
        +        "<div class='qtd_item'  data-dadosalteracao='"+dadosmanip+"'>"
        +            "<a href='#' title='Remover' class='addmenos_item'>-</a>"
        +            "<input type='text' value='"+qtd+"' readonly='true'>"
        +            "<a href='#' title='Adicionar' class='addmais_item'>+</a>"
        +            "<div class='clear'></div>"
        +        "</div>"
        +        htmlpreco
        +    "</div>"
        +    "<div class='det_item_resumo'>"
        +        "<img src='"+item.urlfoto+"' width='44' class='icon_resumo'/>"
        +        "<p class='nomeitem_resumo' data-dadosalteracao='"+dadosmanip+"'>"+item.nome.linha1+" <i class='deletar_item material-icons'>delete</i></p>"
        +        "<p class='descitem_resumo'>"+item.nome.linha2+"</p>"
        +    "</div>"
        +    "<div class='clear'></div>"
        +"</div>";
    return html;
}

function gera_htmlItemComposto(item){
    
    var preco = parseFloat(item.preco.venda);
    var precooriginal = parseFloat(item.preco.original);
    var desconto = parseFloat(item.preco.desconto);
    var qtd = parseInt(item.quantidade);
    var dadosmanip = JSON.stringify(item.dadosalter);
    preco = (preco*qtd);
    precooriginal = (precooriginal*qtd);
    desconto = (desconto*qtd);
    
    var htmlpreco = "";
    if(desconto > 0){
        htmlpreco = "<p class='preco_item_resumo_promo'><span class='promopreco'>de <s>"+parseReal(precooriginal)+"</s> por</span><br/>R$ "+parseReal(preco)+"</p>";
    }else{
        htmlpreco = "<p class='preco_item_resumo'>R$ "+parseReal(preco)+"</p>";
    }
    
    var cntdetalhes = item.detalhes.length;
    
    var html = "<div class='item_resumo'>"
        +    "<div class='dir_item_resumo'>"
        +        "<div class='qtd_item' data-dadosalteracao='"+dadosmanip+"'>"
        +            "<a href='#' title='Remover' class='addmenos_item'>-</a>"
        +            "<input type='text' value='"+qtd+"' readonly='true'>"
        +            "<a href='#' title='Adicionar' class='addmais_item'>+</a>"
        +            "<div class='clear'></div>"
        +        "</div>"
        +        htmlpreco
        +    "</div>"
        +    "<div class='det_item_resumo'>"
        +        "<img src='"+item.urlfoto+"' width='44' class='icon_resumo'/>"
        +        "<p class='nomeitem_resumo' data-dadosalteracao='"+dadosmanip+"'>"+item.nome.linha1+" <i class='deletar_item material-icons'>delete</i></p>"
        +        "<p class='descitem_resumo'>"+item.nome.linha2+"</p>"
        +    "</div>";
    if(cntdetalhes > 0){
        html+=   "<div class='personalizacoes_item'><p>";
        for(var h=0; h<cntdetalhes; h++){
            html+=        "<strong>"+item.detalhes[h].linha1+": </strong> "+item.detalhes[h].linha2+"<br/>";
        }   
        html+=   "</p></div>";            
        html+=   "<button class='mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect  btndetalhes_resumo'><i class='material-icons'>keyboard_arrow_down</i><i class='material-icons' style='display:none;'>keyboard_arrow_up</i> Detalhes</button>";
    }
    if(item.permiteeditar === "S"){
        html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  btneditar_resumo editar_itempedido'  data-dadosalteracao='"+dadosmanip+"'><i class='material-icons'>edit</i> Editar</button>";
    }
    html+=   "<div class='clear'></div>"
        +"</div>";
    return html;
}



/* new Resumo */

function gera_htmlItens_nw(item){
    var htmlitem = "";
    var tipoitem = item.item_tipo;
    var editar = item.item_permiteEditar;
    if(tipoitem === "combo"){
        htmlitem += gera_htmlCombo_nw(item);
    }else if(tipoitem === "sozinho" && (editar === "N" || editar === null)){
        htmlitem += gera_htmlItemSimples_nw(item, editar);
    }else if(tipoitem === "sozinho" && editar === "S"){
        htmlitem += gera_htmlItemComposto_nw(item);
    }else if(tipoitem === "promocaoCompreGanhe"){
        htmlitem += gera_htmlPromocao_cg_nw(item);
    }
    return htmlitem;        
}

function gera_htmlCombo_nw(item){
    var combo_nome = item.item_nome;
    var combo_preco= parseReal(item.item_preco);
    var combo_economia = parseReal(item.item_precoValorDesconto);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var itens = item.item_itens;
    var cntitens = itens.length;
    
    var htmeconomia = "";
    if( parseFloat(item.item_precoValorDesconto)>0 ){
        htmeconomia = "<p class='economia'><i class='material-icons'>thumb_up</i> Você economizou R$ "+combo_economia+"</p>";
    }
    var html = "<div class='combo'  data-dadosalteracao='"+dadosmanip+"'>"
        +    "<p class='tit_combo_resumo'>"+combo_nome+": R$ "+combo_preco+"</p>"
        +    htmeconomia;

    for(var t=0; t<cntitens;t++){
        
        var opsobs = "";
        var oitem = itens[t];
        var tamanho = (oitem.item_composto.length>0)? oitem.item_nomeTamanho + ": " : oitem.item_nomeCategoria+": ";
        
        
        var linha1_t = oitem.item_quantidade + " - " + tamanho + oitem.item_nome;
        var linha2_t = "";
        
        html+=   "<div class='item_resumo_combo'>"
            +        "<div class='det_item_resumo'>"
            +            "<p class='nomeitem_resumo'>"+linha1_t+"</p>"
            +            "<p class='descitem_resumo'>"+linha2_t+"</p>"
            +        "</div>"
            +        "<div class='clear'></div>"
            +    "</div>";
    }
    
    html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btn_excluircombo deletarcombo_item'><i class='material-icons'>delete</i> Excluir</button>"
        +    "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btneditar_combo editar_combopedido'><i class='material-icons'>edit</i> Editar Combo</button>"
        +"</div> ";
    
    return html;    
    
}



function gera_htmlPromocao_cg_nw(item){
    
    var promocao_nome = item.item_nome;
    var promocao_preco= parseReal(item.item_preco);
    var combo_economia = parseReal(item.item_precoValorDesconto);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var itens = item.item_itens;
    var cntitens = itens.length;
    
    var precomostrar = ": R$" + promocao_preco;
    var precoreal = parseFloat(item.item_precoOriginal);
    if(promocao_preco > 0){
        precomostrar = " - Por apenas: R$ "+ promocao_preco;
    }else{
        precomostrar = " - Grátis";
    }
    
    var htmeconomia = "";
    if( parseFloat(item.item_precoValorDesconto)>0 ){
        htmeconomia = "<p class='economia'><i class='material-icons'>thumb_up</i> Você economizou R$ "+combo_economia+"</p>";
    }
    var html = "<div class='combo'  data-dadosalteracao='"+dadosmanip+"'>"
        +    "<p class='tit_combo_resumo'>"+promocao_nome+ precomostrar +"</p>"
        +    htmeconomia;

    for(var t=0; t<cntitens;t++){
        var opsobs = "";
        var oitem = itens[t];
        var tamanho = (oitem.item_composto.length>0)? oitem.item_nomeTamanho + ": " : oitem.item_nomeCategoria+": ";
        
        var cntobg = oitem.item_opcionalObrigatorio.length;
        var cntadd = oitem.item_opcionaisAdicionaveis.length;
        
        console.log(oitem.item_opcionalObrigatorio);
        if(cntobg!=0){            
            opsobs += " + "+ oitem.item_opcionalObrigatorio.item_nome;
        }
        if(cntadd>0){
            var listabd = "";
            for(var hsd=0; hsd<cntadd; hsd++){
                var nometipo = "Borda";
                var nomeitemm = "";
                var nometipo_arr = oitem.item_opcionaisAdicionaveis[hsd].item_nome.split(":");
                nomeitemm = oitem.item_opcionaisAdicionaveis[hsd].item_nome;
                if(nometipo_arr.length==2){
                    nometipo = nometipo_arr[0];
                    listabd += nometipo_arr[1]+"; ";
                }
            }
            opsobs += " + " + nometipo+": "+listabd;
        }
        
        var linha1_t = oitem.item_quantidade + " - " + tamanho + oitem.item_nome + opsobs;
        var linha2_t = "";
        
        html+=   "<div class='item_resumo_combo'>"
            +        "<div class='det_item_resumo'>"
            +            "<p class='nomeitem_resumo'>"+linha1_t+"</p>"
            +            "<p class='descitem_resumo'>"+linha2_t+"</p>"
            +        "</div>"
            +        "<div class='clear'></div>"
            +    "</div>";
    }
    
    html+= "</div> ";

    /*html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btn_excluircombo deletarcombo_item'><i class='material-icons'>delete</i> Excluir</button>"
        +    "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect   btneditar_combo editar_combopedido'><i class='material-icons'>edit</i> Editar Combo</button>"
        +"</div> "; */
    
    return html;    
}


function gera_htmlItemSimples_nw(item, editar){
    
    var preco = parseFloat(item.item_preco);
    var precooriginal = parseFloat(item.item_precoOriginal);
    var desconto = parseFloat(item.item_precoValorDesconto);
    var qtd = parseInt(item.item_quantidade);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var htmlpreco = "";
    
    preco = (preco*qtd);
    precooriginal = (precooriginal*qtd);
    desconto = (desconto*qtd);
    
    if(desconto > 0){
        htmlpreco = "<p class='preco_item_resumo_promo'><span class='promopreco'>de <s>"+parseReal(precooriginal)+"</s> por</span><br/>R$ "+parseReal(preco)+"</p>";
    }else{
        htmlpreco = "<p class='preco_item_resumo'>R$ "+parseReal(preco)+"</p>";
    }
    
    
    var l_icone = item.item_icone;
    var l_nome = item.item_nome;
    var l_categ = item.item_nomeCategoria;
    if(editar === "N"){
        l_icone = item.item_composto[0].item_icone;
        l_nome = item.item_composto[0].item_nome;
        l_categ = item.item_composto[0].item_nomeCategoria;
    }
    
    var html = "<div class='item_resumo'>"
        +    "<div class='dir_item_resumo'>"
        +        "<div class='qtd_item'  data-dadosalteracao='"+dadosmanip+"'>"
        +            "<a href='#' title='Remover' class='addmenos_item'>-</a>"
        +            "<input type='text' value='"+qtd+"' readonly='true'>"
        +            "<a href='#' title='Adicionar' class='addmais_item'>+</a>"
        +            "<div class='clear'></div>"
        +        "</div>"
        +        htmlpreco
        +    "</div>"
        +    "<div class='det_item_resumo'>"
        +        "<img src='"+l_icone+"' width='44' class='icon_resumo'/>"
        +        "<p class='nomeitem_resumo' data-dadosalteracao='"+dadosmanip+"'>"+l_nome+" <i class='deletar_item material-icons'>delete</i></p>"
        +        "<p class='descitem_resumo'>"+l_categ+"</p>"
        +    "</div>"
        +    "<div class='clear'></div>"
        +"</div>";
    return html;
}

function gera_htmlItemComposto_nw(item){
    
    
    var preco = parseFloat(item.item_preco);
    var precooriginal = parseFloat(item.item_precoOriginal);
    var desconto = parseFloat(item.item_precoValorDesconto);
    var qtd = parseInt(item.item_quantidade);
    var dadosmanip = JSON.stringify(item.dadosalter);
    var htmlpreco = "";
    
    preco = (preco*qtd);
    precooriginal = (precooriginal*qtd);
    desconto = (desconto*qtd);
    
    if(desconto > 0){
        htmlpreco = "<p class='preco_item_resumo_promo'><span class='promopreco'>de <s>"+parseReal(precooriginal)+"</s> por</span><br/>R$ "+parseReal(preco)+"</p>";
    }else{
        htmlpreco = "<p class='preco_item_resumo'>R$ "+parseReal(preco)+"</p>";
    }
    
    var htmdetalhes = "";
    var cnt_sabores = item.item_composto.length;
    
    var l_icone = item.item_icone;
    var l_nome = item.item_nome;
    var l_tamanho = item.item_nomeTamanho;
    
    if(cnt_sabores === 1){
        l_icone = item.item_composto[0].item_icone;
    }
    
    for(var i=0; i<cnt_sabores; i++){
        var cnt_indadd = item.item_composto[i].item_ingredientesAdicionais.length;
        var cnt_ingrem = item.item_composto[i].item_ingredientesRemovidos.length;
        item.item_composto[i].item_nome;
        var listings = "";
        for(var ig=0; ig<cnt_ingrem; ig++){
            var nomeing = item.item_composto[i].item_ingredientesRemovidos[ig].item_nome;
            listings += "s/ "+nomeing+"; ";
        }
        
        for(var ig=0; ig<cnt_indadd; ig++){
            var nomeing = item.item_composto[i].item_ingredientesAdicionais[ig].item_nome;
            listings += "c/ "+nomeing+";";
        }
        
        if(cnt_indadd>0 || cnt_ingrem>0){
            htmdetalhes += "<strong>"+item.item_composto[i].item_nome+": </strong> "+listings+"<br/>";
        }
        
    }
    
    var cnt_opcobg = item.item_opcionalObrigatorio.length;
    var cnt_opcadd = item.item_opcionaisAdicionaveis.length;
    var cnt_obs = item.item_observacoes.length;
    
    if(cnt_opcobg!=0){
        var nometipo = "Massa";
        var nomeitemm = "";
        var nometipo_arr = item.item_opcionalObrigatorio.item_nome.split(":");
        nomeitemm = item.item_opcionalObrigatorio.item_nome;
        if(nometipo_arr.length==2){
            nometipo = nometipo_arr[0];
            nomeitemm = nometipo_arr[1];
        }
        htmdetalhes += "<strong>"+nometipo+": </strong> "+nomeitemm+"<br/>";
    }
    
    if(cnt_opcadd>0){
        var listabd = "";
        for(var hsd=0; hsd<cnt_opcadd; hsd++){
        
            var nometipo = "Borda";
            var nomeitemm = "";
            var nometipo_arr = item.item_opcionaisAdicionaveis[hsd].item_nome.split(":");
            nomeitemm = item.item_opcionaisAdicionaveis[hsd].item_nome;
            if(nometipo_arr.length==2){
                nometipo = nometipo_arr[0];
                listabd += nometipo_arr[1]+"; ";
            }
            
        }
        htmdetalhes += "<strong>"+nometipo+": </strong> "+listabd+"<br/>";
    }
    if(cnt_obs>0){
        var listaobs = "";
        for(var hsd=0; hsd<cnt_obs; hsd++){        
            listaobs += item.item_observacoes[hsd].item_nome + "; ";            
        }
        htmdetalhes += "<strong>Observações: </strong> "+listaobs+"<br/>";
    }

    
    var html = "<div class='item_resumo'>"
        +    "<div class='dir_item_resumo'>"
        +        "<div class='qtd_item' data-dadosalteracao='"+dadosmanip+"'>"
        +            "<a href='#' title='Remover' class='addmenos_item'>-</a>"
        +            "<input type='text' value='"+qtd+"' readonly='true'>"
        +            "<a href='#' title='Adicionar' class='addmais_item'>+</a>"
        +            "<div class='clear'></div>"
        +        "</div>"
        +        htmlpreco
        +    "</div>"
        +    "<div class='det_item_resumo'>"
        +        "<img src='"+l_icone+"' width='44' class='icon_resumo'/>"
        +        "<p class='nomeitem_resumo' data-dadosalteracao='"+dadosmanip+"'>"+l_tamanho+" <i class='deletar_item material-icons'>delete</i></p>"
        +        "<p class='descitem_resumo'>"+l_nome+"</p>"
        +    "</div>";
    if(htmdetalhes != ""){
        html+=   "<div class='personalizacoes_item'><p>";
        html+=   htmdetalhes; 
        html+=   "</p></div>";            
        html+=   "<button class='mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect  btndetalhes_resumo'><i class='material-icons'>keyboard_arrow_down</i><i class='material-icons' style='display:none;'>keyboard_arrow_up</i> Detalhes</button>";
    }
    if(item.item_permiteEditar === "S"){
        html+=   "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  btneditar_resumo editar_itempedido'  data-dadosalteracao='"+dadosmanip+"'><i class='material-icons'>edit</i> Editar</button>";
    }
    html+=   "<div class='clear'></div>"
        +"</div>";
    return html;
}