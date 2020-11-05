@extends('layouts.master')

@section('title', 'Publication')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container-feed">
                <div class="container-header-feed">
                    <div class="float-left">
                        <p class="title-feed font-weight-bold">
                            Placeholder
                        </p>
                    </div>
                    <div class="float-right">
                        <span class="votes-feed">
                            150
                        </span>
                        <a href="#" class="btn-up-feed btn-feed">
                            <i class="fas fa-arrow-circle-up fa-lg votes-icone-feed" style="color: #188035"></i>
                        </a>
                        <a href="#" class="btn-down-feed btn-feed">
                            <i class="fas fa-arrow-circle-down fa-lg votes-icone-feed" style="color: #db2323"></i>
                        </a>
                    </div>
                </div>
                <div class="container-img-feed">
                    <img class="img-feed"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nids-de-poule_sur_une_route_communale.jpg/1024px-Nids-de-poule_sur_une_route_communale.jpg" />
                </div>
                <p class="description-feed">
                    <span class="auteur-feed bolder">
                        Nom &bull;
                    </span>
                    Body
                </p>
            </div>
        </div>
        <div class="comment-container" style="height: auto">
            <div class="row card mb-1 mt-1">
                <div class="input-group">
                    <input id="iptAuteur" type="hidden" value="Auteur Lambda" />
                    <!-- A remplir avec le nom de l'utilisateur -->
                    <input id="iptComment" type="text" class="form-control" placeholder="Ecrire un commentaire..." />
                    <div class="input-group-append">
                        <button class="btn btn-success" id="btnComment" type="button">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments">
            @for ($i = 0; $i < 5; $i++)
                <div class="row pb-2">
                    <div class="card shadow-sm comment-container">
                        <div class="col-12 pl-4">
                            <div class="row">
                                <p>
                                    <span class="comment-auteur">
                                        Auteur
                                    </span>
                                    &bull;
                                    <span class="comment-datespan">
                                        Il y a 3 jours
                                    </span>
                                </p>
                            </div>
                            <div class="row">
                                <p>
                                    Description Description Description
                                    Description Description Description
                                    Description Description Description
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
        

        <script type="text/javascript">
            $(document).ready(function() {
                initialiseSpanVotes();
                initialiseSaisieComment();
            });

        </script>

    @stop
