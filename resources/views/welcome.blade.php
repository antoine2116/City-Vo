@extends('layouts.master')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        @for ($i = 0; $i < sizeof($posts); $i++)
            <div class="row">
                <div class="container-feed">
                    <div class="float-left">
                        <p class="title-feed font-weight-bold">
                            {{ $posts[$i]->{'title'} }} - {{ $posts[$i]->{'lieu'} }}
                        </p>
                    </div>
                    <div class="float-right">
                        <span class="votes-feed">
                            {{ $posts[$i]->{'votes'} }}
                        </span>
                        <a href="#" class="btn-up-feed btn-feed">
                            <i class="fas fa-chevron-up" style="color: #188035"></i>
                        </a>
                        <a href="#" class="btn-down-feed btn-feed">
                            <i class="fas fa-chevron-down" style="color: #db2323"></i>
                        </a>
                    </div>
                    <img class="img-feed" src="{{ asset('upload_file/' . $posts[$i]->{'image'}) }}" />
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
@stop
