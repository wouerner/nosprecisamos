jQuery(document).ready(function(jQuery){

    jQuery('#create').on('click', function(){
       // ajax post method to pass form data to the
        jQuery.post(
            jQuery('#projeto-create').prop('action'),
            {
                "_token": jQuery('#projeto-create').find('input[name=_token]').val(),
                "titulo": jQuery('#titulo').val(),
                "descricao": jQuery('#descricao').val(),
                "categorias_id": jQuery('#categorias_id').val()
            },
            function(data){
                //response after the process.
            },
            'json'
        );

        //return false;
    });
});
