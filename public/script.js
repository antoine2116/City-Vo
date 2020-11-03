///////////////////////////////
////////////HOME PAGE//////////
///////////////////////////////

function initialiseNavbar() {
    $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

    if ($('.fixed-top').length > 0) { // check if element exists
        var last_scroll_top = 0;
        $(window).on('scroll', function() {
            scroll_top = $(this).scrollTop();
            if(scroll_top < last_scroll_top) {
                $('.fixed-top').removeClass('scrolled-down').addClass('scrolled-up');
            }
            else {
                $('.fixed-top').removeClass('scrolled-up').addClass('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
    }
}


function initialiseModaleReward() {
    $('.reward-container').click(function() {
        $('#modal-reward').modal();
        
        
        $('#modal-reward').on('show.bs.modal', function () {
            // On affiche le contenue initial
            $('.el-succes').addClass("hide");
            $('.el-init').removeClass("hide");
            // Bouton valider (on change le contenue de la modale)
            $('#btnValiderReward').click(function() {
                $('.el-succes').removeClass("hide");
                $('.el-init').addClass("hide");
            });
        })
    });

    
}