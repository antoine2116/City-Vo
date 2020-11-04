@extends('layouts.master')

@section('title', 'Connexion')

@section('content')
    <form action="check" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container green-background">
            <div class="row">
                @if (session()->get('msg'))
                    <div class="alert alert-danger alert-dismissible fade show" style="width: 100% !important" role="alert">
                        {{ session()->get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <div class="row">
                    <img class="welcome-logo" src="{{ asset('images/logo.svg') }}" />
                </div>
                <div class="form-group row justify-content-center" style="padding-top: 15%">
                    <input type="text" name="uemail" class="form-control login-input" placeholder="Email" required>
                </div>
                <div class="form-group row justify-content-center">
                    <input type="password" name="upass" class="form-control login-input" placeholder="Mot de passe"
                        required>
                </div>
                <div class="form-group row justify-content-center" style="padding-top: 10%">
                    <button type="submit" class="btn btn-success">Connexion</button>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar').addClass("hide");
            $('body').css("padding", 0);
        });
    </script>

@endsection
