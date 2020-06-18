
    //<!--
    function close_menu_mobile() {
        $('.bg_menu_mobile').remove();
        $('.box_menuMobile').remove();
    }
    
    $(document).ready(function() {
    	$('#menu .header .toggle').click(function() {
           var xhtmlMenu = $('#menu .menu').html();
           $('body').append('<div class="box_menuMobile">'+ xhtmlMenu +'</div>');
           $('body').append('<div class="bg_menu_mobile" onclick="close_menu_mobile()"></div>');
       });
    });

    //-->
