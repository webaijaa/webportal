jQuery(document).ready(function(){

    jQuery('.ajaxform').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
                         $('#login-block').modal();       
                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });

        return false;
    });

});