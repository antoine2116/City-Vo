@extends('layouts.master')

@section('title', 'Create Account')

@section('content')
    <br>
    <h2 style="text-align: center;">Créer votre compte</h2>
    <br>


    <div class="container">
        @if (session()->get('msg'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                {{ session()->get('msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


        @endif
        <div class="card">
            <div class="card-body">
                <form action="create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Pseudo</label>
                            <input type="text" name="uname" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Mail</label>
                            <input type="text" name="uemail" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Mot de passe</label>
                            <input type="password" name="upass" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>

@stop
