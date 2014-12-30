(function($)
{
    $.fn.riiinglink = function(options)
    {

        //On définit nos paramètres par défaut
        var defauts=
        {
            "vitesseFadeOut": "slow",
            "vitesseFadeIn": "fast"
        };

        //On fusionne nos deux objets ! =D
        var parametres = $.extend(defauts, options);

        return this.each(function()
        {
            //On veut que l'élément change au passage de la souris, on utilise donc mouseover() !
            $(this).mouseover(function()
            {
                //On diminue donc l'opacité lentement
                $(this).fadeOut(parametres.vitesseFadeOut,function()
                {
                    //Une fois l'élément invisible, on le fait réapparaître rapidement !
                    $(this).fadeIn(parametres.vitesseFadeIn);
                });
            });
        });
    };

    $(".updateRiiinglink").on('click',function(e){
        e.preventDefault();
        $(this).hide();
        $("#riiinglinkList li").show();
        $(".finishRiiinglink").show();
        $("#riiinglinkList").addClass("isEditable");
    });

    $(".finishRiiinglink").on('click',function(e){
        e.preventDefault();
        $(this).hide();
        $(".updateRiiinglink").show();
        $("#riiinglinkList li").not(".used").hide();
        $("#riiinglinkList").removeClass("isEditable");
    });


    $('body').on('click', '#riiinglinkList li' ,function(){

        if( $("#riiinglinkList").hasClass("isEditable") )
        {
            console.log('clicked');

            if( $(this).hasClass('used') ){
                $(this).removeClass('used');
                $(this).show();
            }
            else{
                $(this).addClass('used');
                $(this).show();
            }
        }
    });


})(jQuery);