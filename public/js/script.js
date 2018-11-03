/**
 * Realiza pergunta para deletar
 * @param {string} name 
 * @param {string} url 
 */
function confirm_delete(name, url) {
    swal({
        title: 'Tem certeza que deseja excluir ' + name + '?',
        text: "Isso não pode ser desfeito",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Não deletar!'
    }).then((willDelete) => {
        if (willDelete.value) {
            window.location = url;
        } else {
            swal(name + " - Não foi deletado!");
        }
    });
}

/**
 * Formata moedas
 */
function formatarMoeda(id) {
    var elemento = document.getElementById(id);
    var valor = elemento.value;

    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g,''));
    if (isNaN(valor)) {
        elemento.value = '';
        return;
    }
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    elemento.value = valor;
}

/**
 * Formata para dinheiro
 */
function formataDinheiro(valor) {
    valor = parseFloat(valor).toFixed(2).toString().replace(/[.,]/g, function (x) {
        return x == ',' ? '.' : ',';
    });
    valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return valor;
}

$(() => {
    $(".acordeon_title").click(function() {
        var span = $(this).find('.glyphicon');
        span.toggleClass('glyphicon-chevron-down');
        span.toggleClass('glyphicon-chevron-up');
    });

    $(".coin").keyup(function() {
        formatarMoeda($(this).prop('id'));
    });
});

class PersonAutocomplete {
    constructor (value) {
        this.value = value;
        this.length = value.length;
    }

    timeout () {
        setTimeout(() => {
            if (this.length < 4) {
                $("#lista_nomes").html('');
                return null;
            }
            /** Confere se o número de caracteres continuou o mesmo. */
            if (input_length != this.length) {
                return false;
            }
            $("#loader-name").fadeIn();
            $.ajax({
                url: $("#route").val() + this.value,
                type: 'get',
                dataType: 'json'
            }).done(function (data) {
                $("#lista_nomes").html('');
                $("#loader-name").fadeOut();

                for (var i in data) {
                    autocomplete_response[data[i].id] = data[i];
                    $("#lista_nomes").append($(`<div class="autocomplete" id="${data[i].id}">${data[i].name} - <small>${data[i].phone}</small></div>`));
                }

                $(".autocomplete").click(function () {
                    var data = autocomplete_response[$(this).prop('id')];
                    var address_inputs = data.address;
                    $("#name").val(data.name);
                    $("#id").val(data.id);
                    $("#birthday").val(data.birthday);
                    $("#phone").val(data.phone);
                    $("#comments").text(data.comments ? data.comments : '');
                    $("#preferences").text(data.preferences ? data.preferences : '');
                    $("#address").val(address_inputs.address);
                    $("#neighborhood").val(address_inputs.neighborhood);
                    $("#city").val(address_inputs.city);
                    $("#shipcode").val(address_inputs.shipcode);
                    $("#reference").val(address_inputs.reference);
                    $("#lista_nomes").html('');
                });
            });
        }, 1000);
    }
}

class HtmlElement {
    /**
     * Constructor
     * @param {string|null} type 
     * @param {string|undefined} id 
     */
    constructor(type, id) {
        if (type == null) {
            this._element = document.getElementById(id);
            this.type =  this.element.tagName;
            return;
        }
        this.type = type;
        this._element = document.createElement(this.type);
    }

    /**
     * Set css classes to element
     * @param {array} classes 
     * @returns {HtmlElement}
     */
    setClasses(classes) {
        classes = classes.join(' ');
        this.setAttr('class', classes);
        return this;
    }

    /**
     * Set attribute to element
     * @param {string} name 
     * @param {string|undefined} value 
     */
    setAttr(name, value) {
        value = (typeof value !== 'undefined') ? value : '';
        this.element.setAttribute(name, value);
        return this;
    }

    /**
     * Put a child to element
     * @param {HtmlElement} child 
     */
    appendChild(child) {
        this.element.appendChild(child.element);
        return this;
    }

    /**
     * Put elements to element
     * @param {array} children 
     */
    appendChildren(children) {
        for(var i in children) {
            this.appendChild(children[i]);
        }
        return this;
    }

    /**
     * Set inner html to element
     * @param {string} stringHtml 
     */
    html(stringHtml) {
        this.element.innerHTML = stringHtml;
        return this;
    }

    /**
     * Get element
     */
    get element() {
        return this._element;
    }

    /**
     * Returns html of the element
     */
    toString() {
        return this.element.outerHTML;
    }
    
    /**
     * Get an existing element
     * @param {string} id
     * @returns {HtmlElement} 
     */
    static getById(id) {
        return new HtmlElement(null, id);
    }
}