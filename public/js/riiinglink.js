(function($)
{
    $(".updateRiiinglink").on('click',function(e){
        e.preventDefault();
        $(this).hide();
        $(".riiinglinkList li").show();

        $(".finishRiiinglink").show();
        $(".riiinglinkList").addClass("isEditable");
        $(".partage-host").addClass("inEdit");

    });

    $(".finishRiiinglink").on('click',function(e){
        e.preventDefault();
        $(this).hide();
        $(".updateRiiinglink").show();
        $(".riiinglinkList li").not(".used").hide();
        $(".riiinglinkList").removeClass("isEditable");
        $(".partage-host").removeClass("inEdit");

        var riiinglink = $('#formRiiinglink').serialize();

        $.ajax({
            url     : 'updateMetas',
            data    : { riiinglink: riiinglink },
            type    : "POST",
            success : function(data) {
                if(data == 'ok')
                {
                    //console.log(data);
                }
            }
        });

    });

})(jQuery);


/*
 * A jQuery plugin
 * Author: @DesignPond
 */

;(function($) {
    // Pour plus de commodités, on enregistre le nom du plugin dans une variable.
    var pluginName = 'riiinglink';

    /*
     * CONSTRUCTEUR
     */
    function Plugin(element, options)
    {
        // Toujours par souci de commodité, on enregistre une référence
        // à l'élément du DOM auquel est appliqué le plugin
        var el = element;
        // ainsi qu'à l'objet Jquery correspondant.
        var $el = $(element);

        // Fusion des options par défaut avec celles fournies par l'utilisateur.
        options = $.extend({}, $.fn[pluginName].defaults, options);

        /*
         * INITIALISATION.
         */
        function init()
        {

            var $inputs = $el.find(":checkbox");
            $inputs.hide();

            var parent = $el.attr('id');
                parent = '.' + parent + ' li';


            var $Rlink	= $(".Rlink");

            $Rlink.click(function()
            {
                if( $el.hasClass("isEditable") ) {
                    $theClickedButton = $(this);

                    //move up the DOM to the .zRadioWrapper and then select children. Remove .zSelected from all .zRadio
                    $theClickedButton.toggleClass("used");
                    $theClickedButton.show();

                    $theClickedButton.find(':checkbox').each(function () {
                        this.checked = !this.checked;
                        $(this).change()
                    });
                }
            });

            // Pour parachever l'initialisation, on appelle la fonction hook
            // qui va se charger de déclencher le callback éventuellement
            // posé par l'utilisateur sur l’évènement 'onInit'.
            hook('onInit');
        }

        function activate(item){

        }


        function deactivate(item){

        }

        /*
         * GETTER/SETTER pour les options du plugin.
         * Pour obtenir la valeur d'une option :  $('#el').demoplugin('option', 'key');
         * Pour fixer la valeur d'une option :  $('#el').demoplugin('option', 'key', value);
         */
        function option (key, val)
        {
            if (val)
            {
                options[key] = val;
            }
            else
            {
                return options[key];
            }
        }

        /*
         * CALLBACK HOOKS (voir http://fr.wikipedia.org/wiki/Hook_(informatique))
         * Usage : dans les options par défaut du plugin, on définit une fonction callback vide :
         * hookName: function() {}
         * Quand la logique du plugin l'impose, on déclenche le callback :
         * hook('hookName');
         */
        function hook(hookName)
        {
            if (options[hookName] !== undefined)
            {
                // Le cas échéant, appelle la fonction définie par l'utilisateur.
                // À noter que le scope correspond à l'élément sur lequel on opère
                options[hookName].call(el);
            }
        }

        // Initialise l'instance du plugin.
        init();

        // Expose les méthodes publiques du plugin.
        return
        {
            option: option
        };
    }
    /*
     * FIN DU CONSTRUCTEUR.
     */

    /*
     * DÉFINITION DU PLUGIN.
     */
    $.fn[pluginName] = function(options) {
        // Si le premier paramètre est une chaine de texte, c'est un appel à une fonction publique
        if (typeof arguments[0] === 'string')
        {
            var methodName = arguments[0];
            var args = Array.prototype.slice.call(arguments, 1);
            var returnVal;
            this.each(function()
            {
                // Si l'élément dispose d'une instance du plugin
                // et que la méthode appelée existe bel et bien.
                if ($.data(this, 'plugin_' + pluginName) && typeof $.data(this, 'plugin_' + pluginName)[methodName] === 'function')
                {
                    // On appelle la méthode correspondante en lui passant les arguments fournis.
                    returnVal = $.data(this, 'plugin_' + pluginName)[methodName].apply(this, args);
                }
                else
                {
                    // Sinon on notifie l'erreur
                    throw new Error('Method ' +  methodName + ' does not exist on jQuery.' + pluginName);
                }
            });
            if (returnVal !== undefined)
            {
                // Si la méthode renvoie une valeur, on retourne cette valeur.
                return returnVal;
            }
            else
            {
                // Sinon, on retourne 'this' pour assurer la "chainabilité" chère à jQuery.
                return this;
            }
        }
        // Si le premier paramètre est un objet (correspondant aux options) ou n'existe pas,
        else if (typeof options === "object" || !options)
        {
            return this.each(function()
            {
                // Si l'élément ne dispose pas déjà d'une instance du plugin
                if (!$.data(this, 'plugin_' + pluginName))
                {
                    // On passe les options au constructeur du plugin
                    // tout en enregistrant l'instance du plugin dans l'objet data de jQuery.
                    $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
                }
            });
        }
    };

    /* OPTIONS PAR DÉFAUT DU PLUGIN.
     *  Ces options peuvent être écrasées au profit de celles
     *  définies par l'utilisateur lors de l'initialisation du plugin
     *  mais aussi à tout moment par ailleurs via :
     *  $('#riiinglinkList').riiinglink('option', 'key', value);
     */
    $.fn[pluginName].defaults =
    {
        onInit: function() {},
        onDestroy: function() {}
    };

    $('.riiinglinkList').riiinglink();


    $.fn.zInput = function(){

        var $inputs = this.find(":checkbox");

        $inputs.hide();
        var inputNames = [];

        $inputs.map(function(){
            inputNames.push($(this).attr('name'));
        });

        inputNames = $.unique(inputNames);

        $.each(inputNames, function(index,value){
            var $element = $("input[name='" + value + "']");
            $element.wrapAll('<li class="riinglinks-list" />');
            $element.wrap(function(){
                return '<div class="zInput zCheckbox"><span style="display:table;width: 100%;height: 100%;"><span style="display: table-cell;vertical-align:middle;">' + $(this).attr("title") + '</span></span></div>'
            });
        });


        var $zCheckbox	= $(".zCheckbox");

        $zCheckbox.click(function()
        {
            $theClickedButton = $(this);

            //move up the DOM to the .zRadioWrapper and then select children. Remove .zSelected from all .zRadio
            $theClickedButton.toggleClass("zSelected");
            console.log($theClickedButton.find('input').val());
            $theClickedButton.find(':checkbox').each(function () { this.checked = !this.checked; $(this).change()});
        });

    }

    $("#affected").zInput();

})(jQuery);

