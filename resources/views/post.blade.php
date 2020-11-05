@extends('layouts.master')

@section('title', 'Publication')

@section('content')
    <div class="container">
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

        <form action="createAPost" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="img-container">
                    <div class="init-preview-img">
                        <input id="ipt-image" name="image" class="hide" type="file" />
                        <i class="fas fa-cloud-upload-alt fa-5x" id="img-icone"></i>
                        <p id="img-text">
                            Cliquer pour importer une image
                        </p>
                    </div>
                </div>
                <figure class="figure-img hide">
                    <img class="preview-img" src="#" />
                </figure>

            </div>
            <div class="col-12">
                <div class="form-group row">
                    <div class="col-12">
                        <input type="text" name="titre" class="form-control" placeholder="Titre" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <select name="category" class="form-control" placeholder="Sélectionner une catégorie">
                            @for ($i = 0; $i < sizeof($categories); $i++)
                                <option name="category" value={{ $categories[$i]->{'id'} }}>
                                    {{ $categories[$i]->{'name'} }}
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input type="text" name="localisation" class="form-control" placeholder="Localisation" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <textarea type="text" name="description" class="form-control" rows=4 placeholder="Description"
                            style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn btn-block">Valider</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
            initialiseImportImage();
        });
    </script>

@endsection
