(function ($) {
    if (!Modernizr.lastchild)
        $('.sample-menus li:last-child').css({ 'padding-right': 0 });

    if (!Modernizr.input.placeholder)
        $("input,textarea").each(function(){
            if($(this).val()=='' && $(this).attr("placeholder")!=''){
                $(this).val($(this).attr("placeholder"));
                $(this).focus(function(){
                    if($(this).val()==$(this).attr("placeholder")) $(this).val('');
                });
                $(this).blur(function(){
                    if($(this).val()=='') $(this).val($(this).attr("placeholder"));
                });
            }
        });
    
})(jQuery)