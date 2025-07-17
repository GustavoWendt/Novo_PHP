// EXECUTAR MASCARAS
function mascara(o,f){
    //Define o objeto e chama a função
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)
}

function executaMascara(){
    objeto.value=funcao(objeto.value)
}

//MASCARAS
//TELEFONE
function telefone(variavel){
    variavel=variavel.replace(/\D/g,"")
    variavel=variavel.replace(/^(\d\d)(\d)/g,"($1) $2")//ADICIONA PARENTESES EM VOLTA DOS DOIS PRIMEIROS DIGITOS
    variavel=variavel.replace(/(\d{4})(\d)/,"$1-$2")//ADICIONA HIFEM ENTRE O QUARTO E QUINTO DIGITO
    return variavel
}
//rg/cpf
function RGeCPF(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE CARACTERES NÃO NÚMERICOS
    variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")//ADICIONA PONTO ENTRE O TERCEIRO E O QUARTO DIGITO
    variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")//ADICIONA PONTO ENTRE O SEXTO E O SETIMO DIGITO
    variavel=variavel.replace(/(\d{3})(\d{1,2})$/,"$1-$2")//ADICIONA TRAÇO ANTES DOS ULTÍMOS DOIS DIGITOS
    return variavel
}

function cep(variavel){
    variavel=variavel.replace(/\D/g,"") //remove caracteres não numericos
    variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2") //adiciona ponto entre o segundo e terceiro digitos
    variavel=variavel.replace(/(\d{3})(\d)/,"$1-$2") //adiciona traço entre o sexto e setimo digitos
    return variavel
}

function data(variavel){
    variavel=variavel.replace(/\D/g,"") //remove caracteres não numericos
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2") //adiciona ponto entre o segundo e terceiro digitos
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2")
    return variavel
}

function nome(variavel){
    variavel=variavel.replace(/\D/,"")
}

function numero(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE CARACTERES NÃO NÚMERICOS
    return variavel
}

function nome(variavel){
    variavel=variavel.replace(/\d/g,"")//REMOVE CARACTERES NÚMERICOS
    return variavel
}

function cargo(variavel){
    variavel=variavel.replace(/\d/g,"")//REMOVE CARACTERES NÚMERICOS
    return variavel
}

function estado(variavel){
    variavel=variavel.replace(/\d/g,"")//REMOVE CARACTERES NÚMERICOS
    return variavel
}