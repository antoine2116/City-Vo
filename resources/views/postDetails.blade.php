@extends('layouts.master')

@section('title', 'Publication')

@section('content')
    <div class="container">
        @if (session()->get('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="container-feed">
                <div class="container-header-feed">
                    <div class="float-left">
                        <p class="title-feed font-weight-bold">
                            {{ $post[0]->{'title'} }}
                        </p>
                    </div>
                    <div class="float-right">
                        <span class="votes-feed">
                            {{ $post[0]->{'votes'} }}
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
                        src="{{ asset('upload_file/' . $post[0]->{'image'}) }}" />
                </div>
                <p class="description-feed">
                    <span class="auteur-feed bolder">
                        {{ $post[0]->{'name'} }} &bull;
                    </span>
                    {{ $post[0]->{'body'} }}
                </p>
            </div>
        </div>
        <div class="comment-container" style="height: auto">
         
                <form action="addComment" method="post" enctype="multipart/form-data" class="input-group">
                    @csrf
                    <input type="text" name="comment" class="form-control" placeholder="Ecrire un commentaire..." />
                    <div class="input-group-append">
                        <button class="btn btn-success" id="btnComment" type="submit">
                            <i class="fas fa-paper-plane"></i>
                     </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="comments">
            @for ($i = 0; $i < sizeof($comments); $i++)
                <div class="row pb-2">
                    <div class="card shadow-sm comment-container">
                        <div class="col-12 pl-4">
                            <div class="row">
                                <p>
                                    <span class="comment-auteur">
                                        {{ $comments[$i]->{'name'} }}
                                    </span>
                                    &bull;
                                    <span class="comment-datespan">
                                        {{ $comments[$i]->{'created_at'} }}
                                    </span>
                                </p>
                            </div>
                            <div class="row">
                                <p>
                                    {{ $comments[$i]->{'content'} }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    @stop
