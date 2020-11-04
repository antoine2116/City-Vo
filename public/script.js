///////////////////////////////
/////////   HOME PAGE   ///////
///////////////////////////////
function initialiseNavbar() {
    if ($('.fixed-top').length > 0) { // check if element exists
        var last_scroll_top = 0;
        $(window).on('scroll', function () {
            scroll_top = $(this).scrollTop();
            if (scroll_top < last_scroll_top) {
                $('.fixed-top').removeClass('scrolled-down').addClass('scrolled-up');
            }
            else {
                $('.fixed-top').removeClass('scrolled-up').addClass('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
    }
}

///////////////////////////////
//////////  REWARD   //////////
///////////////////////////////

function initialiseModaleReward() {
    $('.reward-container').click(function () {
        $('#modal-reward').modal();

        $('#modal-reward').on('show.bs.modal', function () {
            // On affiche le contenue initial
            $('.el-succes').addClass("hide");
            $('.el-init').removeClass("hide");
            // Bouton valider (on change le contenue de la modale)
            $('#btnValiderReward').click(function () {
                $('.el-succes').removeClass("hide");
                $('.el-init').addClass("hide");
            });
        })
    });
}

///////////////////////////////////
//////////  CREATE POST   /////////
///////////////////////////////////
function initialiseImportImage() {
    // Clique sur le div
    $(".init-preview-img").click(function () {
        $('#ipt-image')[0].click();
    });

    // Preview de l'image
    $('#ipt-image').change(function () {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.preview-img').attr('src', e.target.result);
                $('.figure-img').removeClass("hide");

            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
            $('.img-container').addClass("hide");
        }
    });
}

///////////////////////////
////////// USER   /////////
///////////////////////////

function initialiseEditUser() {
    $('#btnEditUser').click(function() {
        $('.editable').attr("readonly", false);
        $('#btnValiderUser').removeClass("hide");
        $(this).addClass("hide");
    });
}