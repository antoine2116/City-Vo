@extends('layouts.master')

@section('title', 'Create Account')

@section('content')
    <br>
    <h2 style="text-align: center;">C'est la page du protect</h2>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <br>
                <h1 style="text-align: center;">Bienvenue !</h1>

                <h3 style="text-align: center;">Username : {{ $username }} </h3>
                <h3 style="text-align: center;">Id : {{ $userid }} </h3>
                
                <br>
                <p><a href="{{ url('/logout') }}" class="btn btn-danger">Deconnexion</a></p>
            </div>
        </div>
    </div>

@stop
