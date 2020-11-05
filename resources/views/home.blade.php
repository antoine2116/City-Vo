@extends('layouts.master')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        <div class="row">
            <select class="form-control" id="selectCategorie">
                <option value="">Toutes les catégories</option>
                @for ($i = 0; $i < sizeof($categories); $i++)
                    <option name="category" value={{ $categories[$i]->{'id'} }}>
                        {{ $categories[$i]->{'name'} }}
                    </option>
                @endfor
            </select>
        </div>
        @for ($i = 0; $i < sizeof($posts); $i++)
            <div class="row shadow mb-3">
                <div class="container-feed">
                    <div class="container-header-feed">
                        <div class="float-left">
                            <input type="hidden" class="idCtg-feed" value="{{ $posts[$i]->{'category_id'} }}" />
                            <p class="title-feed font-weight-bold">
                                {{ $posts[$i]->{'title'} }} - {{ $posts[$i]->{'lieu'} }}
                            </p>
                        </div>
                        <div class="float-right">
                            <span class="votes-feed">
                                {{ $posts[$i]->{'votes'} }}
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
                        <img class="img-feed" src="{{ asset('upload_file/' . $posts[$i]->{'image'}) }}" />
                    </div>
                    <div class="categorie-feed">
                        <span class="label-categorie-feed" style="color: #1e2749">
                        </span>
                        <span class="float-right" style="font-size: 1.5em">

                            <form action="homeToComments" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $posts[$i]->{'id'} }}" />
                                <a href='#' onclick='this.parentNode.submit(); return false;'
                                    style="color: #106929 !important;">
                                    <i class="fas fa-comments pr-3"></i>
                                </a>
                                <a class="btnShare" style="color: #106929 !important;">
                                    <i class="fas fa-share"></i>
                                </a>
                            </form>
                        </span>
                    </div>
                    <p class="description-feed">
                        <span class="auteur-feed bolder">
                            {{ $posts[$i]->{'name'} }} &bull;
                        </span>
                        {!! $posts[$i]->{'body'} !!}
                    </p>
                </div>
            </div>
        @endfor
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            // Couleur des votes
            initialiseSpanVotes();
            initialiseLabelCategory();
            initialiseButtonShare();
            $('#selectCategorie').change(function() {
                // On met en session l'id
                var idCtg = $(this).val();
                sessionStorage.setItem("idCtg", idCtg);
                // On fait la requête
                var url = "{{ url('/home/') }}/" + idCtg;
                window.location.replace(url);
            });
            // On récupère l'id de la session pour initialiser le select
            var lastIdCtg = sessionStorage.getItem("idCtg");
            $('#selectCategorie').val(lastIdCtg);
        });

    </script>

@stop
