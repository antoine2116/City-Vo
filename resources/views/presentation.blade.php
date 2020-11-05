@extends('layouts.master')

@section('title', 'Créer un compte')

@section('content')
    <div class="container green-background p-0">
        <div>
            <img class="presentation-logo" src="{{ asset('images/logo.svg') }}" />
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/pres-1.png') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/pres-2.png') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/pres-3.png') }}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            <a href="/home" class="btn btn-success el-init btn-block">Passer</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar').addClass("hide");
            $('body').css("padding", 0);
        });

    </script>
@endsection
