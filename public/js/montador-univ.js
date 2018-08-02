/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function hide_listaSabores(elemento){
    if(!elemento.hasClass("noitemselected")){
        var codclass = elemento.data("target-combo");
        $('.listadesaboresescolher.'+codclass).stop().animate({left: '-310px'}, 400);
        $(".esmaecer_montador."+codclass).stop().fadeOut(1000);
    }
}

function show_listaSabores(elemento){
    
    var codclass = elemento.data("target-combo");
    $('.esmaecer_montador.'+codclass).addClass("blackesm");
    $('.listadesaboresescolher.'+codclass).stop().animate({left: '0px'}, 400);
    $(".esmaecer_montador."+codclass).stop().fadeIn(1000);
}

function hide_listaIngredientes(elemento){
    if(!elemento.hasClass("noitemselected")){
        var codclass = elemento.data("target-combo");
        $('.listadeingredientes_opc.'+codclass).stop().animate({right: '-350px'}, 400);
        $(".esmaecer_montador."+codclass).stop().fadeOut(10);
        hide_listaObs(codclass);
        hide_listaMassa(codclass);
        hide_listaBorda(codclass);
    }
}

function show_listaIngredientes(elemento){
    var codclass = elemento.data("target-combo");
    $('.esmaecer_montador.'+codclass).removeClass("blackesm");
    $('.listadeingredientes_opc.'+codclass).stop().animate({right: '0px'}, 400);
    $(".esmaecer_montador."+codclass).stop().fadeIn(10);
}


/* observações */
function hide_listaObs(cod){
    $('.listadeobservacoes.'+cod).stop().animate({right: '-350px'}, 400);
}
function show_listaObs(elemento){
    var codclass = elemento.data("target-combo");
    $('.esmaecer_montador.'+codclass).removeClass("blackesm");
    $('.listadeobservacoes.'+codclass).stop().animate({right: '0px'}, 400);
    $(".esmaecer_montador."+codclass).stop().fadeIn(10);
}
/* 
 * 
 */

/* massa */
function hide_listaMassa(cod){
    $('.listademassas.'+cod).stop().animate({right: '-350px'}, 400);
}
function show_listaMassa(elemento){
    var codclass = elemento.data("target-combo");
    $('.esmaecer_montador.'+codclass).removeClass("blackesm");
    $('.listademassas.'+codclass).stop().animate({right: '0px'}, 400);
    $(".esmaecer_montador."+codclass).stop().fadeIn(10);
}
/* 
 * 
 */

/* borda */
function hide_listaBorda(cod){
    $('.listadebordas.'+cod).stop().animate({right: '-350px'}, 400);
}
function show_listaBorda(elemento){
    var codclass = elemento.data("target-combo");
    $('.esmaecer_montador.'+codclass).removeClass("blackesm");
    $('.listadebordas.'+codclass).stop().animate({right: '0px'}, 400);
    $(".esmaecer_montador."+codclass).stop().fadeIn(10);
}
/* 
 * 
 */



function abrirListaSabores(elen){        
    var codtarget = elen.data("target-combo");//data("combo-abatarget");
    var pedaco = elen.data("pdc");
    var confitem = $("#"+codtarget).data("combo-confitem");
    var htmlist = "";
    if(confitem == false){
        var dadositem = $("#"+codtarget).data("dadositem");
        var sessao = dadositem.item_sessaoid;
        var codtamanho = dadositem.item_tamanhoid;
        var nsabores = get_saboresSessao(sessao);
        htmlist = reendListaSabores(nsabores,codtarget,codtamanho, pedaco,true);
    }else{
        htmlist = reendListaSabores(confitem.sabores,codtarget,confitem.tamanhos, pedaco,true);
    }
    $(".listadesaboresescolher."+codtarget).remove();
    $(".listadeingredientes_opc."+codtarget).remove();

    $(".esmaecer_montador."+codtarget).after(htmlist);
    $(".listadesaboresescolher."+codtarget).css("left",'-310px');

    show_listaSabores(elen);
    
    $(".nano").nanoScroller();
}

function finalizaCombo(){
    
    //montador_combo" data-combo-infos="" data-combo-hash=""
    var combo_info = $("#montador_combo").data("combo-infos");
    var hash = $("#montador_combo").data("combo-hash");
    var id_combo = combo_info.combo_id;
    
    $.ajax({
        method: "POST",
        url: "/exec/montadoritem/finalizacombo/",
        data: {data_hash : hash, data_cod : id_combo},
        dataType: "json"
    }).done(function( msg ) {
        if(msg.res === true){
            $("#montDorCombo").modal("hide"); 
            get_resumoPedido();
            $(".fechar_modal").show();
            
            showMsgItemAdd();
        }else if(msg.res === false){
            
        }else{
            //console.log("Falha na execução");
        }
        
    }); 
    
}

function get_observacoesdasessao(codsessao, codtamanho){
    var cntobs = observacoes_itens.length;
    var arrobs = [];
    var k=0;
    for(var i=0; i<cntobs; i++){
        if(observacoes_itens[i].observacoes_sessaoid == codsessao){
            if(observacoes_itens[i].observacoes_precotamanho != false && observacoes_itens[i].observacoes_precotamanho != undefined){                
                var conttmobs = observacoes_itens[i].observacoes_precotamanho.length;
                for(var g=0;g<conttmobs;g++){
                    if(observacoes_itens[i].observacoes_precotamanho[g].precotamannho_tamanhoid == codtamanho){
                        arrobs[k] = observacoes_itens[i];
                        arrobs[k]["preco"] = observacoes_itens[i].observacoes_precotamanho[g].precotamannho_preco;                        
                        k++;
                    }
                }            
            }
        }
    }
    return (arrobs.length > 0)? arrobs : false;
}

function get_massasdasessao(codsessao, codtamanho){
    var cntobs = massas_itens.length;
    var arrobs = [];
    var k=0;
    for(var i=0; i<cntobs; i++){
        if(massas_itens[i].massa_sessaoid == codsessao){
            if(massas_itens[i].massa_precotamanho != false && massas_itens[i].massa_precotamanho != undefined){                
                var conttmobs = massas_itens[i].massa_precotamanho.length;
                for(var g=0;g<conttmobs;g++){
                    if(massas_itens[i].massa_precotamanho[g].precotamannho_tamanhoid == codtamanho){ 
                        arrobs[k] = massas_itens[i];
                        arrobs[k]["preco"] = massas_itens[i].massa_precotamanho[g].precotamannho_preco;                        
                        k++;
                    }
                }            
            }
        }
    }
    return (arrobs.length > 0)? arrobs : false;
}

function get_bordadasessao(codsessao, codtamanho){
    var cntobs = bordas_itens.length;
    var arrobs = [];
    var k=0;
    for(var i=0; i<cntobs; i++){
        if(bordas_itens[i].borda_sessaoid == codsessao){
            if(bordas_itens[i].borda_precotamanho != false && bordas_itens[i].borda_precotamanho != undefined){                
                var conttmobs = bordas_itens[i].borda_precotamanho.length;
                for(var g=0;g<conttmobs;g++){
                    if(bordas_itens[i].borda_precotamanho[g].precotamannho_tamanhoid == codtamanho){ 
                        arrobs[k] = bordas_itens[i];
                        arrobs[k]["preco"] = bordas_itens[i].borda_precotamanho[g].precotamannho_preco;                        
                        k++;
                    }
                }            
            }
        }
    }
    return (arrobs.length > 0)? arrobs : false;
}

function get_observacaoexist(obsusando, cod){
    
    if(obsusando != false){
        var cntobs = obsusando.length;
        for(var h=0; h<cntobs;h++){
            if(obsusando[h].item_observacaoid == cod){
                return true;
            }
        }
    }
    return false;
}

function get_bordaexist(bordausando, cod){
    
    if(bordausando != false){
        var cntobs = bordausando.length;
        for(var h=0; h<cntobs;h++){
            if(bordausando[h].item_bordaid == cod){
                return true;
            }
        }
    }
    return false;
}

function get_massaexist(massausando, cod){
    console.log(massausando);
    if(massausando != false){
        if(massausando.item_massaid == cod){
            return true;
        }        
    }
    return false;
}

function rendListaObs(elemento){
    var codtarget = elemento.data("target-combo");
    var dadositemmontagem = $("#"+codtarget).data("dadositem");
    var dadosatl = $("#"+codtarget).data("dadosdoitematual");
    var config = $("#"+codtarget).data("combo-confitem");
    var ttopcpreco = 0;
    
    var tamanhoitem = null;
    var obssnoitem = null;
    var codsessao = null;
    var observacoes_dasessao = null;
    if(config == false && dadositemmontagem.item_observacoes == undefined){
        tamanhoitem = dadosatl.data_tamanho;
        obssnoitem = false;
        codsessao = get_sessaoSabor(dadosatl.data_sabor[0]);
        observacoes_dasessao = get_observacoesdasessao(codsessao,tamanhoitem);
    }else{
        tamanhoitem = dadositemmontagem.item_tamanhoid;
        obssnoitem = dadositemmontagem.item_observacoes;
        codsessao = dadositemmontagem.item_sessaoid;
        observacoes_dasessao = get_observacoesdasessao(codsessao,tamanhoitem);
    }  
    //console.log(observacoes_dasessao);
    var htmlistaings = "";
    
    var cobrarobser = true;    
    var opcionaisitem = config.opcionais;  
    if(opcionaisitem != undefined){
        cobrarobser = (opcionaisitem.OBSERVASOES !== undefined && opcionaisitem.OBSERVASOES.COBRAR == "S")? true : false;
    }
    if(observacoes_dasessao !== false){
        show_listaObs(elemento);
        
        var cntobsss = observacoes_dasessao.length;
        for(var fd=0;fd<cntobsss;fd++){
            
            var codobs = observacoes_dasessao[fd].observacoes_id;
            var nomeobs = observacoes_dasessao[fd].observacoes_nome;
            var preco = observacoes_dasessao[fd].preco;
            preco = (preco > 0 && cobrarobser===true)? " +R$ "+parseReal(preco) : "";
            var obsin = get_observacaoexist(obssnoitem, codobs)
            var ladobotao = (!obsin)? "blbg_left" : "blbg_right";
            var bolabotao = (!obsin)? "bl_left" : "bl_right";
            //var ladobotao = "blbg_left";
            //var bolabotao = "bl_left";
            
            htmlistaings += "<li class='li_inglista ingrdts'><span class='nomeinglista'>"+nomeobs+preco+"</span>"
                        +"<a href='#' class='obsitem_x bolabotao_link "+ladobotao+"' data-coditem='"+codobs+"' data-target-combo='"+codtarget+"' ><span class='bolabotao "+bolabotao+"'></span></a>"
                        +"</li>";
        }
        
        $(".listacomobservacoesitem."+codtarget).html(htmlistaings);
        $(".topoobservacoes."+codtarget).text("Observações");
    }else{
        elemento.hide();
    }
    $(".nano").nanoScroller();

}


function rendListaBorda(elemento){
    var codtarget = elemento.data("target-combo");
    var dadositemmontagem = $("#"+codtarget).data("dadositem");
    var dadosatl = $("#"+codtarget).data("dadosdoitematual");
    var config = $("#"+codtarget).data("combo-confitem");
    var ttopcpreco = 0;
    
    var tamanhoitem = null;
    var bordanoitem = null;
    var codsessao = null;
    var bordas_dasessao = null;
    if(config == false && dadositemmontagem.item_borda == undefined){
        tamanhoitem = dadosatl.data_tamanho;
        bordanoitem = false;
        codsessao = get_sessaoSabor(dadosatl.data_sabor[0]);
        bordas_dasessao = get_bordadasessao(codsessao,tamanhoitem);
    }else{
        tamanhoitem = dadositemmontagem.item_tamanhoid;
        bordanoitem = dadositemmontagem.item_borda;
        codsessao = dadositemmontagem.item_sessaoid;
        bordas_dasessao = get_bordadasessao(codsessao,tamanhoitem);
    }
    
    var cobrarborda = true;    
    var opcionaisitem = config.opcionais;  
    if(opcionaisitem != undefined){ 
        cobrarborda = (opcionaisitem.BORDAS !== undefined && opcionaisitem.BORDAS.COBRAR == "S")? true : false;
    }
    

    
    //console.log(bordas_dasessao);
    var htmlistaings = "";
    
    if(bordas_dasessao !== false){
        show_listaBorda(elemento);
        var ntipo = "";
        var cntobsss = bordas_dasessao.length;
        for(var fd=0;fd<cntobsss;fd++){
            
            var codobs = bordas_dasessao[fd].borda_id;
            var nomeobs = bordas_dasessao[fd].borda_nome;
            var preco = bordas_dasessao[fd].preco;
            preco = (preco > 0 && cobrarborda === true)? " +R$ "+parseReal(preco) : "";
            
            var bordain = get_bordaexist(bordanoitem, codobs);
            var ladobotao = (!bordain)? "blbg_left" : "blbg_right";
            var bolabotao = (!bordain)? "bl_left" : "bl_right";
            
            var ds_nometipo = nomeobs.split(":");
            ntipo = ds_nometipo[0];
            
            htmlistaings += "<li class='li_inglista ingrdts'><span class='nomeinglista'>"+nomeobs+preco+"</span>"
                        +"<a href='#' class='bordaitem_x bolabotao_link "+ladobotao+"' data-coditem='"+codobs+"' data-target-combo='"+codtarget+"' ><span class='bolabotao "+bolabotao+"'></span></a>"
                        +"</li>";
        }
        
        $(".listacombordasitem."+codtarget).html(htmlistaings);
        $(".topoborda."+codtarget).text(ntipo);
    }else{
        elemento.hide();
    }
    $(".nano").nanoScroller();

}

function rendListaMassa(elemento, padrao){
    var codtarget = elemento.data("target-combo");
    var dadositemmontagem = $("#"+codtarget).data("dadositem");
    var dadosatl = $("#"+codtarget).data("dadosdoitematual");
    var config = $("#"+codtarget).data("combo-confitem");
    var ttopcpreco = 0;
    
    var tamanhoitem = null;
    var massanoitem = null;
    var codsessao = null;
    var massa_dasessao = null;
    if(config == false && dadositemmontagem.item_massa == undefined){
        tamanhoitem = dadosatl.data_tamanho;
        massanoitem = false;
        codsessao = get_sessaoSabor(dadosatl.data_sabor[0]);
        massa_dasessao = get_massasdasessao(codsessao,tamanhoitem);
    }else{
        tamanhoitem = dadositemmontagem.item_tamanhoid;
        massanoitem = dadositemmontagem.item_massa;
        codsessao = dadositemmontagem.item_sessaoid;
        massa_dasessao = get_massasdasessao(codsessao,tamanhoitem);
    }
    /*console.log(config);
    console.log("massa: ");
    console.log(dadositemmontagem);*/
    var cobrarmassa = true;    
    var opcionaisitem = config.opcionais;  
    if(opcionaisitem != undefined){     
        cobrarmassa = (opcionaisitem.MASSA !== undefined && opcionaisitem.MASSA.COBRAR == "S")? true : false;
    }
    //console.log(massa_dasessao);
    var htmlistaings = "";
    
    if(massa_dasessao !== false){
        show_listaMassa(elemento);
        var ntipo = "";
        var cntobsss = massa_dasessao.length;
        
        var massaselecteds = false;
        
        for(var fd=0;fd<cntobsss;fd++){
            var codobs = massa_dasessao[fd].massa_id;
            var massain = get_massaexist(massanoitem, codobs);
            if(massain){
                massaselecteds = true;
            }
        }
        
        for(var fd=0;fd<cntobsss;fd++){
            //console.log(massa_dasessao[fd]);
            var codobs = massa_dasessao[fd].massa_id;
            var nomeobs = massa_dasessao[fd].massa_nome;
            var preco = massa_dasessao[fd].preco;
            preco = (preco > 0 && cobrarmassa === true)? " +R$ "+parseReal(preco) : "";
            var massain = get_massaexist(massanoitem, codobs);
            var ladobotao = (!massain)? "blbg_left" : "blbg_right";
            var bolabotao = (!massain)? "bl_left" : "bl_right";
            var ds_nometipo = nomeobs.split(":");
            ntipo = ds_nometipo[0];
            if(massaselecteds === false){
                if(padrao==codobs){
                    ladobotao = "blbg_right";
                    bolabotao = "bl_right";
                }
            }
            
            htmlistaings += "<li class='li_inglista ingrdts'><span class='nomeinglista'>"+nomeobs+preco+"</span>"
                        +"<a href='#' class='massaitem_x bolabotao_link "+ladobotao+"' data-coditem='"+codobs+"' data-target-combo='"+codtarget+"' ><span class='bolabotao "+bolabotao+"'></span></a>"
                        +"</li>";
        }
        
        $(".listacommassasitem."+codtarget).html(htmlistaings);
        $(".topomassa."+codtarget).text(ntipo);
    }else{
        elemento.hide();
    }
    $(".nano").nanoScroller();

}

$(document).ready(function(){
    
    $(document).on('keyup', '.buscarsabor', function (){
        var value = $(this).val();
        var prt = $(this).parent();
        prt = prt.parent();
        
        prt = prt.find(".itensdelistasabores");
        //console.log(value);
        //$(".listacomsabores > .itensdelistasabores").each(function() {
        prt.each(function() {
            if ($(this).text().search(new RegExp(value, "i")) > -1) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        }); 
    });
    
    $(document).on("click",".smaesertroca",function(e){
        hide_listaSabores_comb();
    });
    $(document).on("click",".close_sidemenu_sabortroca",function(e){
        hide_listaSabores_comb();
    });
    $(document).on("click",".clicktrocardeitem",function(e){
        var daddos = $(this).data("dadostroca");
        trocarItem(daddos);
        //console.log(daddos);
    });
    
    $("#montDorCombo").on('hidden.bs.modal', function () {
        $("#content_combo").html("");
    });
    
    $(document).on("click", "#btn-recomecar", function(e){
        var dados = $("#cont_mont_lanche").data("dadositem");
        console.log(dados);
        var tipo = dados.item_sessaoid;
        get_pizzaZerada(tipo);
    });
    
    $(document).on("change",".selecttamitem",function(e){
        var codtamanho = $(this).val();
        ////console.log("1111");
        var tamanhos = $(this).data("tamanhos");
        var codtarget = $(this).data("target-combo");
        rendQuantidadeSabores(codtamanho,tamanhos,codtarget);
        
        var elen = $(this);
        var dadosAcao = {
            tamanho : codtamanho
        };
        
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        
        var acao = "alterar";
        atualizarTamanho(dadositemmontando, dadosAcao, acao, elen);
    });
    
    $(document).on("click", ".close_sidemenu", function(e){
        $(".esmaecer_montador").trigger("click");
    });
    
    $(document).on("click", ".btnobs_montmodal", function(e){        
        rendListaObs($(this));
    });
    
    $(document).on("click", ".btnmss_montmodal", function(e){     
        var fgd = $(this).data("codmsspdr");
        rendListaMassa($(this), fgd);
    });
    
    //rendListaBorda(elemento)
    $(document).on("click", ".btnbrd_montmodal", function(e){        
        rendListaBorda($(this));
    });
    
    $(document).on("click", ".addunicoitem", function(e){
        set_itemSimples($(this),"troca");
    });
    
    $(document).on("click",".trocarmeuitem", function(e){
        //console.log($(this).parent().data("allconf"));
        var allconf = $(this).parent().data("allconf");
        rendItensTroca(allconf);
    });
    
    $(document).on("click", ".addmenositem", function(e){
        set_itemSimples($(this),"remove");
    });
    
    $(document).on("click", ".addmaisitem", function(e){
        set_itemSimples($(this),"adiciona");
    });
    
    $(document).on("click",".btnopc_montmodal",function(e){
        show_listaIngredientes($(this));
        reendListaIngredientes($(this));
    });
    
    $(document).on("change",".selectqtditem",function(e){
        var qtdnova = $(this).val();
        var codtarget = $(this).data("target-combo");
        
        var elen = $(this);
        var dadosAcao = {
            qtdsabor : qtdnova
        };
        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        
        var acao = "alterar";
        
        atualizarQtdSabor(dadositemmontando, dadosAcao, acao, elen);
        
    });
    
    $(document).on("click",".itensdelistasabores",function(){
        
        if(!$(this).hasClass("clicktrocardeitem")){
        
            hide_listaSabores($(this));     
            if( $(this).hasClass("addsabor") ){
                set_saboritem($(this));
            }else{
                set_itemmontador($(this));
            }        
        }
    });
    
    
    
    $(document).on("click",".btnfinaliza_combo", function(){
        if($(this).hasClass("ativo")){
            finalizaCombo();
        }else{
            openAlert("Selecione todos os itens do combo para finalizar.", "Atenção!!");
            fechaModalUniv(3);
        }
    });
    
    $(document).on("click",".openlistasabores", function(e){        
        abrirListaSabores($(this));
    });
    
    $(document).on("click",".selectnovosabor",function (e){
        abrirListaSabores($(this));    
    });
    
    $(document).on("click", ".esmaecer_montador",function(e){
        hide_listaSabores($(this));
        hide_listaIngredientes($(this));
    });
    
    $(document).on("click", ".abacombo", function(){
        var target_aba = $(this).data("combo-abatarget");
        $(".abacombo").removeClass("ativa");
        $(this).addClass("ativa");
        $(".cont_abascombo").removeClass("abacontent_ativo");
        $("#"+target_aba).addClass("abacontent_ativo");
        
        var idnext = $(this).next();
        var idback = $(this).prev();
        idnext = idnext.data("combo-abatarget");
        idback = idback.data("combo-abatarget");
        
        if(idback == undefined){
            $(".btnVoltar_combo").hide();
        }else{
            $(".btnVoltar_combo").show();
            $(".btnVoltar_combo").data("combo-abatarget",idback);
        }
        
        if(idnext == undefined){
            $(".btnAvancar_combo").hide();
        }else{
            $(".btnAvancar_combo").show();
            $(".btnAvancar_combo").data("combo-abatarget",idnext);
        }
        
        
    });
    
    $(document).on("click", ".btnAvancar_combo", function(){
        var target_aba = $(this).data("combo-abatarget");
        ////console.log(target_aba);
        $(".abacombo[data-combo-abatarget='"+target_aba+"']").trigger("click");        
    });
    $(document).on("click", ".btnVoltar_combo", function(){
        var target_aba = $(this).data("combo-abatarget");
        $(".abacombo[data-combo-abatarget='"+target_aba+"']").trigger("click");        
    });
    //ingopcsabores
    // bordaitem_x
    $(document).on("click",".bolabotao_link.bordaitem_x",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codborda = elen.data("coditem");
        var dadosAcao = {
            codborda : codborda
        };
        
        var rr = ($(this).hasClass("blbg_left"))? true : false;        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(rr){
            var acao = "adicionar";
            acoesBorda(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_left");
            $(this).addClass("blbg_right");
            $(this).children(".bolabotao").removeClass("bl_left");
            $(this).children(".bolabotao").addClass("bl_right");
        }else{
            var acao = "remover";
            acoesBorda(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_right");
            $(this).addClass("blbg_left");
            $(this).children(".bolabotao").removeClass("bl_right");
            $(this).children(".bolabotao").addClass("bl_left");
        }
    }); 
    
    
    $(document).on("click",".bolabotao_link.massaitem_x",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codmassa = elen.data("coditem");
        var dadosAcao = {
            codmassa : codmassa
        };
        
        var rr = ($(this).hasClass("blbg_left"))? true : false;        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(rr){
            var acao = "adicionar";
            acoesMassa(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_left");
            $(this).addClass("blbg_right");
            $(this).children(".bolabotao").removeClass("bl_left");
            $(this).children(".bolabotao").addClass("bl_right");
        }   
    });
    
    
    
    $(document).on("click",".bolabotao_link.obsitem_x",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        
        var codobs = elen.data("coditem");
        var dadosAcao = {
            codobs : codobs
        };
        
        var rr = ($(this).hasClass("blbg_left"))? true : false;        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(rr){
            var acao = "adicionar";
            acoesObservacoes(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_left");
            $(this).addClass("blbg_right");
            $(this).children(".bolabotao").removeClass("bl_left");
            $(this).children(".bolabotao").addClass("bl_right");
        }else{
            var acao = "remover";
            acoesObservacoes(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_right");
            $(this).addClass("blbg_left");
            $(this).children(".bolabotao").removeClass("bl_right");
            $(this).children(".bolabotao").addClass("bl_left");
        }      
    }); 
    
    $(document).on("click",".bolabotao_link.ingopcsabores",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codinsumo = elen.data("coding");
        var codsabor = elen.data("sabor");
        var pedaco = elen.data("pedaco");
        var dadosAcao = {
            insumo : codinsumo,
            sabor : codsabor,
            pedaco : pedaco
        };
        
        var rr = ($(this).hasClass("blbg_left"))? true : false;
        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(rr){
            var acao = "adicionar";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_left");
            $(this).addClass("blbg_right");
            $(this).children(".bolabotao").removeClass("bl_left");
            $(this).children(".bolabotao").addClass("bl_right");
        }else{
            var acao = "excluir";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_right");
            $(this).addClass("blbg_left");
            $(this).children(".bolabotao").removeClass("bl_right");
            $(this).children(".bolabotao").addClass("bl_left");
        }      
    }); 
    
    $(document).on("click",".bolabotao_link.ingdossabores",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codinsumo = elen.data("coding");
        var codsabor = elen.data("sabor");
        var pedaco = elen.data("pedaco");
        var dadosAcao = {
            insumo : codinsumo,
            sabor : codsabor,
            pedaco : pedaco
        };
        
        var rr = ($(this).hasClass("blbg_left"))? true : false;
        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(rr){
            var acao = "readicionar";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_left");
            $(this).addClass("blbg_right");
            $(this).children(".bolabotao").removeClass("bl_left");
            $(this).children(".bolabotao").addClass("bl_right");
        }else{
            var acao = "remover";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).removeClass("blbg_right");
            $(this).addClass("blbg_left");
            $(this).children(".bolabotao").removeClass("bl_right");
            $(this).children(".bolabotao").addClass("bl_left");
        }      
    });    
    
    /*
     * Remove ou realoca determinado insumo
     */
    $(document).on("change",".lst_ings input[type='checkbox']",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codinsumo = elen.val();
        var codsabor = elen.data("sabor");
        var pedaco = elen.data("pedaco");
        var dadosAcao = {
            insumo : codinsumo,
            sabor : codsabor,
            pedaco : pedaco
        };
        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if($(this).is(':checked')){
            var acao = "readicionar";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).parent().css("text-decoration", "none");
        }else{
            var acao = "remover";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            $(this).parent().css("text-decoration", "line-through");
        }
        
    });  
    
    $(document).on("change",".lst_ings_opc input[type='checkbox']",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var codinsumo = elen.val();
        var codsabor = elen.data("sabor");
        var pedaco = elen.data("pedaco");
        var dadosAcao = {
            insumo : codinsumo,
            sabor : codsabor,
            pedaco : pedaco
        };
        
        //var dadositemmontando = $("#cont_modalmont").data("dadosdoitematual");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        if(!$(this).is(':checked')){
            var acao = "excluir";
            acoesInsumos(dadositemmontando, dadosAcao, acao, elen);
            elen.parent().remove();
        }       
    });  
    
    $(document).on("click",".maisum_item",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        var acao = "adiciona";
        acoesAdicionaRemove(dadositemmontando, acao, codtarget);
    }); 
    
    $(document).on("click",".menosum_item",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        var acao = "remove";
        acoesAdicionaRemove(dadositemmontando, acao, codtarget);
    }); 
    //
    
    $(document).on("click",".comprar_item",function(e){
        var elen = $(this);
        var codtarget = elen.data("target-combo");
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        finaliza_itemComprar(dadositemmontando,codtarget);
    }); 
    
});



    function finaliza_itemComprar(dadositemmontando){
        var dados = {
            dadositem : dadositemmontando
        };
        
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/finalizaitem/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                $("#montDor").modal("hide");
                showModalpromocao = true;
                if(mtpzz === true){
                    var montadoratualpagina = "S";
                    if(msg.mpagina != undefined){
                        montadoratualpagina = msg.mpagina;
                    }
                    if(montadoratualpagina == "S"){
                        get_pizzaZerada(msg.dados.tipocod);
                        Ancora('formapizza');
                    }
                }
                showMsgItemAdd();                
                get_resumoPedido();
            }else if(msg.res === false){
                if(msg.msg != undefined){
                    openAlert(msg.msg, "Atenção!!");
                    fechaModalUniv(2);
                }
            }else{
                
            }

        }); 
    }


function get_pizzaZerada(cod){
    $.ajax({
        method: "POST",
        url: "/exec/montadoritem/zerarpizza/",
        data: {tipo : cod},
        dataType: "json"
    }).done(function( msg ) {
        if(msg.res === true){
            peencheDadosRetorno(msg);
            rendPizzaFormaPizza(msg.item);
            redir_item = true;
            limpa_box_ingredientes();
        }else if(msg.res === false){

        }else{

        }

    }); 
}


/*
get_borda_dados(confiditem.borda);
var massa = get_massa_dados(confiditem.massa);
var tamanho = get_tamanho_dados(confiditem.tamanho);
*/
function get_nomes_sabores(lista,tamanho){
    var cnt = lista.length;
    var cnt_sabores = sabores_itens.length;
    var lst = [];
    var cntin = 0;
    
    for(var t=0; t<cnt_sabores;t++){
        var idsabor = sabores_itens[t].sabor_id;
        for(var i=0; i<cnt; i++){
            var codsabor = lista[i];
            if(idsabor == codsabor){
                if( sabores_itens[t].sabor_precostamanhos != undefined ){
                    var cnty = sabores_itens[t].sabor_precostamanhos.length;
                    for(var c=0; c<cnty; c++){
                        if(sabores_itens[t].sabor_precostamanhos[c].sabor_precotamanhos_codtamanho == tamanho){
                            lst[cntin] = sabores_itens[t];
                            cntin++;
                        }
                    }
                }else{
                    lst[cntin] = sabores_itens[t];
                    cntin++;
                }
            }
        }
    }
    return lst;
}

function get_borda_dados(borda,tamanho){
    var cnt = bordas_itens.length;
    for(var i=0;i<cnt;i++){
        if(bordas_itens[i].borda_id == borda){
            var cntt = bordas_itens[i].borda_precotamanho.length;
            for(var y=0; y<cntt;y++){
                if(bordas_itens[i].borda_precotamanho[y].precotamannho_tamanhoid == tamanho){
                    bordas_itens[i]["borda_preco"] = bordas_itens[i].borda_precotamanho[y].precotamannho_preco;
                    return bordas_itens[i];
                }
            }
        }
    }
    return false;
}
function get_massa_dados(massa, tamanho){
    var cnt = massas_itens.length;
    for(var i=0;i<cnt;i++){
        if(massas_itens[i].massa_id == massa){
            var cntt = massas_itens[i].massa_precotamanho.length;
            for(var y=0; y<cntt;y++){
                if(massas_itens[i].massa_precotamanho[y].precotamannho_tamanhoid == tamanho){
                    massas_itens[i]["massa_preco"] = massas_itens[i].massa_precotamanho[y].precotamannho_preco;
                    return massas_itens[i];
                }
            }            
        }
    }
    return false;
}
function get_tamanho_dados(tamanho){
    var cnt = tamahos_itens.length;
    for(var i=0;i<cnt;i++){
        if(tamahos_itens[i].tamanho_id == tamanho){
            return tamahos_itens[i];
        }
    }
    return false;
}



    function reendListaIngredientes(elemento){
        var codtarget = elemento.data("target-combo");
        var codsabor = elemento.data("codsabor");
        var pedaco = elemento.data("pdc");
        var dadositematual = $("#"+codtarget).data("dadosdoitematual");
        var dadositemmontagem = $("#"+codtarget).data("dadositem");
        var tamanhoitem = dadositematual.data_tamanho;
        var qtdsabor = dadositemmontagem.item_qtdsabor;
        var config = $("#"+codtarget).data("combo-confitem");
        var ttopcpreco = 0;
        
        var htmlistaings = "";
        var htmllistingsopc = "";
        //listadeingredientes_opc
        var dadossabor = get_dadossabor(codsabor);
        if(dadossabor !== false){
            var nomesabor = dadossabor.sabor_nome;
            var categoriasabor = dadossabor.sabor_categorianome;
            var codsessaosabor = dadossabor.sabor_sessaoid;
            var ings_sabor = dadossabor.sabor_ingredientes;
            if(ings_sabor !== undefined && ings_sabor.length>0){
                var cntingsab = ings_sabor.length;
                for(var ig=0;ig<cntingsab;ig++){
                    var coging = ings_sabor[ig].sabor_ingrediente_codingrediente;
                    
                    var ingrem = ingred_rem(dadositemmontagem.sabores,pedaco,ings_sabor[ig].sabor_ingrediente_codingrediente);
                    
                    var ladobotao = (ingrem)? "blbg_left" : "blbg_right";
                    var bolabotao = (ingrem)? "bl_left" : "bl_right";
                    
                    htmlistaings += "<li class='li_inglista ingrdts'><span class='nomeinglista'>"+ings_sabor[ig].sabor_ingrediente_nomeingrediente+"</span>"
                            +"<a href='#' class='ingdossabores bolabotao_link "+ladobotao+"' data-coding='"+coging+"' data-target-combo='"+codtarget+"' data-sabor='"+codsabor+"' data-pedaco='"+pedaco+"' ><span class='bolabotao "+bolabotao+"'></span></a>"
                            +"</li>";
                }
            }
            $(".titulo_nomesabor."+codtarget).text(nomesabor);
            
            if(config == false || config.opcionais.INGREDIENTE.COBRAR !== "NP"){
                if(dadossabor.sabor_ingredientesopcionais!==undefined){
                    var contingopc = dadossabor.sabor_ingredientesopcionais.lenght;
                    for(var iopc=0; iopc<contingopc;iopc++){
                        htmllistingsopc += "";
                    }
                }else{
                    var confings = ingredientes_itens.length;
                    for(var hj=0;hj<confings;hj++){
                        if(ingredientes_itens[hj].ingrediente_opcional === "S" && codsessaosabor == ingredientes_itens[hj].ingrediente_sessaoid){
                            if(ingredientes_itens[hj].ingredientes_precotamanho !== undefined){

                                var precoingopc = get_precoIngrediente(ingredientes_itens[hj],tamanhoitem, config, qtdsabor);
                                if(precoingopc !== false){
                                    
                                    var coging = ingredientes_itens[hj].ingrediente_id;
                                    var nomeingopc = ingredientes_itens[hj].ingrediente_nome;
                                    var ingopcenfalta= ingredientes_itens[hj].ingrediente_emfalta;
                                    var ingadd = ingred_add(dadositemmontagem.sabores,pedaco,coging);
                                    
                                    ttopcpreco = (ingadd)? ttopcpreco+precoingopc : ttopcpreco; 
                                    
                                    var ladobotao = (ingadd)? "blbg_right" : "blbg_left";
                                    var bolabotao = (ingadd)? "bl_right" : "bl_left";
                                    
                                    precoingopc = (precoingopc > 0)? "<span class='ingopcpreco'> + " + parseReal(precoingopc) + "</span>" : "";
                                    htmllistingsopc += "<li class='li_inglista'><span class='nomeinglista'>"+nomeingopc+precoingopc+"</span>"
                                    +"<a href='#' class='ingopcsabores bolabotao_link "+ladobotao+"' data-coding='"+coging+"'  data-target-combo='"+codtarget+"' data-sabor='"+codsabor+"' data-pedaco='"+pedaco+"' ><span class='bolabotao "+bolabotao+"'></span></a>"
                                    +"</li>";
                                }
                            }
                        }
                    }
                }
            }
        }
        
        var valopcpreco = "";//(ttopcpreco>0)? " (+R$ "+ parseReal(ttopcpreco) +")" : "";
        htmllistingsopc = (htmllistingsopc != "")? "<li class='tituloopc'>Ingredientes Opcionais"+valopcpreco+"</li>"+htmllistingsopc : htmllistingsopc;
        
        $(".listacomingredientessabor."+codtarget).html(htmlistaings);
        $(".listacomingredientessabor_opc."+codtarget).html(htmllistingsopc);
        //$(".listadeingredientes_opc."+codtarget).stop().animate({right: '0px'}, 400);
        //sabor_ingredientesopcionais
        $(".nano").nanoScroller();

        /*
         ingrediente_categoria:"salgado"
         ingrediente_emfalta:"N"
         ingrediente_id:"46"
         ingrediente_nome:"Tomate Picado"
         ingrediente_opcional:"S"
         ingrediente_sessaoid:"5"
         ingredientes_precotamanho
         */
    }
    
    function ingred_rem(saboresit,pedaco,coding){
        if(saboresit!=undefined){
            var cntsabor = saboresit.length;
            for(var i=0;i<cntsabor;i++){
                if(saboresit[i].item_saborpedaco==pedaco){
                    if(saboresit[i].item_saboringredrem !== false){
                        var cntingrem = saboresit[i].item_saboringredrem.length;
                        for(var rs=0;rs<cntingrem;rs++){
                            if(saboresit[i].item_saboringredrem[rs].ingrediente_cod == coding){
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }
    
    function ingred_add(saboresit,pedaco,coding){
        if(saboresit!=undefined){
            var cntsabor = saboresit.length;
            for(var i=0;i<cntsabor;i++){
                if(saboresit[i].item_saborpedaco==pedaco){
                    if(saboresit[i].item_saboringredcom !== false){
                        var cntingrem = saboresit[i].item_saboringredcom.length;
                        for(var rs=0;rs<cntingrem;rs++){
                            if(saboresit[i].item_saboringredcom[rs].ingrediente_cod == coding){
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }
    
    function get_dadossabor(codsabor){
        if(sabores_itens !== undefined && sabores_itens.length>0){
            var contsabor = sabores_itens.length;
            for(var i=0;i<contsabor;i++){
                if(sabores_itens[i].sabor_id == codsabor){
                    return sabores_itens[i];
                }
            }
        }
        return false;
    }
    
    function set_itemSimples(elemento, acao){
        var codtarget   = elemento.data("target-combo");
        var infocombo   = $("#montador_combo").data("combo-infos");
        var confitem    = $("#"+codtarget).data("combo-confitem");
        
        var sabor       = elemento.data("codsabor");
        var codtamanho  = elemento.data("codtam");
        
        var dados = {
            data_codconfcombo   : confitem.codconfig,
            data_codcombo       : infocombo.combo_id,
            data_hascombo       : $("#montador_combo").data("combo-hash"),
            data_hashitem       : confitem.hash,
            data_itemtamanho    : codtamanho,
            data_itemsabor      : sabor,
            data_acao           : acao
        };
        
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/setitemsimplescombo/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                var qtdatl = msg.dado.qtd;
                var comple = msg.dado.completo;
                combocompleto(msg.dado.combocompleto);
                if(acao === "adiciona" || acao === "remove"){
                    var parentinput = elemento.parent();
                    var boxitem = parentinput.parent();
                    parentinput.children(".valqtditem").val(qtdatl);
                    if(qtdatl > 0){
                        boxitem.removeClass("zeroitem");
                    }else{
                        boxitem.addClass("zeroitem");
                    }

                    if(comple === true){
                        $(".item_simp_comb."+codtarget+".zeroitem").addClass("inativo");
                    }else{
                        $(".item_simp_comb."+codtarget+".zeroitem").removeClass("inativo");
                    }
                }else if( acao === "troca" ){
                    $(".item_simp_comb."+codtarget).removeClass("selecionado");
                    var boxitem = elemento.parent();
                    boxitem.addClass("selecionado");
                }
                /*if(msg.dados.combo != undefined){
                    if(msg.dados.combo.preco != undefined){
                        $(".preco_combo").text( " - R$ "+parseReal(msg.dados.combo.preco));
                    }
                }*/
                
                comboiniciado_ok = true;
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
        
        
    }
    
    function acoesAdicionaRemove(dadositemmontando, acao, codtarget){
        var dados = {
            dadositem : dadositemmontando,
            acao : acao
        };
        
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/maismenos_item/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);
                peencheMontadorItem(codtarget);                
            }else if(msg.res === false){
                
            }else{
                
            }

        }); 
    }
    
    function set_saboritem(elemento){
        var codtarget = elemento.data("target-combo");
        
        var dadositemmontando = $("#"+codtarget).data("dadosdoitematual");
        var pedaco = elemento.data("pdc");
        
        $(".esmaecer_montador."+codtarget).removeClass("noitemselected");
        setTimeout(function(){
            $(".esmaecer_montador."+codtarget).removeClass("blackesm");
        },400);
        
        var dadosAcao = {
            data_sabor : elemento.data("codsabor"),
            data_pedaco : pedaco
        };
        
        var dados = {
            dadositem : dadositemmontando,
            dadosacao : dadosAcao,
            acao : "adicionar"
        };
        
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/sabores/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);
                peencheMontadorItem(codtarget);    
                comboiniciado_ok = true;
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    function combocompleto(combocompleto){
        if(combocompleto === false){
            $(".btnfinaliza_combo").removeClass("ativo");
        }else if(combocompleto === true){
            $(".btnfinaliza_combo").addClass("ativo");
            $('#btnfinalizacombo').animateCss('tada');
        }else{
            $(".btnfinaliza_combo").removeClass("ativo");
        }
    }
    
    function set_itemmontador(elemento){
        var codtarget = elemento.data("target-combo");
        var infocombo = $("#montador_combo").data("combo-infos");
        var confitem = $("#"+codtarget).data("combo-confitem");
        var pedaco = elemento.data("pdc");
        
        $(".esmaecer_montador."+codtarget).removeClass("noitemselected");
        setTimeout(function(){            
            $(".esmaecer_montador."+codtarget).removeClass("blackesm");
        },400);
        
        var dados = {
            data_codconfcombo   : confitem.codconfig,
            data_codcombo       : infocombo.combo_id,
            data_hascombo       : $("#montador_combo").data("combo-hash"),
            data_hashitem       : confitem.hash,
            data_itemtamanho    : elemento.data("codtamanho"),
            data_itemsabor      :  elemento.data("codsabor"),
            data_pedaco         : pedaco
        };
        
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/setitemcombo/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                
                msg.dados.hasitem;
                msg.dados.itemrend;
                
                var codsabor = [];
                if(msg.dados.itemrend.sabores !== undefined && msg.dados.itemrend.sabores.length>0){
                    for(var ie=0;ie<msg.dados.itemrend.sabores.length;ie++){
                        codsabor[ie]= msg.dados.itemrend.sabores[ie].item_saborid;
                    }
                }                
                var dadositem = { 
                    data_hash : msg.dados.hasitem,
                    data_sabor: codsabor,
                    data_tamanho: msg.dados.itemrend.item_tamanhoid,
                    data_qtdsabor: msg.dados.itemrend.item_qtdsabor
                };
                
                $("#"+codtarget).data("dadosdoitematual", dadositem);
                $("#"+codtarget).data("dadositem",msg.dados.itemrend);
                peencheMontadorItem(codtarget);
                
                combocompleto(msg.dados.combocompleto);
                //combocompleto
                /*if(msg.dados.combo != undefined){
                    if(msg.dados.combo.preco != undefined){
                        $(".preco_combo").text( " - R$ "+parseReal(msg.dados.combo.preco));
                    }
                }*/
                comboiniciado_ok = true;
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
        
        
    }
    
    function peencheDadosRetorno(msg,codtarget){
        //console.log(msg);
        //console.log("remove");
        if(codtarget != undefined && codtarget != false){
            var dadositem = $("#"+codtarget).data("dadosdoitematual");
            //console.log(dadositem);
            var codsabor = [];
            if(msg.item != undefined){
                //console.log(msg.item);
                //console.log("dda");
                if(msg.item.sabores !== undefined && msg.item.sabores.length>0){
                    for(var ie=0;ie<msg.item.sabores.length;ie++){
                        codsabor[ie]= msg.item.sabores[ie].item_saborid;
                    }
                }                
                if(msg.item.hash != undefined ){
                    dadositem = {};
                    dadositem["data_hash"] = msg.item.hash;
                    //console.log(msg.item.hash);
                }
                dadositem["data_sabor"] = codsabor;
                dadositem["data_tamanho"] = msg.item.item_tamanhoid;
                dadositem["data_qtdsabor"] = msg.item.item_qtdsabor;
                $("#"+codtarget).data("dadositem",msg.item);      
            }else if(msg.dados.dadossabores != undefined){
                dadositem = {};
                dadositem["data_sabor"] = msg.dados.dadossabores[0].sabor_id;
                dadositem["data_tamanho"] = msg.dados.dadossabores[0].sabor_precostamanhos[0].sabor_precotamanhos_codtamanho;
                dadositem["data_qtdsabor"] = 1;
            }
            $("#"+codtarget).data("dadosdoitematual", dadositem);                
        }else{
            var dadositem = $("#cont_mont_lanche").data("dadosdoitematual");
            var codsabor = [];
            //console.log(dadositem);
            //console.log(msg.item);
            if(msg.item != undefined){
                //console.log("entrou");
                if(msg.item.sabores !== undefined && msg.item.sabores.length>0){
                    for(var ie=0;ie<msg.item.sabores.length;ie++){
                        codsabor[ie] = msg.item.sabores[ie].item_saborid;
                    }
                }
                if(msg.item.hash != undefined){
                    dadositem = {};
                    dadositem["data_hash"] = msg.item.hash;
                }else if(msg.item.item_hash != undefined){
                    dadositem = {};
                    dadositem["data_hash"] = msg.item.item_hash;
                }
                dadositem["data_sabor"] = codsabor;
                dadositem["data_tamanho"] = msg.item.item_tamanhoid;
                dadositem["data_qtdsabor"] = msg.item.item_qtdsabor;
                $("#cont_mont_lanche").data("dadositem",msg.item);
            }
            $("#cont_mont_lanche").data("dadosdoitematual", dadositem);
        }
    }
    
    function acoesObservacoes(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/observacoes/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg, codtarget);
                atualizaPrecoMostrar(codtarget, msg.item);
                if(codtarget != false){                      
                    $(".btnobs_montmodal."+codtarget).trigger("click");
                }else{
                    if(redir_item === true){
                        //document.location.href = '/montar/pizza/'+msg.item.item_cod;  
                        // objeto ou string - title
                        window.history.pushState("Pizza", "Pizza", '/montar/pizza/'+msg.item.item_cod);
                        redir_item = false;
                        //hideLoading();
                        //peencheDadosRetorno(msg);
                        rendPizzaFormaPizza(msg.item);
                    }else{
                        rendPizzaFormaPizza(msg.item);
                    }
                    //$("#negative").trigger("click");
                }
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    function atualizaPrecoMostrar(targetaba, dadositem){
        if(targetaba != false){
            var preco = dadositem.item_preco;
            $(".precotitleitem."+targetaba).text( " - R$ " + parseReal(preco));
        }
    }
    
    function acoesBorda(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/borda/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg, codtarget); 
                atualizaPrecoMostrar(codtarget, msg.item);
                if(codtarget != false){
                    $(".btnbrd_montmodal."+codtarget).trigger("click");
                }else{
                    if(redir_item === true){
                        //document.location.href = '/montar/pizza/'+msg.item.item_cod;  
                        // objeto ou string - title
                        window.history.pushState("Pizza", "Pizza", '/montar/pizza/'+msg.item.item_cod);
                        redir_item = false;
                        rendPizzaFormaPizza(msg.item);
                    }else{
                        rendPizzaFormaPizza(msg.item);
                        checkBordaselected();
                    //$("#negative").trigger("click");
                    }
                }
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    function acoesMassa(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        
        //processaAcoesInsumos(dados, elemento);
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/massa/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);  
                atualizaPrecoMostrar(codtarget, msg.item);
                if(codtarget != false){
                    $(".btnmss_montmodal."+codtarget).trigger("click");
                }else{
                    if(redir_item === true){
                        //document.location.href = '/montar/pizza/'+msg.item.item_cod;  
                        window.history.pushState("Pizza", "Pizza", '/montar/pizza/'+msg.item.item_cod);
                        redir_item = false;
                        rendPizzaFormaPizza(msg.item);
                    }else{
                        rendPizzaFormaPizza(msg.item);
                        $("#negative").trigger("click");
                    }
                }
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    /*
     * Organiza dados para executar a ação
     * 
     * @param json dadositem
     * @param json dadosacao
     * @param string acao
     * @returns none
     */
    function acoesInsumos(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        
        //processaAcoesInsumos(dados, elemento);
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/insumos/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);
                atualizaPrecoMostrar(codtarget, msg.item);
                if(codtarget != false){
                    rendIngredientesSabor_1(codtarget, dadosacao.sabor);                    
                }else{
                    
                    rendPizzaFormaPizza(msg.item, "insumo");
                    if(acao == "excluir" || acao == "adicionar"){
                        $(".linkpizza.openlistasabores_dsk[data-pedaco='"+dadosacao.pedaco+"']").trigger("click");
                    }
                    
                }
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    /*
     * 
     * @param {type} dadositem
     * @param {type} dadosacao
     * @param {type} acao
     * @param {type} elemento
     * @returns {undefined}
     */
    function atualizarTamanho(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/tamanho/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);
                if(codtarget != false){                    
                    peencheMontadorItem(codtarget);
                }else{
                    if(redir_item === true){
                        //document.location.href = '/montar/pizza/'+msg.item.item_cod;  
                        window.history.pushState("Pizza", "Pizza", '/montar/pizza/'+msg.item.item_cod);
                        redir_item = false;
                        rendPizzaFormaPizza(msg.item);
                    }else{
                        rendPizzaFormaPizza(msg.item);
                        $("#negative").trigger("click");
                    }
                }
                //rendIngredientesSabor_1(codtarget, dadosacao.sabor);
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    
    
    function atualizarQtdSabor(dadositem, dadosacao, acao, elemento){
        var dados = {
            dadositem : dadositem,
            dadosacao : dadosacao,
            acao : acao
        };
        var codtarget = false;
        if(elemento != undefined){
            codtarget = elemento.data("target-combo");
        }
        $.ajax({
            method: "POST",
            url: "/exec/montadoritem/quantidadesabor/",
            data: dados,
            dataType: "json"
        }).done(function( msg ) {
            if(msg.res === true){
                peencheDadosRetorno(msg,codtarget);
                if(codtarget != false){                    
                    peencheMontadorItem(codtarget);
                }else{
                    if(redir_item === true){
                        //document.location.href = '/montar/pizza/'+msg.item.item_cod;  
                        window.history.pushState("Pizza", "Pizza", '/montar/pizza/'+msg.item.item_cod);
                        redir_item = false;
                        rendPizzaFormaPizza(msg.item);
                    }else{
                        rendPizzaFormaPizza(msg.item);
                        $("#negative").trigger("click");
                    }
                }
                //rendIngredientesSabor_1(codtarget, dadosacao.sabor);
            }else if(msg.res === false){
                
            }else{
                //console.log("Falha na execução");
            }

        }); 
    }
    


function buscaItemMontador(dadositem){
    /*var dadositem = {
        coditem: "",
        codtaman: "",
        codtipo: "",
        hashitem:""
    };*/
    
    $.ajax({
        method:"POST",
        url: "/exec/montadoritem/abriritem/",
        data:dadositem,
        dataType: "json"
    }).done(function( msg ) {
        if(msg.res === true){
            rendAbrirItem(msg.dados);
        }else if(msg.res === false){
            //document.location.reload();
        }else{

        }
    });

}

function get_dadosSessao(id){
    var cntsessao = sessoes_itens.length;
    for(var i=0;cntsessao;i++){
        if(sessoes_itens[i].sessao_id == id){
            return sessoes_itens[i];
        }
    }
    return false;
}

function reendInfoCombo(alldados,hash){
    var dados = alldados.info;
    //reendInfoCombo(msg.dados.info, msg.dados.hash);
    //reendAbasCombo(msg.dados.itens, msg.dados.hash);
    
    var precom = (dados.combo_preco === null)? "" : "- R$ " + parseReal(dados.combo_preco);    
    $("#montador_combo").data("combo-infos",dados);
    $("#montador_combo").data("combo-hash",hash);
    $(".nome_docombo").text(dados.combo_nome);
    $(".preco_combo").text(precom);
    $(".descricao_combo").text(dados.combo_descricao);
	/*$("#montador_combo").css("background","url("+dados.combo_background+") no-repeat top #a40000 / cover");*/
	$("#top_combo").css("background","url("+dados.combo_background+") no-repeat top #a40000 / cover");
    
    if(alldados.combo != undefined){
        if(alldados.combo.preco != undefined){
            $(".preco_combo").text( " - R$ "+parseReal(alldados.combo.preco));
        }
    }
    
    if(dados.combo_modelo === "COMBINADO"){
        reendCorpoCombinado(alldados.itens, hash);
        //reendCorpoCombinado(true);
    }else if(dados.combo_modelo === "PADRAO"){
        $("#montador_combo").removeClass("combocombinado");
        reendAbasCombo(alldados.itens, hash);
    }
    /*$("#montador_combo").css({
        background : "url("+dados.combo_background+") no-repeat top #a40000"
    });*/
}

function editar_reendInfoCombo(alldados,hash){   
    var dados = alldados.info;
    var precom = "";
    if(dados.combo_preco != undefined){
        precom = (dados.combo_preco === null)? "" : "- R$ " + parseReal(dados.combo_preco);    
    }
    
    $("#montador_combo").data("combo-infos",dados);
    $("#montador_combo").data("combo-hash",hash);
    $(".nome_docombo").text(dados.combo_nome);
    $(".preco_combo").text(precom);
    $(".descricao_combo").text(dados.combo_descricao);
    
    if(dados.combo_modelo === "COMBINADO"){
        reendCorpoCombinado(alldados.itens, hash);
        //reendCorpoCombinado(true);
    }else if(dados.combo_modelo === "PADRAO"){
        editar_reendAbasCombo(alldados.itens, hash);
    }
    
}
/*
function editar_reendInfoCombo(dados,hash){    
    var precom = (dados.combo_preco === null)? "" : "- R$ " + parseReal(dados.combo_preco);    
    $("#montador_combo").data("combo-infos",dados);
    $("#montador_combo").data("combo-hash",hash);
    $(".nome_docombo").text(dados.combo_nome);
    $(".preco_combo").text(precom);
    $(".descricao_combo").text(dados.combo_descricao);
}
*/
//sabor_ingrediente_nomeingrediente
function get_strListaIngred(arrListaing){
    var contings = arrListaing.length;
    var strings = "";
    for(var i=0;i<contings;i++){
        strings += arrListaing[i].sabor_ingrediente_nomeingrediente;
        strings = (i+1 === contings)? strings : strings + ", ";
    }
    return strings;
}

function get_saboresSessao(codsessao){
    var arrsaboressessao = [];
    var cntsabsessao = 0;
    var cntsabores = sabores_itens.length;
    for(var t=0; t<cntsabores; t++){
        if(sabores_itens[t].sabor_sessaoid == codsessao){
            arrsaboressessao[cntsabsessao] = sabores_itens[t].sabor_id;
            cntsabsessao++;
        }
    }
    return arrsaboressessao;
}

function get_tamanhoPadraoSessao(codsessao){
    var arrsaboressessao = [];
    var cntsabsessao = 0;
    var cntsabores = tamahos_itens.length;
    for(var t=0; t<cntsabores; t++){
        if(tamahos_itens[t].tamanho_sessaoid == codsessao && tamahos_itens[t].tamanho_padrao == 'S'){
            arrsaboressessao[cntsabsessao] = {ID : tamahos_itens[t].tamanho_id};
            cntsabsessao++;
        }
    }
    return arrsaboressessao;
}

function reendListaSabores(sabores,codtarget,tamanhos, pedaco,addsabor){
    addsabor = (addsabor!==undefined && addsabor!==false)? " addsabor " : "";
    pedaco = (pedaco==undefined)? 1 : pedaco;
      
    
    var conf = $("#"+codtarget).data("combo-confitem");
    var dadosatl = $("#"+codtarget).data("dadosdoitematual");
    var qtdtamanho = 0;
    
    if(conf!== false){
        qtdtamanho = tamanhos.length;
    }else{
        qtdtamanho = 1;
    }
    // se item faz uso do montador
    var nomesessao = "";  
    
    var contsabores = sabores.length;
    var contlistasabores = sabores_itens.length;    
    var htmcont = ""; 
    
    if(qtdtamanho > 0){
        var otamanho = null;
        if(conf == false){
            var codsessao = get_sessaoSabor(dadosatl.data_sabor[0]);
            sabores = get_saboresSessao(codsessao);
            contsabores = sabores.length;
            otamanho = dadosatl.data_tamanho;
        }else{
            otamanho = tamanhos[0].ID;
        }
        if($(".selecttamitem."+codtarget).length>0 ){
            var tmatl = $(".selecttamitem."+codtarget).val();
            otamanho = (tmatl != undefined)? tmatl : otamanho;
        }
        
        
        for(var i=0;i<contsabores;i++){        
            var idsabor = sabores[i];
            for(var y=0;y<contlistasabores;y++){
                var idsaborlista = sabores_itens[y].sabor_id;
                if(idsaborlista == idsabor){
                    var nomefoto = sabores_itens[y].sabor_fotonome;
                    var idfoto = sabores_itens[y].sabor_fotoid;
                    var nomesabor = sabores_itens[y].sabor_nome;
                    var listaingreds = get_strListaIngred(sabores_itens[y].sabor_ingredientes);
                    
                    var codtamaho = null;
                    if(sabores_itens[y].sabor_precostamanhos != undefined && sabores_itens[y].sabor_precostamanhos.length>0){
                        
                        
                        var qtdtamsab = sabores_itens[y].sabor_precostamanhos.length;
                        for(var t=0;t<qtdtamsab;t++){
                            if(otamanho == sabores_itens[y].sabor_precostamanhos[t].sabor_precotamanhos_codtamanho){
                                codtamaho = otamanho;
                            }
                        }
                        if(codtamaho != null){
                            nomesessao = sabores_itens[y].sabor_sessaonome;

                            htmcont +=          "<li class='itensdelistasabores "+codtarget+addsabor+"' data-target-combo='"+codtarget+"' data-codsabor='"+idsaborlista+"' data-pdc='"+pedaco+"' data-codtamanho='"+codtamaho+"'>"
                                    +               "<div class='fotoimglistasabor'>"
                                    +                   "<img src='"+urlsfiles.imagens+"produtos/"+idfoto+"/60/"+nomefoto+"' />"
                                    +               "</div>"
                                    +               "<span class='nomesaborlistasabores'>"+nomesabor+" <small class='precosaborlistasabores'></small></span>"
                                    +               "<p class='descingredienteslistasabores'>"+listaingreds+"</p>"
                                    +           "</li>";  
                        }
                    }
                                  
                }
            }        
        }
    }
    
    var htmcontbusca = "<li class='itensdelistasaboresbusca'>"
    +               "<input type='text' class='buscarsabor' placeholder='Buscar Sabor' />"
    +           "</li>";  
    
    var htmcontm ="<div class='listadesaboresescolher "+codtarget+"'>"
            +        "<div class='nano'>"
            //+           "<span class='titulolistasabores "+codtarget+"'>"+nomesessao+"</span>"                    
            +           "<span class='titulolistasabores "+codtarget+"'><img src='"+urlsfiles.media+vsao+"/img/fechar_side_esq.png' class='close_sidemenu_esq'/>Selecione um Sabor</span>"                    
            +           "<ul class='listacomsabores nano-content  "+codtarget+"'>"+htmcontbusca+htmcont+"</ul>"
            +        "</div>"
            +    "</div>"
            +    "<div class='listadeingredientes_opc "+codtarget+"'>"
            +        "<div class='nano'>"
            +           "<span class='topoeditaringred'><img src='"+urlsfiles.media+vsao+"/img/fechar_side.png' class='close_sidemenu'/>Editar ingredientes</span>"
            +           "<span class='titulo_nomesabor "+codtarget+"'></span>"
            +           "<div class='content_listaingredientes nano-content'>"
            +               "<ul class='listacomingredientessabor "+codtarget+"'></ul>"
            +               "<ul class='listacomingredientessabor_opc "+codtarget+"'></ul>"
            +           "</div>"
            +        "</div>"
            +    "</div>"
            +    "<div class='listademassas "+codtarget+"'>"
            +        "<div class='nano'>"
            +           "<span class='topomassa "+codtarget+"'><img src='"+urlsfiles.media+vsao+"/img/fechar_side.png' class='close_sidemenu'/></span>"
            +           "<div class='content_listamassa nano-content'>"
            +               "<ul class='listacommassasitem "+codtarget+"'></ul>"
            +           "</div>"
            +        "</div>"
            +    "</div>"
            +    "<div class='listadebordas "+codtarget+"'>"
            +        "<div class='nano'>"
            +           "<span class='topoborda "+codtarget+"'><img src='"+urlsfiles.media+vsao+"/img/fechar_side.png' class='close_sidemenu'/></span>"
            +           "<div class='content_listaborda nano-content'>"
            +               "<ul class='listacombordasitem "+codtarget+"'></ul>"
            +           "</div>"
            +        "</div>"
            +    "</div>"
            +    "<div class='listadeobservacoes "+codtarget+"'>"
            +        "<div class='nano'>"
            +           "<span class='topoobservacoes "+codtarget+"'><img src='"+urlsfiles.media+vsao+"/img/fechar_side.png' class='close_sidemenu'/></span>"
            +           "<div class='content_listaobservacoes nano-content'>"
            +               "<ul class='listacomobservacoesitem "+codtarget+"'></ul>"
            +           "</div>"
            +        "</div>"
            +    "</div>";
    
    return htmcontm;
}

function htmlMontadorPizza_1s(targetaba){
    
    var htmcont ="<div class='coluna_esquerda "+targetaba+"'  data-target-combo='"+targetaba+"' >"
            +        "<div class='formapizza "+targetaba+"'  data-target-combo='"+targetaba+"' ></div>"
            +    "</div>"
            +    "<div class='coluna_direita "+targetaba+"' data-target-combo='"+targetaba+"' style='width:560px;' >"
            +        "<h3 class='tit_itemmont'><span class='nometetleitem "+targetaba+"' >Nome do Item Escolhido</span> <span class='precotitleitem "+targetaba+"' ></span></h3>"
            +        "<select data-tamanhos='' class='txt selecttamitem "+targetaba+"' data-tamanhos data-target-combo='"+targetaba+"'></select>"
            +        "<select data-listaqtd='' class='txt selectqtditem "+targetaba+"' data-target-combo='"+targetaba+"'></select>"
            +        "<div class='clear'></div>"
            +        "<div class='ing_modalmont "+targetaba+"' data-target-combo='"+targetaba+"'>"            
            +    "</div>";
    return htmcont;
}

function htmlMontadorPizza_maisd1s(targetaba, contsabores, codtamanho){
    
    var htmcont ="<div class='coluna_esquerda "+targetaba+"'  data-target-combo='"+targetaba+"' >"
            +        "<div class='formapizza "+targetaba+"'  data-target-combo='"+targetaba+"' ></div>"
            +    "</div>"
            +    "<div class='coluna_direita "+targetaba+"' data-target-combo='"+targetaba+"' style='width:560px;' >"
            +        "<div>"
            +        "<h3 class='tit_itemmont'><span class='nometetleitem "+targetaba+"' >Nome do Item Escolhido</span> <span class='precotitleitem "+targetaba+"' ></span></h3>"
            +        "<select data-tamanhos='' class='txt selecttamitem "+targetaba+"' data-tamanhos data-target-combo='"+targetaba+"'></select>"
            +        "<select data-listaqtd='' class='txt selectqtditem "+targetaba+"' data-target-combo='"+targetaba+"'></select>"
            +        "<a title='' class='btnbrd_montmodal "+targetaba+"'  data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'></a>"
            +        "<a title='' class='btnmss_montmodal "+targetaba+"' data-codtam='"+codtamanho+"'  data-target-combo='"+targetaba+"'></a>"
            +        "</div>"
            +        "<div class='clear'></div>"
            +        "<div class='listsaboresdapizza listasabores "+targetaba+"' data-target-combo='"+targetaba+"'></div>"
            +        "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-target-combo='"+targetaba+"'>Observações</a>"
            +    "</div>";
    return htmcont;
}

function htmlMontadorItem_maisd1s(targetaba, contsabores, codtamanho){
    var htmcont =   "<div class='coluna_esquerda "+targetaba+"'  data-target-combo='"+targetaba+"' >"
            +        "<img class='img_modalmont "+targetaba+" '  data-target-combo='"+targetaba+"' src=''/>"
            /*+        "<p>Quantidade:</p>"
            +        "<div class='qtd_modalcont "+targetaba+"'  data-target-combo='"+targetaba+"' >"
            +           "<a href='#' title='Remover'>-</a>"
            +           "<input type='text' value='01' readonly='true'></input>"
            +           "<a href='#' title='Adicionar'>+</a>"
            +           "<div class='clear'></div>"
            +        "</div>"*/
            +    "</div>"
            +    "<div class='coluna_direita "+targetaba+"' data-target-combo='"+targetaba+"' >"
            +        "<h3 class='tit_itemmont'><span class='nometetleitem "+targetaba+"' >Nome do Item Escolhido</span> <span class='precotitleitem "+targetaba+"' ></span></h3>"
            +        "<select data-tamanhos='' class='txt selecttamitem "+targetaba+"' data-tamanhos data-target-combo='"+targetaba+"'></select>"
            +        "<select data-listaqtd='' class='txt selectqtditem "+targetaba+"' data-target-combo='"+targetaba+"'></select>"
            
            +        "<div class='clear'></div>"
            +        "<div class=' listasabores "+targetaba+"' data-target-combo='"+targetaba+"'></div>"
            +        "<a title='' class='btnbrd_montmodal "+targetaba+"'  data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'></a>"
            +        "<a title='' class='btnmss_montmodal "+targetaba+"' data-codtam='"+codtamanho+"'  data-target-combo='"+targetaba+"'></a>"
            +        "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-target-combo='"+targetaba+"'>Observações</a>"
            +    "</div>";
    return htmcont;
}

function htmlMontadorItem_1s(targetaba){
    var htmcont =   "<div class='coluna_esquerda "+targetaba+"'  data-target-combo='"+targetaba+"' >"
                +        "<img class='img_modalmont "+targetaba+" openlistasabores' data-pdc='1'  data-target-combo='"+targetaba+"' src=''/>"
                /*+        "<p>Quantidade:</p>"
                +        "<div class='qtd_modalcont "+targetaba+"'  data-target-combo='"+targetaba+"' >"
                +           "<a href='#' title='Remover'>-</a>"
                +           "<input type='text' value='01' readonly='true'></input>"
                +           "<a href='#' title='Adicionar'>+</a>"
                +           "<div class='clear'></div>"
                +        "</div>"*/
                +    "</div>"
                +    "<div class='coluna_direita "+targetaba+"' data-target-combo='"+targetaba+"'  >"
                +        "<h3 class='tit_itemmont'><span class='nometetleitem "+targetaba+"' >Nome do Item Escolhido</span> <span class='precotitleitem "+targetaba+"' ></span></h3>"
                +        "<select data-tamanhos='' class='txt selecttamitem "+targetaba+"' data-tamanhos data-target-combo='"+targetaba+"'></select>"
                +        "<select data-listaqtd='' class='txt selectqtditem "+targetaba+"' data-target-combo='"+targetaba+"'></select>"
                +        "<div class='clear'></div>"
                +        "<div class='ing_modalmont "+targetaba+"' data-target-combo='"+targetaba+"'>"
                +        "</div>"
                +    "</div>";
    return htmcont;
    
}

function get_ingredtxt(ingreds, acao){
    var txtings = null;
    if(ingreds !== false && ingreds.length>0){
        txtings = "";
        //console.log(ingreds);
        var cnt = ingreds.length;
        for(var t=0; t<cnt;t++){
            txtings += acao + ingreds[t].ingrediente_nome;
            txtings = ( (t+1)<cnt) ? txtings+"," : txtings;
        }
    }
    return txtings;
}

function getNomeBorda(codtamanho){
    var cnt = bordas_itens.length;
    for(var f=0; f<cnt; f++){
        var tansbd = bordas_itens[f].borda_precotamanho;
        if(tansbd.length>0){            
            for(var fs=0; fs<tansbd.length;fs++){
                var idtam = tansbd[fs].precotamannho_tamanhoid;
                if(codtamanho == idtam){
                    var nomebd = bordas_itens[f].borda_nome;
                    var nomesplit = nomebd.split(":");
                    if(nomesplit.length>1){
                        return nomesplit[0];
                    }
                }
            }            
        }
    }
    return false;
}

function getNomeMassa(codtamanho){
    var cnt = massas_itens.length;
    for(var f=0; f<cnt; f++){
        var tansbd = massas_itens[f].massa_precotamanho;
        if(tansbd.length>0){            
            for(var fs=0; fs<tansbd.length;fs++){
                var idtam = tansbd[fs].precotamannho_tamanhoid;
                if(codtamanho == idtam){
                    var nomebd = massas_itens[f].massa_nome;
                    //console.log(nomebd);
                    var nomesplit = nomebd.split(":");
                    if(nomesplit.length>1){
                        return nomesplit[0];
                    }
                }
            }            
        }
    }
    return false;
}

function getNomeObservacoes(codtamanho){
    var cnt = observacoes_itens.length;
    for(var f=0; f<cnt; f++){
        var tansbd = observacoes_itens[f].observacoes_precotamanho;
        if(tansbd.length>0){            
            for(var fs=0; fs<tansbd.length;fs++){
                var idtam = tansbd[fs].precotamannho_tamanhoid;
                if(codtamanho == idtam){
                    return true;
                }
            }            
        }
    }
    return false;
}

function peencheMontadorItem(targetaba){
    
    var dadosdoitematual = $("#"+targetaba).data("dadosdoitematual");
    var dadositem = $("#"+targetaba).data("dadositem");
    var confitem = $("#"+targetaba).data("combo-confitem");
    //console.log(confitem);
    var tamanhosposiveis = [];
    //var hash = dados.hash;
    
    var opcionaisitem = {};
    
    var hash = dadosdoitematual.data_hash;
    
    var contsabores = parseInt(dadositem.item_qtdsabor);
    var conttamanhositem = 0;
    var dadossessao = get_dadosSessao(dadositem.item_sessaoid);
    var codtamanho = dadositem.item_tamanhoid; 
    
    if(confitem == false){
        //tamanhosposiveis = get
    }else{
        tamanhosposiveis = confitem.tamanhos;
        opcionaisitem = confitem.opcionais;
        conttamanhositem = tamanhosposiveis.length;
    }
    
    // &&  !== false
    
    var per_bordas = false;
    var per_massa = false;
    var per_obs = false;
    var per_ingred = false;
    if(confitem == undefined || confitem == false){
        
        per_bordas = getNomeBorda(codtamanho);
        per_ingred = true;
        per_obs = getNomeObservacoes(codtamanho);
        per_massa = getNomeMassa(codtamanho);
        
    }else if(opcionaisitem !== false){
        per_bordas = (opcionaisitem.BORDAS !== undefined && opcionaisitem.BORDAS.COBRAR !== "NP")? getNomeBorda(codtamanho) : per_bordas;
        per_ingred = (opcionaisitem.INGREDIENTE !== undefined && opcionaisitem.INGREDIENTE.COBRAR !== "NP")? true : per_ingred;
        per_obs = (opcionaisitem.OBSERVASOES !== undefined && opcionaisitem.OBSERVASOES.COBRAR !== "NP")? getNomeObservacoes(codtamanho) : per_obs;
        per_massa = (opcionaisitem.MASSA !== undefined && opcionaisitem.MASSA.COBRAR !== "NP")? getNomeMassa(codtamanho) : per_massa;
    }
    
    
    if(dadossessao.sessao_paginamontador === "montarpizza" || dadossessao.sessao_paginamontador === "montarpizzaquadrada"){
        
        if(dadossessao.sessao_paginamontador === "montarpizzaquadrada"){
            
        }
        
        var dados = {
            tamanho     : codtamanho,
            qtdsabor    : contsabores,
            targetcombo : targetaba,
            sabor       : [],
            montador    : dadossessao.sessao_paginamontador
        };
        
        if(contsabores === 1){
            
            $(".itensdelistasabores."+targetaba).removeClass("addsabor");
            
            var htmlmt_1s = htmlMontadorPizza_1s(targetaba);
            $(".montador_doitem."+targetaba).html(htmlmt_1s);
            
            var codsabor = dadositem.sabores[0].item_saborid;        
            var nomesabor = dadositem.sabores[0].item_sabornome;        
            
            //var precosabor = get_precosTamanho(dados.tamanhosprecos,codtamanho);
            var ftid = dadositem.sabores[0].item_saborfotoid;
            var ftnome = dadositem.sabores[0].item_saborfotonome;
            
            
            // reenderiza lista de tamanhos
            rendTamanhosSelect_(tamanhosposiveis,codtamanho,targetaba);
            // reenderiza lista de ingredientes
            rendIngredientesSabor_1(targetaba,codsabor);    
            $(".nometetleitem."+targetaba).text(nomesabor);
               
            if(conttamanhositem > 1){
                $(".selecttamitem."+targetaba).show();            
            }else{
                $(".selecttamitem."+targetaba).hide();
            }
            
            dados.sabor[0] = {
                pedaco  : 1,
                codsabor: codsabor,
                nome    : nomesabor,
                urlfoto : ""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome,
                montador: dadossessao.sessao_paginamontador
            };
            
            
            
            
            rendPizzaMontagem(dados);
            
            var htmbtn_opc = "";
            if(per_ingred === true){
                htmbtn_opc += "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes</a>";
            }
            if(per_bordas !== false &&  get_bordadasessao(dadossessao.sessao_id,codtamanho) !== false ){                
                htmbtn_opc += "<a title='"+per_bordas+"' class='btnbrd_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_bordas+"</a>";
            }
            if(per_massa !== false  &&  get_massasdasessao(dadossessao.sessao_id,codtamanho) !== false ){
                htmbtn_opc += "<a title='"+per_massa+"' class='btnmss_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_massa+"</a>";
            }
            if(per_obs !== false  &&  get_observacoesdasessao(dadossessao.sessao_id,codtamanho) !== false ){
                htmbtn_opc += "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Observações</a>";
            }  
            
            $(".btnopc_montmodal."+targetaba).remove();
            $(".btnbrd_montmodal."+targetaba).remove();                
            $(".btnmss_montmodal."+targetaba).remove();
            $(".btnobs_montmodal."+targetaba).remove();
            
            
            if(htmbtn_opc !== ""){
                $(".ing_modalmont."+targetaba).after(htmbtn_opc);
            }
            
        }else{
            
            var htmlmt_maisd1s = htmlMontadorPizza_maisd1s(targetaba, contsabores, codtamanho);
            $(".montador_doitem."+targetaba).html(htmlmt_maisd1s);

            $(".nometetleitem."+targetaba).text(dadossessao.sessao_nome);
            
            rendTamanhosSelect_(tamanhosposiveis,codtamanho,targetaba);
            if(conttamanhositem > 1){
                $(".selecttamitem."+targetaba).show();            
            }else{
                $(".selecttamitem."+targetaba).hide();
            }
            var lstsabores = "";
            
            var cnsab = 0;
            for(var ui=1; ui<=contsabores;ui++){
                if(dadositem.sabores.length > cnsab){
                    if(dadositem.sabores[cnsab].item_saborpedaco == ui){
                        //console.log(cnsab);
                        
                        var codsabor = dadositem.sabores[cnsab].item_saborid;        
                        var nomesabor = dadositem.sabores[cnsab].item_sabornome;
                        var ftid = dadositem.sabores[cnsab].item_saborfotoid;
                        var ftnome = dadositem.sabores[cnsab].item_saborfotonome;
                        
                        var ingsem = get_ingredtxt(dadositem.sabores[cnsab].item_saboringredrem, "s/ ");
                        var ingcom = get_ingredtxt(dadositem.sabores[cnsab].item_saboringredcom, "c/ ");//dadositem.sabores[cnsab].item_saboringredcom;
                        
                        var listopcing = (ingsem !== null)? ingsem+";" : "";
                        listopcing += (ingcom !== null)? ingcom: "";
                        var listadosingsopc = "";
                        /*if(ingsem !== null || ingcom !== null){
                            listadosingsopc = "<span class='ingssemcom'>"+listopcing+"</span>";
                        }*/
                        dados.sabor[cnsab] = {
                            pedaco  : ui,
                            codsabor: codsabor,
                            nome    : nomesabor,
                            urlfoto : ""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome
                        };
                        
                        
                        lstsabores += "<div class='box_selectsabor'>"
                                +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                                +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >"+nomesabor+listadosingsopc+"</a>";
                        if(per_ingred === true){
                            lstsabores+=    "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"' data-codsabor='"+codsabor+"'>+ Ingredientes</a>";
                        }
                                +      "</div>";
                        cnsab++;
                    }else{
                        lstsabores += "<div class='box_selectsabor'>"
                            +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                            +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >Selecione um sabor</a>"
                            +      "</div>";
                    }
                }else{
                    lstsabores += "<div class='box_selectsabor'>"
                        +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                        +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >Selecione um sabor</a>"
                        +      "</div>";
                }
            }

            $(".listasabores."+targetaba).html(lstsabores);
            
            rendPizzaMontagem(dados);
            if(per_bordas===false || get_bordadasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnbrd_montmodal."+targetaba).remove();
            }else{
                $(".btnbrd_montmodal."+targetaba).attr("title",per_bordas);
                $(".btnbrd_montmodal."+targetaba).text("Selecionar "+per_bordas);
            }
            
            if(per_massa===false  || get_massasdasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnmss_montmodal."+targetaba).remove();
            }else{
                $(".btnmss_montmodal."+targetaba).attr("title",per_massa);
                $(".btnmss_montmodal."+targetaba).text("Selecionar "+per_massa);
            }
            
            if(per_obs===false  || get_observacoesdasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnobs_montmodal."+targetaba).remove();
            }
            
        }
        
    }else{
        if(confitem == false){
            tamanhosposiveis = get_tamanhos_dosabor(dadositem.sabores[0].item_saborid);
            conttamanhositem = tamanhosposiveis.length;
        }
        var nometitulo = "";
        var precosabor = 0;
        var quantidadeitens = "01";
        if(contsabores === 1){
            
            $(".itensdelistasabores."+targetaba).removeClass("addsabor");
            
            var htmlmt_1s = htmlMontadorItem_1s(targetaba);
            $(".montador_doitem."+targetaba).html(htmlmt_1s);
            
            var codsabor = dadositem.sabores[0].item_saborid;        
            var nomesabor = dadositem.sabores[0].item_sabornome;        
            nometitulo = dadositem.sabores[0].item_sabornome; 
            //var precosabor = get_precosTamanho(dados.tamanhosprecos,codtamanho);
            var ftid = dadositem.sabores[0].item_saborfotoid;
            var ftnome = dadositem.sabores[0].item_saborfotonome;
            precosabor = dadositem.item_preco;
            quantidadeitens = dadositem.item_quantidade;
            // reenderiza lista de tamanhos
            rendTamanhosSelect_(tamanhosposiveis,codtamanho,targetaba);
            // reenderiza lista de ingredientes
            rendIngredientesSabor_1(targetaba,codsabor);    
            $(".nometetleitem."+targetaba).text(nomesabor);
            //$(".precotitleitem "+targetaba).text("R$ " + parseReal(precosabor));
            $(".img_modalmont."+targetaba).attr("src",""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome);        
            if(conttamanhositem > 1){
                $(".selecttamitem."+targetaba).show();            
            }else{
                $(".selecttamitem."+targetaba).hide();
            }

            /*var htmbtn_opc = "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes Opcionais</a>"
                    +"<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-target-combo='"+targetaba+"'>Observações</a>";
            */
           
           var htmbtn_opc = "";
            if(per_ingred === true){
                htmbtn_opc += "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes</a>";
            }
            if(per_bordas !== false &&  get_bordadasessao(dadossessao.sessao_id,codtamanho) !== false ){                
                htmbtn_opc += "<a title='"+per_bordas+"' class='btnbrd_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_bordas+"</a>";
            }
            if(per_massa !== false  &&  get_massasdasessao(dadossessao.sessao_id,codtamanho) !== false ){
                htmbtn_opc += "<a title='"+per_massa+"' class='btnmss_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_massa+"</a>";
            }
            if(per_obs !== false  &&  get_observacoesdasessao(dadossessao.sessao_id,codtamanho) !== false ){
                htmbtn_opc += "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Observações</a>";
            } 
           
            /*if( $(".btnopc_montmodal."+targetaba).length>0){
                $(".btnopc_montmodal."+targetaba).remove();
                $(".btnobs_montmodal."+targetaba).remove();
            }*/
            $(".ing_modalmont."+targetaba).after(htmbtn_opc);

        }else{

            var htmlmt_maisd1s = htmlMontadorItem_maisd1s(targetaba, contsabores, codtamanho);
            $(".montador_doitem."+targetaba).html(htmlmt_maisd1s);

            var ftid = dadositem.sabores[0].item_saborfotoid;
            var ftnome = dadositem.sabores[0].item_saborfotonome;
            precosabor = dadositem.item_preco;
            quantidadeitens = dadositem.item_quantidade;
            $(".nometetleitem."+targetaba).text(dadossessao.sessao_nome);
            //$(".precotitleitem "+targetaba).text("R$ " + parseReal(precosabor));
            $(".img_modalmont."+targetaba).attr("src",""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome);       
            // reenderiza lista de tamanhos
            rendTamanhosSelect_(tamanhosposiveis,codtamanho,targetaba);
            if(conttamanhositem > 1){
                $(".selecttamitem."+targetaba).show();            
            }else{
                $(".selecttamitem."+targetaba).hide();
            }
            var lstsabores = "";
            
            var cnsab = 0;
            for(var ui=1; ui<=contsabores;ui++){
                if(dadositem.sabores.length > cnsab){
                    if(dadositem.sabores[cnsab].item_saborpedaco == ui){
                        //console.log(cnsab);
                        var codsabor = dadositem.sabores[cnsab].item_saborid;        
                        var nomesabor = dadositem.sabores[cnsab].item_sabornome;
                        nometitulo = (nometitulo != "")? nometitulo +" / " : nometitulo;
                        nometitulo += dadositem.sabores[cnsab].item_sabornome;
                        lstsabores += "<div class='box_selectsabor'>"
                                +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                                +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >"+nomesabor+"</a>"
                                +           "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"' data-codsabor='"+codsabor+"'>+ Ingredientes</a>"
                                +      "</div>";
                        cnsab++;
                    }else{
                        lstsabores += "<div class='box_selectsabor'>"
                            +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                            +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >Selecione um sabor</a>"
                            +      "</div>";
                    }
                }else{
                    lstsabores += "<div class='box_selectsabor'>"
                        +           "<span class='lbl_saborqtd'>Sabor "+ui+":</span>"
                        +           "<a href='#' class='selectnovosabor "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='"+ui+"'  >Selecione um sabor</a>"
                        +      "</div>";
                }
            }
            
            nometitulo = dadossessao.sessao_nome + " - " + nometitulo;

            $(".listasabores."+targetaba).html(lstsabores);
            
            if(per_bordas===false || get_bordadasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnbrd_montmodal."+targetaba).remove();
            }else{
                $(".btnbrd_montmodal."+targetaba).attr("title",per_bordas);
                $(".btnbrd_montmodal."+targetaba).text("Selecionar "+per_bordas);
            }
            
            if(per_massa===false  || get_massasdasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnmss_montmodal."+targetaba).remove();
            }else{
                $(".btnmss_montmodal."+targetaba).attr("title",per_massa);
                $(".btnmss_montmodal."+targetaba).text("Selecionar "+per_massa);
            }
            
            if(per_obs===false  || get_observacoesdasessao(dadossessao.sessao_id,codtamanho) === false){
                $(".btnobs_montmodal."+targetaba).remove();
            }

        }
        if(confitem == false){
            
            $(".tit_modalmont").text(dadossessao.sessao_nome);
            $(".precotitleitem."+targetaba).text( " - R$ " + parseReal(precosabor));
            
            var htmlqtd = "<p>Quantidade:</p>"
                + "<div class='qtd_modalcont'>"
                +    "<a href='#' title='Remover' class='menosum_item "+targetaba+"'  data-target-combo='"+targetaba+"' >-</a>"
                +     "<input type='text' value='"+quantidadeitens+"' readonly='true'></input>"
                +     "<a href='#' title='Adicionar' class='maisum_item "+targetaba+"'  data-target-combo='"+targetaba+"' >+</a>"
                +     "<div class='clear'></div>"
                + "</div>";
            $(".img_modalmont."+targetaba).after(htmlqtd);

            var html_btncomprar = " <div class='clear'></div><a title='Adicionar ao carrinho' id='btncomprar_montmodal' class='comprar_item "+targetaba+"'  data-target-combo='"+targetaba+"' ><span class='icon-comprarmodal'></span>Comprar!</a> ";
            $(".coluna_direita."+targetaba).append(html_btncomprar);
        }
    
    }
    
    
}


function editar_reendAbasCombo(alldados, hash){    
    //dados[i].
    console.log(alldados);
    var dados = alldados;
    var htmabas = "";
    var htmcont = "";
    var firstaba = false;
    var cntitens = dados.length;
    var arrRandAbas = [];
    var arrRandAbas2 = [];
    //itempronto
    for(var i=0;i<cntitens;i++){        
        var idsessao = dados[i].sessao;
        var editavel = dados[i].editavel;
        var dadossessao = get_dadosSessao(idsessao);
        var tamanhos = dados[i].tamanhos;
        var sabores = dados[i].sabores;
        var qtditem = dados[i].quantidade;
        
        if(dadossessao !== false){
            var qtdtamanhos = tamanhos.length;
            
            var tipomontador = dadossessao.sessao_paginamontador;
            var icone = dadossessao.sessao_icone;
			console.log(icone);
            var tipoicone = dadossessao.sessao_tipoicone;
            var nome = dadossessao.sessao_nome;
            var targetaba = gerarValor(8,true,true);
            arrRandAbas[i] = targetaba;
            firstaba = (firstaba === false)? targetaba : firstaba;
            
            var url_imgimagem = urlsfiles.imagens.substr(0, urlsfiles.imagens.length-1);
            
            htmabas += "<a href='#' data-combo-abatarget='"+targetaba+"' class='abacombo' title='"+nome+"'><img src='"+url_imgimagem+icone+"'/>"+nome+"</a>";
            htmcont += "<div class='cont_abascombo' data-combo-confitem data-dadosdoitematual data-dadositem id='"+targetaba+"'>";
            
            if(editavel === true){
                
                htmcont += "<div class='esmaecer_montador "+targetaba+"' style='display: none;' data-target-combo='"+targetaba+"'></div>";
                
                htmcont += reendListaSabores(sabores,targetaba,tamanhos);
                
                htmcont +="<div class='montador_doitem "+targetaba+"'  data-target-combo='"+targetaba+"'>";
                
                if(tipomontador === null){
                    //htmcont += htmlMontadorItem(targetaba);
                }else{
                    //htmcont += htmlMontadorPizza(targetaba);
                }
                arrRandAbas2[i] = targetaba;
                htmcont +="</div>";
            }else{
                //console.log(sabores);
                htmcont += reendListaItemSimples(sabores,qtditem, targetaba, tamanhos, dados[i].itensescolhidos);
                
            }
            
            htmcont +="</div>";
        }
    }
    
    $(".abas_combo").html(htmabas);
    $("#content_combo").html(htmcont);
    $(".esmaecer_montador").show();
    $(".abacombo[data-combo-abatarget='"+firstaba+"']").trigger("click");
    /*console.log("abas");
    console.log(arrRandAbas);    
    var cnt_abas = arrRandAbas.length;    
    for(var kl=0; kl<cnt_abas; kl++){ }*/
    
    arrRandAbas.forEach(function(value,idx){
        $("#"+value).data("combo-confitem",dados[idx]);
        //console.log("dados itens");
        //console.log(dados[idx]);
        if(dados[idx].itempronto != undefined){
            $("#"+value).data("dadositem",dados[idx].itempronto);
            $(".listadesaboresescolher").css("left","-310px");
            $(".esmaecer_montador").hide();
            //console.log(value);
            peencheMontadorItem(value);
            var msg = {
                item : dados[idx].itempronto
            };
            msg.item.hash = dados[idx].itempronto.hash;
            peencheDadosRetorno(msg, value);
        }
    });
    /*
    arrRandAbas2.forEach(function(value,idx){
        $("#"+value).data("dadositem",dados[idx].itempronto);
        $(".listadesaboresescolher").css("left","-310px");
        $(".esmaecer_montador").hide();
        peencheMontadorItem(value);
        var msg = {
            item : dados[idx].itempronto
        };
        msg.item.hash = dados[idx].hash;
        peencheDadosRetorno(value, msg);
    });*/
    //$(".nano").nanoScroller();

}


function reendAbasCombo(dados, hash){    
    //dados[i].
    var htmabas = "";
    var htmcont = "";
    var firstaba = false;
    var cntitens = dados.length;
    var arrRandAbas = [];
    var arrListaUmSabor = [];
    var cnt_umsabor = 0;
    var arrListaUmItem = [];
    var cnt_umitem = 0;
    for(var i=0;i<cntitens;i++){        
        var idsessao = dados[i].sessao;
        var editavel = dados[i].editavel;
        var dadossessao = get_dadosSessao(idsessao);
        var tamanhos = dados[i].tamanhos;
        var sabores = dados[i].sabores;
        var qtditem = dados[i].quantidade;
        
        if(dadossessao !== false){
            var qtdtamanhos = tamanhos.length;
            
            var tipomontador = dadossessao.sessao_paginamontador;
            var icone = dadossessao.sessao_icone;
            var tipoicone = dadossessao.sessao_tipoicone;
            var nome = dadossessao.sessao_nome;
            var targetaba = gerarValor(8,true,true);
            arrRandAbas[i] = targetaba;
            firstaba = (firstaba === false)? targetaba : firstaba;
            
            var overf = "";
            if(editavel !== true){
                overf = "style='overflow-y: auto;'";
            }
            
            var url_imgimagem = urlsfiles.imagens.substr(0, urlsfiles.imagens.length-1);
            
            htmabas += "<a href='#' data-combo-abatarget='"+targetaba+"' class='abacombo' title='"+nome+"'><img src='"+url_imgimagem+icone+"'/>"+nome+"</a>";
            htmcont += "<div class='cont_abascombo' data-combo-confitem data-dadosdoitematual data-dadositem id='"+targetaba+"' "+overf+">";
            
            if(editavel === true){
                
                htmcont += "<div class='esmaecer_montador noitemselected blackesm "+targetaba+"'  data-target-combo='"+targetaba+"'></div>";
                
                htmcont += reendListaSabores(sabores,targetaba,tamanhos);
                if(sabores.length===1){
                    arrListaUmSabor[cnt_umsabor] = targetaba;
                    cnt_umsabor++;
                }
                htmcont +="<div class='montador_doitem "+targetaba+"'  data-target-combo='"+targetaba+"'>";
                
                if(tipomontador === null){
                    //htmcont += htmlMontadorItem(targetaba);
                }else{
                    //htmcont += htmlMontadorPizza(targetaba);
                }
                htmcont +="</div>";
            }else{
                //console.log(sabores);
                htmcont += reendListaItemSimples(sabores,qtditem, targetaba, tamanhos);
                if(sabores.length===1){
                    arrListaUmItem[cnt_umitem] = {qtd : qtditem, targ : targetaba};
                    cnt_umitem++;
                }
            }
            htmcont +="</div>";
        }
    }
	
	// itensdelistasabores tWb7gDU6
	
    
    $(".abas_combo").html(htmabas);
    $("#content_combo").html(htmcont);
    $(".esmaecer_montador").show();
    $(".abacombo[data-combo-abatarget='"+firstaba+"']").trigger("click");
    arrRandAbas.forEach(function(value,idx){
        $("#"+value).data("combo-confitem",dados[idx]);
    });
    
    comboiniciado_ok = null;
    excCb = false;
    listcqCb = [];
    intVcombo = null;
    cbqtd = 0;
    cbqtdatl = 0;
    
    var classExec = [];
    var cntClEx = 0;
	
    for(var i=0; i<arrListaUmSabor.length; i++){
        classExec[cntClEx] = ".itensdelistasabores."+arrListaUmSabor[i];
        cntClEx++;
        //$(".itensdelistasabores."+arrListaUmSabor[i]).trigger("click");
    }

    for(var i=0; i<arrListaUmItem.length; i++){
        var qtds = arrListaUmItem[i].qtd;
        if(qtds>1){
            for(var y=0; y<qtds; y++){
                classExec[cntClEx] = ".addmaisitem."+arrListaUmItem[i].targ;
                cntClEx++;
                //$(".addmaisitem."+arrListaUmItem[i].targ).trigger("click");
            }
        }else{
            classExec[cntClEx] = ".addunicoitem."+arrListaUmItem[i].targ;
            cntClEx++;
            //$(".addunicoitem."+arrListaUmItem[i].targ).trigger("click");
        }
    }
    //console.log(classExec);
    listcqCb = classExec;
    cbqtd = classExec.length;
    intVcombo = setInterval(function(){
        if(comboiniciado_ok === true || excCb === false){
            console.log(cbqtdatl+1);
            listcqCb[cbqtdatl];
            $(listcqCb[cbqtdatl]).trigger("click");
            cbqtdatl++;
            if(cbqtdatl == cbqtd){
                clearInterval(intVcombo);
            }
            excCb = true;
        }
    },30);
    
    
    $(".nano").nanoScroller();
}

function reendListaItemSimples(sabores, qtd, targetaba, tamanhos,itensesc){
    var htmlitemsimples = "";
    
    var cntsabores = sabores.length;
    var cntitemsabores = sabores_itens.length;
    var selectitem ="";
    var itensescolhidos = [];
    var cntitem = 0;
    if(itensesc != undefined){
        itensescolhidos = itensesc;
        cntitem = itensescolhidos.length;
    }
    
    for(var i=0; i<cntsabores; i++){
        for(var y=0;y<cntitemsabores; y++){
            var cdsabor = sabores_itens[y].sabor_id;
            if(sabores_itens[y].sabor_id == sabores[i]){
                var cdtipo = sabores_itens[y].sabor_sessaoid;
                var nomeiitem = sabores_itens[y].sabor_nome;
                var fotonomeitem = sabores_itens[y].sabor_fotonome;
                var fotoiditem = sabores_itens[y].sabor_fotoid;
                var caminhofoto = ""+urlsfiles.imagens+"produtos/"+fotoiditem+"/150/"+fotonomeitem;
                //console.log(qtd);
                if( qtd == 1){
                    
                    if(tamanhos !== false){
                        
                        var cnttamthis = tamanhos.length;
                        var tamanhossabor = sabores_itens[y].sabor_precostamanhos.length;
                        for(var ij=0; ij<cnttamthis;ij++){
                            
                            var idtamth = tamanhos[ij].ID;
                            for(var sh=0; sh<tamanhossabor; sh++){
                                var tmsh = sabores_itens[y].sabor_precostamanhos[sh].sabor_precotamanhos_codtamanho;
                                if(tmsh == idtamth){
                                    
                                    selectitem = "";
                                    for(var hs=0; hs<cntitem; hs++){
                                        if(itensescolhidos[hs].item == cdsabor && itensescolhidos[hs].tamanho == tmsh){
                                            selectitem = "selecionado";
                                        }
                                    }
                                    
                                    var nometm = sabores_itens[y].sabor_precostamanhos[sh].sabor_precotamanhos_nometamanho;
                                    
                                    htmlitemsimples += "<div class='item_simp_comb zeroitem "+selectitem+" "+targetaba+"' data-target-combo='"+targetaba+"' >"
                                        +       "<img src='"+caminhofoto+"' alt='"+nomeiitem+"' width='110'/>"
                                        +       "<p>"+nomeiitem+"</p>"
                                        +       "<a href='#' title='Selecionar' class='btn_sel_item addunicoitem "+targetaba+"'  data-target-combo='"+targetaba+"' data-codtam='"+idtamth+"' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"' >Selecionar</a>"
                                        +   "</div>";
                                }
                            }                            
                        }                        
                    }else{
                        
                        selectitem = "";
                        for(var hs=0; hs<cntitem; hs++){
                            if(itensescolhidos[hs].item == cdsabor){
                                selectitem = "selecionado";
                            }
                        }
                        
                        htmlitemsimples += "<div class='item_simp_comb zeroitem "+selectitem+" "+targetaba+"' data-target-combo='"+targetaba+"' >"
                                +       "<img src='"+caminhofoto+"' alt='"+nomeiitem+"' width='110'/>"
                                +       "<p>"+nomeiitem+"</p>"
                                +       "<a href='#' title='Selecionar' class='btn_sel_item addunicoitem "+targetaba+"'  data-target-combo='"+targetaba+"' data-codtam='false' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"' >Selecionar</a>"
                                +   "</div>";
                        
                    }
                }else{
                    var qtditematl = 0;
                    var zritem = "zeroitem";
                    if(cntitem >0){
                        zritem += " inativo";
                    }
                    if(tamanhos !== false){
                        
                        var cnttamthis = tamanhos.length;
                        var tamanhossabor = sabores_itens[y].sabor_precostamanhos.length;
                        for(var ij=0; ij<cnttamthis;ij++){
                            
                            var idtamth = tamanhos[ij].ID;
                            for(var sh=0; sh<tamanhossabor; sh++){
                                var tmsh = sabores_itens[y].sabor_precostamanhos[sh].sabor_precotamanhos_codtamanho;
                                if(tmsh == idtamth){
                                    
                                    for(var hs=0; hs<cntitem; hs++){
                                        if(itensescolhidos[hs].item == cdsabor && itensescolhidos[hs].tamanho == tmsh){
                                            zritem = "";
                                            qtditematl = itensescolhidos[hs].qtd;
                                        }
                                    }
                                    
                                    var nometm = sabores_itens[y].sabor_precostamanhos[sh].sabor_precotamanhos_nometamanho;
                                    
                                    htmlitemsimples += "<div class='item_simp_comb "+zritem+" "+targetaba+"' data-target-combo='"+targetaba+"'>"
                                        +   "<img src='"+caminhofoto+"' alt='"+nomeiitem+ "(" + nometm + ")' width='110'/>"
                                        +   "<p>"+nomeiitem + "(" + nometm + ")</p>"
                                        +   "<div class='qtd_modalcont_item "+targetaba+"' data-target-combo='"+targetaba+"'>"
                                        +        "<a href='#' title='Remover' class='addmenositem "+targetaba+"'  data-target-combo='"+targetaba+"' data-codtam='"+idtamth+"' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"'  >-</a>"
                                        +        "<input type='text' class='valqtditem' value='"+qtditematl+"' readonly='true'></input>"
                                        +        "<a href='#' class='addmaisitem "+targetaba+"' title='Adicionar'  data-target-combo='"+targetaba+"' data-codtam='"+idtamth+"' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"' >+</a>"
                                        +        "<div class='clear'></div>"
                                        +   "</div>"
                                        +"</div>";
                                }
                            }
                        }                        
                    }else{ 
                        
                        for(var hs=0; hs<cntitem; hs++){
                            if(itensescolhidos[hs].item == cdsabor){
                                zritem = "";
                                qtditematl = itensescolhidos[hs].qtd;
                            }
                        }
                        
                        htmlitemsimples += "<div class='item_simp_comb "+zritem+" "+targetaba+"' data-target-combo='"+targetaba+"'>"
                                +   "<img src='"+caminhofoto+"' alt='"+nomeiitem+ "' width='110'/>"
                                +   "<p>"+nomeiitem + "</p>"
                                +   "<div class='qtd_modalcont_item "+targetaba+"' data-target-combo='"+targetaba+"'>"
                                +        "<a href='#' title='Remover' class='addmenositem "+targetaba+"' data-target-combo='"+targetaba+"' data-codtam='false' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"'  >-</a>"
                                +        "<input type='text' class='valqtditem' value='"+qtditematl+"' readonly='true'></input>"
                                +        "<a href='#' title='Adicionar' class='addmaisitem "+targetaba+"' data-target-combo='"+targetaba+"' data-codtam='false' data-codsabor='"+cdsabor+"' data-codtipo='"+cdtipo+"' >+</a>"
                                +        "<div class='clear'></div>"
                                +   "</div>"
                                +"</div>";
                    }

                }                    
            }
        }            
    }
    return htmlitemsimples;
}

function buscaConfComboMontador(dados,tipo){
    $(".btnfinaliza_combo").removeClass("ativo");
    $.ajax({
        method:"POST",
        url: "/exec/montadoritem/abrir"+tipo+"/",
        data:dados,
        dataType: "json"
    }).done(function( msg ) {
        if(msg.res === true){
            //rendAbrirItem(msg.dados);
            reendInfoCombo(msg.dados, msg.dados.hash);
            //reendInfoCombo(msg.dados.info, msg.dados.hash);
            //reendAbasCombo(msg.dados.itens, msg.dados.hash);
        }else if(msg.res === false){
            //document.location.reload();
            $("#montDorCombo").modal("hide");
            openAlert("Este combo não é válido para hoje!", "Atenção!!");
            fechaModalUniv(2);
        }else{
            
        }
    });
}

function rendTamanhosSelect(tamanhospossiveis,codtamanho){
    $(".selecttamitem").data("tamanhospossiveis",tamanhospossiveis);
    var htmopttamanhos = "";
    
    var cnttampss = tamanhospossiveis.length;
    var cnttam = tamahos_itens.length;
    
    for(var i=0;i<cnttampss;i++){
        var tampss = tamanhospossiveis[i].tamanho_id;
        
        for(var y=0;y<cnttam;y++){
            var taman = tamahos_itens[y].tamanho_id;
            
            if( taman == tampss ){
                
                var nome = tamahos_itens[y].tamanho_nome;
                var img = tamahos_itens[y].tamanho_imagem;
                var padrao = tamahos_itens[y].tamanho_padrao;
                var calzone = tamahos_itens[y].tamanho_calzone;
                var qtdsabor = tamahos_itens[y].qtddsabor;
                var listaqtdsabor = tamahos_itens[y].lista_qtdsabor;
                htmopttamanhos += "<option value='"+taman+"'>"+nome+"</option>";
                ////console.log(htmopttamanhos);
            }
        }                
    }
    $(".selecttamitem").html(htmopttamanhos);
    if(codtamanho != undefined){        
        $(".selecttamitem").val(codtamanho);
        $(".selecttamitem").change();
    }
}

function rendQuantidadeSabores(codtamanho, tamanhos, codtarget){
    var dadositem = $("#"+codtarget).data("dadositem");
    var qtdstam = dadositem.item_qtdsabor;
    var htmlqtdsabor = "";
    
    var cnttam = tamahos_itens.length;
    for(var y=0;y<cnttam;y++){
        var taman = tamahos_itens[y].tamanho_id;
        if( taman == codtamanho ){
            var listaqtdsabor = tamahos_itens[y].lista_qtdsabor;
            
            if(tamanhos[0].QTDMAX == undefined){
                ////console.log("qqq");
                var contqtd = listaqtdsabor.length;
                for(var i=0;i<contqtd;i++){
                    var nome = listaqtdsabor[i].description;
                    var txtnome = listaqtdsabor[i].text;
                    var qtd = listaqtdsabor[i].value;
                    var selected = "";
                    if(qtd == qtdstam){
                        selected = " selected='selected' ";
                    }
                    htmlqtdsabor += "<option "+selected+" value='"+qtd+"'>"+txtnome+"</option>";
                }
                if(contqtd == 1){
                    $(".selectqtditem."+codtarget).hide();
                }else{
                    $(".selectqtditem."+codtarget).show();
                }
            }else {
                for(var bhs=0;bhs<tamanhos.length;bhs++){
                    if(codtamanho == tamanhos[bhs].ID){
                        var qtddms = tamanhos[bhs].QTDMAX;
                        
                        for(var qt=1;qt<=qtddms;qt++){
                            var selected = "";
                            if(qt == qtdstam){
                                selected = " selected='selected' ";
                            }
                            htmlqtdsabor += "<option "+selected+" value='"+qt+"'>"+qt + " Sabor(es)" +"</option>";
                        }
                        if(qtddms == 1){
                            $(".selectqtditem."+codtarget).hide();
                        }else{
                            $(".selectqtditem."+codtarget).show();
                        }
                    }
                }
                
            }
        }
    }  
    $(".selectqtditem."+codtarget).html(htmlqtdsabor);
    
}



function rendTamanhosSelect_(tamanhospossiveis,codtamanho,targetaba){
    //$(".selecttamitem."+targetaba).data("tamanhospossiveis",tamanhospossiveis);
    var htmopttamanhos = "";
    console.log(tamanhospossiveis);
    
    var cnttampss = tamanhospossiveis.length;
    var cnttam = tamahos_itens.length;
    
    for(var i=0;i<cnttampss;i++){
        var tampss = tamanhospossiveis[i].ID;
        
        for(var y=0;y<cnttam;y++){
            var taman = tamahos_itens[y].tamanho_id;
            
            if( taman == tampss ){
                ////console.log(taman);
                var nome = tamahos_itens[y].tamanho_nome;
                var img = tamahos_itens[y].tamanho_imagem;
                var padrao = tamahos_itens[y].tamanho_padrao;
                var calzone = tamahos_itens[y].tamanho_calzone;
                var qtdsabor = tamahos_itens[y].qtddsabor;
                var listaqtdsabor = tamahos_itens[y].lista_qtdsabor;
                htmopttamanhos += "<option value='"+taman+"'>"+nome+"</option>";
                ////console.log(htmopttamanhos);
            }
        }
    }
    $(".selecttamitem."+targetaba).html(htmopttamanhos);
    $(".selecttamitem."+targetaba).data("tamanhos",tamanhospossiveis);
    if(codtamanho != undefined){        
        $(".selecttamitem."+targetaba).val(codtamanho);
        rendQuantidadeSabores(codtamanho,tamanhospossiveis,targetaba);
    }
    //$(".selecttamitem."+targetaba).trigger("change");
}


function get_precoIngrediente(ingredient,codtamanho, config, qtdsabor){
    var preco = false;
    if(config == false || config.opcionais.INGREDIENTE.COBRAR !== "NP"){
        var conttaming = ingredient.ingredientes_precotamanho.length;
        var sessaoing = ingredient.ingrediente_sessaoid;
        var dadossss = get_dadosSessao(sessaoing);
        var divisaoing = dadossss.sessao_divisaoingrediente;
        for(var i=0;i<conttaming;i++){
            var idtam = ingredient.ingredientes_precotamanho[i].ingrediente_precotamannho_tamanhoid;
            if(idtam == codtamanho){
                preco = 0;
                if(config == false || config.opcionais.INGREDIENTE.COBRAR === "S"){
                    
                    var precotam = ingredient.ingredientes_precotamanho[i].ingrediente_precotamannho_preco;
                    precotam = parseFloat(precotam);
                    if(qtdsabor != undefined && qtdsabor > 1 && divisaoing !== "INTEIRO"){
                        if(precotam>0){
                            precotam = (precotam/qtdsabor);
                        }
                    }
                    preco = precotam;
                    //console.log(preco);
                }
            }
        }
    }
    return preco;
    //if(config.opcionais.INGREDIENTE.COBRAR === "S"){}
}

function rendIngredientesSabor_1(targetaba,codsabor){
    var dadositem = $("#"+targetaba).data("dadositem");
    var config = $("#"+targetaba).data("combo-confitem");
    var qtdsabor = dadositem.item_qtdsabor;
    var codtamanho = dadositem.item_tamanhoid;
    var ingredientes = [];
    var cntsabores = sabores_itens.length;
    for(var isb=0;isb<cntsabores;isb++){        
        if( sabores_itens[isb].sabor_id == codsabor ){
             ingredientes = sabores_itens[isb].sabor_ingredientes
        }        
    }
    
    var ingrem = [];
    var ingadd = [];
    var sabores = dadositem.sabores;
    if(sabores !== undefined && sabores.length>0){
        for(var ih=0;ih<sabores.length;ih++){
            if(sabores[ih].item_saboringredcom !== false){
                for(var ik=0;ik<sabores[ih].item_saboringredcom.length;ik++){
                    ingadd[ik] = sabores[ih].item_saboringredcom[ik].ingrediente_cod;
                }
            }
            
            if(sabores[ih].item_saboringredrem !== false){
                for(var ik=0;ik<sabores[ih].item_saboringredrem.length;ik++){
                    ingrem[ik] = sabores[ih].item_saboringredrem[ik].ingrediente_cod;
                }
            }
        }
    }
    
    
    var cnting = ingredientes.length;
    var htmingreds = "<p style='color:#000;margin: 0; padding: 3px 0;'>Ingredientes:</p>";
    for(var i=0; i<cnting; i++){
        var coding      = ingredientes[i].sabor_ingrediente_codingrediente;
        var nomeingredi = ingredientes[i].sabor_ingrediente_nomeingrediente;
        var emfaltaing  = ""; //ingredientes[i].ingrediente_emfalta;
        var valrand_ = gerarValor(8,true,true);
        
        var cheking = "checked";
        var chetached = "";
        if(in_array(coding, ingrem)){
           cheking ="";
           chetached = " style='text-decoration: line-through;' ";
        }
        ////console.log(chetached);
        htmingreds += "<div class='lst_ings' "+chetached+"> <input class='magic-checkbox' type='checkbox' name='layout' data-target-combo='"+targetaba+"' data-sabor='"+codsabor+"' data-pedaco='1' id='ing_"+valrand_+"' value='"+coding+"' "+cheking+"> <label for='ing_"+valrand_+"'></label><label class='text nome_ings' for='ing_"+valrand_+"'>"+nomeingredi+"</label></div>";            
        
    }
    
    if(ingadd.length > 0){
        for(var td=0;td<ingadd.length;td++){
            var cntings = ingredientes_itens.length;
            for(var tr=0;tr<cntings;tr++){                
                if(ingadd[td] == ingredientes_itens[tr].ingrediente_id){
                    var iding = ingredientes_itens[tr].ingrediente_id;
                    var nomeingredi = ingredientes_itens[tr].ingrediente_nome;
                    var valrand_ = gerarValor(8,true,true);
                    var precoing = get_precoIngrediente(ingredientes_itens[tr],codtamanho, config, qtdsabor);
                    if(precoing !== false){
                        precoing = (precoing > 0)? " R$ "+parseReal(precoing) : "";
                        htmingreds += "<div class='lst_ings_opc' > <input class='magic-checkbox' type='checkbox' name='layout' data-target-combo='"+targetaba+"' data-sabor='"+codsabor+"' data-pedaco='1' id='ing_"+valrand_+"' value='"+iding+"' checked> <label for='ing_"+valrand_+"'></label><label class='text nome_ings' style='color: red;' for='ing_"+valrand_+"'> + "+nomeingredi+precoing+" </label></div>";            
                    }
                    
                    
                }
            }
        }
        
    }
    
    
    $(".ing_modalmont."+targetaba).html(htmingreds);
    $(".ing_modalmont."+targetaba).append("<div class='clear'></div>");
}

function rendIngredientes1Sabor(ingredientes,codsabor){
    var cnting = ingredientes.length;
    var htmingreds = "<p>Ingredientes:</p>";
    for(var i=0; i<cnting; i++){
            var coding      = ingredientes[i].sabor_ingrediente_codingrediente;
            var nomeingredi = ingredientes[i].sabor_ingrediente_nomeingrediente;
            var emfaltaing  = ""; //ingredientes[i].ingrediente_emfalta;
            var valrand_ = gerarValor(8,true,true);
            htmingreds += "<div class='lst_ings'> <input class='magic-checkbox' type='checkbox' name='layout' data-sabor='"+codsabor+"' data-pedaco='1' id='ing_"+valrand_+"' value='"+coding+"' checked> <label for='ing_"+valrand_+"'></label><label class='text nome_ings' for='ing_"+valrand_+"'>"+nomeingredi+"</label></div>";            
        
    }
    $(".ing_modalmont").html(htmingreds);
    $(".ing_modalmont").append("<div class='clear'></div>");
}

function abrirItem(dados,targetaba){
    
    var htmcont = "";
    
    htmcont += "<div class='cont_modalmont' data-combo-confitem='false' data-dadosdoitematual data-dadositem id='"+targetaba+"'>";
          
    htmcont += "<div class='esmaecer_montador "+targetaba+"' style='display:none;'  data-target-combo='"+targetaba+"'></div>";

    htmcont += reendListaSabores();

    htmcont +="<div class='montador_doitem "+targetaba+"'  data-target-combo='"+targetaba+"'>";

    htmcont +="</div>";
    
    htmcont +="</div>";
    
    $("#cont_modalmont").html(htmcont);
    
    peencheDadosRetorno(dados, targetaba);
    
    var dadosdoitematual = $("#"+targetaba).data("dadosdoitematual");
    var dadositem = $("#"+targetaba).data("dadositem");
    var confitem = $("#"+targetaba).data("combo-confitem");
    //console.log(confitem);
    var tamanhosposiveis = confitem.tamanhos;
    //var hash = dados.hash;
    
    var opcionaisitem = confitem.opcionais;
    
    var hash = dadosdoitematual.data_hash;
    
    var contsabores = parseInt(dadositem.item_qtdsabor);
    var conttamanhositem = tamanhosposiveis.length;
    var dadossessao = get_dadosSessao(dadositem.item_sessaoid);
    var codtamanho = dadositem.item_tamanhoid; 
    
    // &&  !== false
    
        
    var per_bordas = getNomeBorda(codtamanho);
    var per_ingred = true;
    var per_obs = getNomeObservacoes(codtamanho);
    var per_massa = getNomeMassa(codtamanho);
    
    
    
    if(contsabores === 1){

        $(".itensdelistasabores."+targetaba).removeClass("addsabor");

        var htmlmt_1s = htmlMontadorItem_1s(targetaba);
        $(".montador_doitem."+targetaba).html(htmlmt_1s);

        var codsabor = dadositem.sabores[0].item_saborid;        
        var nomesabor = dadositem.sabores[0].item_sabornome;        

        //var precosabor = get_precosTamanho(dados.tamanhosprecos,codtamanho);
        var ftid = dadositem.sabores[0].item_saborfotoid;
        var ftnome = dadositem.sabores[0].item_saborfotonome;

        // reenderiza lista de tamanhos
        rendTamanhosSelect_(confitem.tamanhos,codtamanho,targetaba);
        // reenderiza lista de ingredientes
        rendIngredientesSabor_1(targetaba,codsabor);    
        $(".nometetleitem."+targetaba).text(nomesabor);
        //$(".precotitleitem "+targetaba).text("R$ " + parseReal(precosabor));
        $(".img_modalmont."+targetaba).attr("src",""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome);        
        if(conttamanhositem > 1){
            $(".selecttamitem."+targetaba).show();            
        }else{
            $(".selecttamitem."+targetaba).hide();
        }

        /*var htmbtn_opc = "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes Opcionais</a>"
                +"<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-target-combo='"+targetaba+"'>Observações</a>";
        */

       var htmbtn_opc = "";
        if(per_ingred === true){
            htmbtn_opc += "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes</a>";
        }
        if(per_bordas !== false &&  get_bordadasessao(dadossessao.sessao_id,codtamanho) !== false ){                
            htmbtn_opc += "<a title='"+per_bordas+"' class='btnbrd_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_bordas+"</a>";
        }
        if(per_massa !== false  &&  get_massasdasessao(dadossessao.sessao_id,codtamanho) !== false ){
            htmbtn_opc += "<a title='"+per_massa+"' class='btnmss_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_massa+"</a>";
        }
        if(per_obs !== false  &&  get_observacoesdasessao(dadossessao.sessao_id,codtamanho) !== false ){
            htmbtn_opc += "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Observações</a>";
        } 

        /*if( $(".btnopc_montmodal."+targetaba).length>0){
            $(".btnopc_montmodal."+targetaba).remove();
            $(".btnobs_montmodal."+targetaba).remove();
        }*/
        $(".ing_modalmont."+targetaba).after(htmbtn_opc);

    }
    
    
    $(".nano").nanoScroller();
    
}

//tamanho_qtdsabormaxima
function get_qtdmax_sabortTamanho(codtamanho){
    var cnttamanho = tamahos_itens.length;
    for(var c=0; c<cnttamanho;c++){
        if(tamahos_itens[c].tamanho_id == codtamanho){
            return tamahos_itens[c].tamanho_qtdsabormaxima;
        }
    }
    return 1;
}



function get_sessaoSabor(codsabor){
    var cntsabores = sabores_itens.length;
    for(var f=0;f<cntsabores;f++){
        if(codsabor == sabores_itens[f].sabor_id){
            return sabores_itens[f].sabor_sessaoid;
        }
    }
    return false;    
}

function get_tamanhos_dosabor(codsabor){
    var arrt = [];
    var cnt = 0;
    var cntsabores = sabores_itens.length;
    for(var f=0;f<cntsabores;f++){
        if(codsabor == sabores_itens[f].sabor_id){
            var tamanhos = sabores_itens[f].sabor_precostamanhos;
            for(var g=0; g<tamanhos.length; g++){
                var idtamanho = sabores_itens[f].sabor_precostamanhos[g].sabor_precotamanhos_codtamanho;
                var qtdmax = get_qtdmax_sabortTamanho(idtamanho);
                arrt[cnt] = {ID : idtamanho, QTDMAX : qtdmax};
                cnt++;
            }
        }
    }
    console.log(arrt);
    return arrt;   
}

function openModalItem_editar(targetaba){
    var htmcont = "";
    
    htmcont += "<div class='cont_modalmont' data-combo-confitem='false' data-dadosdoitematual data-dadositem id='"+targetaba+"'>";
          
    htmcont += "<div class='esmaecer_montador "+targetaba+"' style='display:none;'  data-target-combo='"+targetaba+"'></div>";

    htmcont += reendListaSabores([],targetaba,[]);

    htmcont +="<div class='montador_doitem "+targetaba+"'  data-target-combo='"+targetaba+"'>";

    htmcont +="</div>";
    
    htmcont +="</div>";
    
    $("#cont_modalmont").html(htmcont);
    
    $(".listadesaboresescolher."+targetaba).css("left","-310px");
    $(".nano").nanoScroller();
}

function rendAbrirItem(dado,targetaba){
    var msg = dado;
    var dados = dado.dados;
    var htmcont = "";
    
    htmcont += "<div class='cont_modalmont' data-combo-confitem='false' data-dadosdoitematual data-dadositem id='"+targetaba+"'>";
          
    htmcont += "<div class='esmaecer_montador "+targetaba+"' style='display:none;'  data-target-combo='"+targetaba+"'></div>";

    htmcont += reendListaSabores([],targetaba,[]);

    htmcont +="<div class='montador_doitem "+targetaba+"'  data-target-combo='"+targetaba+"'>";

    htmcont +="</div>";
    
    htmcont +="</div>";
    
    $("#cont_modalmont").html(htmcont);
    
    $(".listadesaboresescolher."+targetaba).css("left","-310px");
    
    peencheDadosRetorno(msg, targetaba);
    
    var sabores = dados.dadossabores;
    var tamanhosposiveis = dados.tamanhosprecos;
    var hash = dados.hash;
    
    var dadosdoitematual = { 
            data_hash : null,
            data_sabor : [],
            data_tamanho : null,
            data_qtdsabor : null
        };
    dadosdoitematual.data_hash = hash;
    
    var contsabores = sabores.length;
    var conttamanhositem = tamanhosposiveis.length;
    
    dadosdoitematual.data_qtdsabor = contsabores;
    
    
    if(contsabores === 1){
        var codsabor = sabores[0].sabor_id;        
        var nomesabor = sabores[0].sabor_nome;        
        var codtamanho = dados.tamanho;  
        var codmsspdr = dados.massa;
        var precosabor = get_precosTamanho(dados.tamanhosprecos,codtamanho);
        var ftid = sabores[0].sabor_fotoid;
        var ftnome = sabores[0].sabor_fotonome;
        var sessao = get_sessaoSabor(codsabor);
        var dadossessao = get_dadosSessao(sessao);
        var tamanhos  = get_tamanhos_dosabor(codsabor);
        var per_bordas = getNomeBorda(codtamanho);
        var per_ingred = true;
        var per_obs = getNomeObservacoes(codtamanho);
        var per_massa = getNomeMassa(codtamanho);
        
        dadosdoitematual.data_sabor = [codsabor];
        dadosdoitematual.data_tamanho = codtamanho;
         
        
        var htmlmt_1s = htmlMontadorItem_1s(targetaba);
        $(".montador_doitem."+targetaba).html(htmlmt_1s);
    
        $(".tit_modalmont").text(dadossessao.sessao_nome);$(".itensdelistasabores."+targetaba).removeClass("addsabor");
        $(".precotitleitem."+targetaba).text(" - R$ "+parseReal(precosabor));

        // reenderiza lista de tamanhos
        rendTamanhosSelect_(tamanhos,codtamanho,targetaba);
        // reenderiza lista de ingredientes
        rendIngredientesSabor_1(targetaba,codsabor);    
        $(".nometetleitem."+targetaba).text(nomesabor);
        //$(".precotitleitem "+targetaba).text("R$ " + parseReal(precosabor));
        $(".img_modalmont."+targetaba).attr("src",""+urlsfiles.imagens+"produtos/"+ftid+"/240/"+ftnome);        
        if(conttamanhositem > 1){
            $(".selecttamitem."+targetaba).show();            
        }else{
            $(".selecttamitem."+targetaba).hide();
        }

        /*var htmbtn_opc = "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes Opcionais</a>"
                +"<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-target-combo='"+targetaba+"'>Observações</a>";
        */

       var htmbtn_opc = "";
        if(per_ingred === true){
            htmbtn_opc += "<a title='Adicionar Opcionais' class='btnopc_montmodal "+targetaba+"' data-target-combo='"+targetaba+"' data-pdc='1' data-codsabor='"+codsabor+"'>+ Adicionar Ingredientes</a>";
        }
        if(per_bordas !== false &&  get_bordadasessao(dadossessao.sessao_id,codtamanho) !== false ){                
            htmbtn_opc += "<a title='"+per_bordas+"' class='btnbrd_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_bordas+"</a>";
        }
        if(per_massa !== false  &&  get_massasdasessao(dadossessao.sessao_id,codtamanho) !== false ){
            htmbtn_opc += "<a title='"+per_massa+"' class='btnmss_montmodal "+targetaba+"' data-codmsspdr='"+codmsspdr+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Selecionar "+per_massa+"</a>";
        }
        if(per_obs !== false  &&  get_observacoesdasessao(dadossessao.sessao_id,codtamanho) !== false ){
            htmbtn_opc += "<a title='Observações' class='btnobs_montmodal "+targetaba+"' data-codtam='"+codtamanho+"' data-target-combo='"+targetaba+"'>Observações</a>";
        } 

        /*if( $(".btnopc_montmodal."+targetaba).length>0){
            $(".btnopc_montmodal."+targetaba).remove();
            $(".btnobs_montmodal."+targetaba).remove();
        }*/
        $(".ing_modalmont."+targetaba).after(htmbtn_opc);
        //$(".img_modalmont."+targetaba).removeClass("openlistasabores");
    }    
    $("#"+targetaba).data("dadosdoitematual",dadosdoitematual);
        
    var htmlqtd = "<p>Quantidade:</p>"
        + "<div class='qtd_modalcont'>"
        +    "<a href='#' title='Remover' class='menosum_item "+targetaba+"'  data-target-combo='"+targetaba+"' >-</a>"
        +     "<input type='text' value='01' readonly='true'></input>"
        +     "<a href='#' title='Adicionar' class='maisum_item "+targetaba+"'  data-target-combo='"+targetaba+"' >+</a>"
        +     "<div class='clear'></div>"
        + "</div>";
    $(".img_modalmont."+targetaba).after(htmlqtd);

    var html_btncomprar = " <div class='clear'></div><a title='Adicionar ao carrinho' id='btncomprar_montmodal' class='comprar_item "+targetaba+"'  data-target-combo='"+targetaba+"' ><span class='icon-comprarmodal'></span>Comprar!</a> ";
    $(".coluna_direita."+targetaba).append(html_btncomprar);
        
    $(".nano").nanoScroller();
    ////console.log(dadosdoitematual);    
}

    function get_precosTamanho(lista,tamanho){
        var precoret = lista[0].tamanho_preco;
        var cntlista = lista.length;
        for(var i=0; i<cntlista; i++){            
            if(tamanho == lista[i].tamanho_id){
                precoret = lista[i].tamanho_preco;
            }
        }
        console.log(precoret);
        return precoret;
    }
    
    /*
     * var dados = {
            tamanho     : 2,
            qtdsabor    : 3,
            targetcombo : "sdghsdtnh",
            sabor       : [
                {
                    pedaco  : 1,
                    codsabor: 54,
                    nome    : "sanfv",
                    urlfoto : "http://"
                }
            ]
        };
     */
    function rendPizzaMontagem(dados){
        
        var nomemontador = dados.montador;
        
        var tgtcb = dados.targetcombo;
        var contSab = dados.sabor.length;
        var sabor = dados.sabor;
        
        var imgforma = "forma";
        var cssquadrada = "";
        var cssformadapizza = "";
        var csstresmeio = "";
        var csstaboameio = "";
        if(nomemontador == "montarpizzaquadrada"){
            imgforma = "formaquadrada";
            cssquadrada = 'style="background-repeat: no-repeat;background-position: 57px 62px;" ';
            cssformadapizza = ' style="-webkit-border-radius: initial !important; -moz-border-radius: initial !important; border-radius: initial !important;" ';
            csstresmeio = ' style=" right: 12%; width: 75%; height: 75%; top: -41.8%; border-top-left-radius:initial !important;" ';
            csstaboameio =  'style="background: url('+urlsfiles.media+vsao+'/img/formaquadrada_meio.png) no-repeat; background-position: 46px 47px;" ';
        }

        var htmpz = '<div class="areapizza '+tgtcb+'" '+cssformadapizza+'>';
        var htmpzX = "";
        if(dados.qtdsabor == 1){
            //htmpzX += '<span class="icones removesabor umsabor '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor=""  data-pedaco="1" style="display: none;" title="Remover sabor"></span>';
            htmpz += '<div class="pztop-abs pzinteira"  style="background-position: top left;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="1" data-pdc="1" data-qtdsabores="1"></span>'
                +    '</div>';
            $(".formapizza."+tgtcb).css({"background-image":"url("+urlsfiles.media+vsao+"/img/"+imgforma+"_1.png)"});
        }else if(dados.qtdsabor == 2){
            //htmpzX += '<span class="icones removesabor doissabores-esq '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="1" style="display: none;" title="Remover sabor"></span>'
            //        + '<span class="icones removesabor doissabores-dir '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="2" style="display: none;" title="Remover sabor"></span>';
            htmpz += '<div class="pztop-abs metade_esq"  style="background-position: top left;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="1" data-pdc="1" data-qtdsabores="2"></span>'
                +    '</div>';
            htmpz += '<div class="pztop-abs metade_dir"  style="background-position: top right;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="2" data-pdc="2" data-qtdsabores="2"></span>'
                +    '</div>';
            $(".formapizza."+tgtcb).css({"background-image":"url("+urlsfiles.media+vsao+"/img/"+imgforma+"_2.png)"});
        }else if(dados.qtdsabor == 3){
            //htmpzX += '<span class="icones removesabor tressabores-esq '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="1" style="display: none;" title="Remover sabor"></span>'
            //    + '<span class="icones removesabor tressabores-meio '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="2" style="display: none;" title="Remover sabor"></span>'
            //    + '<span class="icones removesabor tressabores-dir '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="3" style="display: none;" title="Remover sabor"></span>';
            htmpz += '<div class="pztop-abs tres_esq" > '
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-pedaco="1" data-pdc="1" data-tamanhopizza="'+dados.tamanho+'" data-qtdsabores="3"></span>'
                +    '</div>';
            htmpz += '<div class="pztop-abs tres_dir"  style="background-position: right bottom;" >'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-pedaco="3" data-pdc="3" data-tamanhopizza="'+dados.tamanho+'" data-qtdsabores="3"></span>'
                +    '</div>';
            htmpz += '<div class="pztop-abs tres_meio" '+csstresmeio+' >'
                +        '<div class="bgtaboa" '+csstaboameio+'></div>'
                +        '<span class="fotosabmeio '+tgtcb+'" data-target-combo="'+tgtcb+'" '+cssquadrada+' >'
                +            '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-pedaco="2" data-pdc="2" data-tamanhopizza="'+dados.tamanho+'" data-qtdsabores="3"></span>'
                +        '</span>'
                +    '</div>';
            $(".formapizza."+tgtcb).css({"background-image":"url("+urlsfiles.media+vsao+"/img/"+imgforma+"_3.png)"});
        }else if(dados.qtdsabor == 4){
            //htmpzX += '<span class="icones removesabor quatrosab-top-esq '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="1" style="display: none;" title="Remover sabor"></span>'
            //    + '<span class="icones removesabor quatrosab-top-dir '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="2" style="display: none;" title="Remover sabor"></span>'
            //    + '<span class="icones removesabor quatrosab-bott-esq '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="3" style="display: none;" title="Remover sabor"></span>'
            //    + '<span class="icones removesabor quatrosab-bott-dir '+tgtcb+'" data-target-combo="'+tgtcb+'" data-pedaco="4" style="display: none;" title="Remover sabor"></span>';
            htmpz += '<div class="pztop-abs quarto_esq_cima" style="background-position: top left;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="1" data-pdc="1" data-qtdsabores="4"></span>'
                +    '</div>'
                +    '<div class="pztop-abs quarto_dir_cima" style="background-position: top right;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="2" data-pdc="2" data-qtdsabores="4"></span>'
                +    '</div>'
                +	'<div class="quarto_esq_baixo" style="background-position: bottom left;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="3" data-pdc="3" data-qtdsabores="4"></span>'
                +    '</div>'
                +    '<div class="quarto_dir_baixo" style="background-position: bottom right;">'
                +        '<span class="linkpizza openlistasabores '+tgtcb+'" data-target-combo="'+tgtcb+'" data-idsabor="0" data-tamanhopizza="'+dados.tamanho+'" data-pedaco="4" data-pdc="4" data-qtdsabores="4"></span>'
                +    '</div>';
            $(".formapizza."+tgtcb).css({"background-image":"url("+urlsfiles.media+vsao+"/img/"+imgforma+"_4.png)"});
        }
        htmpz += "</div>";
        htmpz = htmpzX+htmpz;
        //////console.log(htmpz);
        $(".formapizza."+tgtcb).html(htmpz);

        for(var sb=0; sb<contSab; sb++){
            var ped = sabor[sb].pedaco;
            var idsabp = sabor[sb].codsabor;
            var nomesabor = sabor[sb].nome;
            var foto = sabor[sb].urlfoto;


            if($("."+tgtcb+".linkpizza[data-pedaco='"+ped+"']").length === 1){

                $("."+tgtcb+".icones.removesabor[data-pedaco='"+ped+"'] ").css("display","inline");
                $("."+tgtcb+".icones.removesabor[data-pedaco='"+ped+"'] ").data("idsabor",idsabp);


                var pedpz = $("."+tgtcb+".linkpizza[data-pedaco='"+ped+"']");

                pedpz.data("idsabor",idsabp);
                pedpz.attr("title",nomesabor);

                var bgped = pedpz.parent();
                //////console.log(bgped);

                if(foto !== null){
                    bgped.css({"background-image":"url("+foto+")"});
                }
            }
        }


}