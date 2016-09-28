$(function(){
    var countries = [
        { value: 'Andorra', data: 'AD' },
        { value: 'Afeganistão', data: 'AF' },
        { value: 'Africa do Sul', data: 'ZA' },
        { value: 'Alemanha', data: 'DE' },
        { value: 'Angola', data: 'AO' },
        { value: 'Antartica', data: 'AQ' },
        { value: 'Argentina', data: 'AR' },
        { value: 'Austrália', data: 'AU' },
        { value: 'Brasil', data: 'BR' },
        { value: 'Hong-Kong', data: 'HK' },
        { value: 'Irlanda', data: 'IE' },
        { value: 'Japão', data: 'JP' },
        { value: 'Zimbabwe', data: 'ZZ' }
    ];

    var countries_sigle = [
        { value: 'Andorra'},
        { value: 'Afeganistão'},
        { value: 'Africa do Sul'},
        { value: 'Alemanha'},
        { value: 'Angola'},
        { value: 'Antartica'},
        { value: 'Argentina'},
        { value: 'Austrália'},
        { value: 'Brasil'},
        { value: 'Hong-Kong'},
        { value: 'Irlanda'},
        { value: 'Japão'},
        { value: 'Zimbabwe' }
    ];

    $('#autocomplete').autocomplete({
        lookup: countries_sigle,
        onSelect: function (suggestion) {
            alert('Sua seleção: ' + suggestion.value + ', ' + suggestion.data);
        }
    });

});
