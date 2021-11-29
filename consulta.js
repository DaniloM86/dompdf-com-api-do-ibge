// https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/distritos
let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/GO/distritos';

$.getJSON(url, function(data){
    // 
    let lista = '<ol>';
    $.each(data, function(v,val){
        lista += '<li>'+val.nome+'</li>';
        
    });
    lista += '</ol>';
    $('#municipiosGO').html(lista);
});