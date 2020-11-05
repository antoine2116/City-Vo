@extends('layouts.master')

@section('title', 'Mon profil')

@section('content')
    <div class="card">
        @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->get('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('danger') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->get('msg'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="updateProfil" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row pt-1 pl-1 pb-1">
                <div class="col-2 pr-3">
                    <img class="avatar-bigger" src="{{ asset('images/' . $profil[0]->{'avatar'}) }}" />
                </div>


                <div class="col-6 pt-1" style="margin-left: 50px">
                    <div class="row">
                        <input type="text" name="name" class="form-control editable" placeholder="Pseudo"
                            value="{{ $profil[0]->{'name'} }}" />
                    </div>

                    <div class="row">
                        <input type="text" name="email" class="form-control editable" placeholder="Email" value="{{ $profil[0]->{'email'} }}" />
                    </div>
                </div>

                <div class="col-2 pt-1">
                    <button type="submit" class="btn btn-info" id="btnValiderUser">
                        <i class="fas fa-save"></i>
                    </button>

                </div>
            </div>
        </form>
    </div>

    <div class="ml-1 mr-1">
        @for ($i = 0; $i < sizeof($myposts); $i++)
            <div class="card user-post mt-2 shadow">
                <div class="user-post-img-container">
                    <img class="user-post-img" src="{{ asset('upload_file/' . $myposts[$i]->{'image'}) }}" />
                </div>
                <div class="user-post-text">
                    {{ $myposts[$i]->{'body'} }}
                </div>
                <div class="user-post-text">
                    {{ $myposts[$i]->{'title'} }}
                </div>
                <div class="user-post-text">
                    {{ $myposts[$i]->{'created_at'} }}
                </div>
            </div>
        @endfor
    </div>



    <script type="text/javascript">
        initialiseEditUser();

    </script>
@endsection
