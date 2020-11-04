@extends('layouts.master')

@section('title', '')

@section('content')
    <div class="container green-background">
        <div class="row">
            <img class="welcome-logo" src="{{ asset('images/logo.svg') }}" />
        </div>
        <div class="row justify-content-center" style="padding-top: 10%">
            <h5 class="welcome-title">
                Enssemle, changeons notre ville !
            </h5>
        </div>
        <div class="row justify-content-center" style="padding-top: 35%">
            <a href="/create_account" class="btn btn-success btn-lg">Créer un compte</a>
        </div>
        <div class="row justify-content-center pt-2">
            <a href="/login" class="welcone-login">Déja un compte ? Connectez-vous !</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar').addClass("hide");
            $('body').css("padding", 0);
        });
    </script>
@stop
