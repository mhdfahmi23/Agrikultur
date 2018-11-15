$(function(){
    $(document).on('keypress', 'form input', function(e){
        var form = $(this).closest('form'), me = this, input = form.find('input,textarea').not(':hidden,[disabled],[readonly],.skip-autofocus');
        if((e.which||e.keyCode) == 13) {
            e.preventDefault();
            var next = 0;
            input.each(function(i,o){
               if(this == me) {
                   next = i+1;
               }
               
               if(next >= input.length) {
                   next = 0;
               }
            });
            input.eq(next).focus();
        }
    });
});