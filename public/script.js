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
        var ptsRequis = parseInt($(this).find(".reward-points").text());
        var ptsUser = parseInt($('#user-points').text());
        var ptsRestant = ptsUser - ptsRequis;

        if (ptsUser < ptsRequis) {
            alert("Vous n'avez pas assez de points");
        }
        else {
            // On ouvre la modale
            $('#modal-reward').modal();

            // On affiche le nombre de points requis et restant
            $('#modale-points-requis').text(ptsRequis);
            $('#modale-points-restant').text(ptsRestant);

            // On affiche le contenu initial
            $('.el-succes').addClass("hide");
            $('.el-init').removeClass("hide");
        }

        // Bouton valider (on change le contenue de la modale)
        $('#btnValiderReward').click(function () {
            $('.el-succes').removeClass("hide");
            $('.el-init').addClass("hide");

            // On met à jour les points restant
            $('#user-points').text(ptsRestant);
        });

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

    $('#ipt-image').change(function () {
        $('#img-icone').removeClass("fa-cloud-upload-alt");
        $('#img-icone').addClass("fa-check");
        $('#img-icone').css("color", "#24a348");
        $('#img-text').text("Image importée ! Cliquez pour en choisir une autre");
    });

    // // Preview de l'image
    // $('#ipt-image').change(function () {
    //     var input = this;
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $('.preview-img').attr('src', e.target.result);
    //             $('.figure-img').removeClass("hide");

    //         }
    //         reader.readAsDataURL(input.files[0]); // convert to base64 string
    //         $('.img-container').addClass("hide");
    //     }
    // });
}

///////////////////////////
////////// USER   /////////
///////////////////////////

function initialiseEditUser() {
    $('#btnEditUser').click(function () {
        $('.editable').attr("readonly", false);
        $('#btnValiderUser').removeClass("hide");
        $(this).addClass("hide");
    });
}

function initialiseSpanVotes() {
    $('.container-feed').each(function () {
        var elVotes = $(this).find(".votes-feed");
        updateColorsSpan(elVotes);
    });

    $('.fa-arrow-circle-up').click(function () {
        var container = $(this).closest(".container-feed");
        var elVotes = container.find(".votes-feed");
        var nbVotes = parseInt(elVotes.text().replace("+", ""));
        elVotes.text(nbVotes + 1);
        updateColorsSpan(elVotes);
    });

    $('.fa-arrow-circle-down').click(function () {
        var container = $(this).closest(".container-feed");
        var elVotes = container.find(".votes-feed");
        var nbVotes = parseInt(elVotes.text().replace("+", ""));
        elVotes.text(nbVotes - 1);
        updateColorsSpan(elVotes);
    });
}

function updateColorsSpan(elVotes) {
    var nbVotes = parseInt(elVotes.text().replace("+", ""));
    if (nbVotes > 0) {
        elVotes.css("color", "#188035");
        elVotes.text("+ " + nbVotes);
    }
    else if (nbVotes < 0) {
        elVotes.css("color", "#db2323");
        elVotes.text(nbVotes);
    }
    else if (nbVotes == 0) {
        elVotes.css("color", "#3d1505");
        elVotes.text(nbVotes);
    }
}

///////////////////////////////
////////// COMMENTS   /////////
///////////////////////////////

function initialiseSaisieComment() {
    $('#iptComment').on('keypress', function (e) {
        if (e.which == 13) {
            var divInfos = $(this).parent();
            publishComment(divInfos);
        }
    });

    $('#btnComment').click(function () {
        var divInfos = $(this).parent()
        publishComment(divInfos);
    });
}

function publishComment(divInfos) {
    // On récupère les infos
    var date = "A l'instant"
    var nom = divInfos.find("#iptAuteur").val();
    var comment = divInfos.find("#iptComment").val();

    // On ajout un élement
    $(".comments").prepend(
        `
        <div class="row pb-2">
                    <div class="card shadow-sm comment-container">
                        <div class="col-12 pl-4">
                            <div class="row">
                                <p>
                                    <span class="comment-auteur">
                                        `+ nom + `
                                    </span>
                                    &bull;
                                    <span class="comment-datespan">
                                        `+ date + `
                                    </span>
                                </p>
                            </div>
                            <div class="row">
                                <p>
                                `+ comment + `
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        `
    );
    saveComment(divInfos);

    // On clear l'input
    $('#iptComment').val("");
}

function saveComment(divInfos) {
    // Fonction ajax si on a le temps
}