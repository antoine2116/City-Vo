@extends('layouts.master')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container-feed">
                <div class="float-left">
                    <p class="title-feed font-weight-bold">
                        Nid de poule - Bègles
                    </p>
                </div>
                <div class="float-right">
                    <span class="votes-feed">
                        +48
                    </span>
                    <a href="#" class="btn-up-feed btn-feed">
                        <i class="fas fa-chevron-up" style="color: #188035"></i>
                    </a>
                    <a href="#" class="btn-down-feed btn-feed">
                        <i class="fas fa-chevron-down" style="color: #db2323"></i>
                    </a>
                </div>

                <img class="img-feed"
                    src="https://upload.wikimedia.org/wikipedia/commons/9/94/Pothole.jpg" />
                <p class="description-feed">
                    <span class="auteur-feed bolder">
                        Jean Pierre Dupont &bull;
                    </span>
                    Cela fait plusieurs mois que je passe devant ce nid de poule. Faudrait-il le reboucher? Merci d'avance.
                </p>
            </div>
        </div>


        <div class="row">
            <div class="container-feed">
                <div class="float-left">
                    <p class="title-feed font-weight-bold">
                        Ajout de banc - Le Bouscat
                    </p>
                </div>
                <div class="float-right">
                    <span class="votes-feed">
                        +20
                    </span>
                    <a href="#" class="btn-up-feed btn-feed">
                        <i class="fas fa-chevron-up" style="color: #188035"></i>
                    </a>
                    <a href="#" class="btn-down-feed btn-feed">
                        <i class="fas fa-chevron-down" style="color: #db2323"></i>
                    </a>
                </div>

                <img class="img-feed" src="https://media-cdn.tripadvisor.com/media/photo-s/12/9c/17/71/allee-du-parc.jpg" />
                <p class="description-feed">
                    <span class="auteur-feed bolder">
                        Paul Garnier &bull;
                    </span>
                    Je pense que l'ajout de plusieurs bancs dans le parc serait une bonne idée. Merci ! 
                </p>
            </div>
        </div>
    </div>

@stop
