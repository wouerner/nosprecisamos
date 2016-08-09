jQuery(document).ready(function(jQuery){

    jQuery('#aprovado').on('click', function(){
        jQuery.post(
            '/opiniao',
            {
                "_token": jQuery('input[name=_token]').val(),
                "projeto": jQuery('#projeto').val(),
                "aprovado": 1
            },
            function(data){
            },
            'json'
        );
    });

    jQuery('#reprovado').on('click', function(){
        jQuery.post(
            '/opiniao',
            {
                "_token": jQuery('input[name=_token]').val(),
                "projeto": jQuery('#projeto').val(),
                "aprovado": 0
            },
            function(data) {
            },
            'json'
        );
    });
});
