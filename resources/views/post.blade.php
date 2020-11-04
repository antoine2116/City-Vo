@extends('layouts.master')

@section('title', 'Publication')

@section('content')

    <form method="post">
        <div class="row">
            <div class="img-container">
                <div class="init-preview-img">
                    <input id="ipt-image" name="image" class="hide" type="file" />
                    <i class="fas fa-cloud-upload-alt fa-5x"></i>
                    <p>
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
                        <option value="1">Catégorie 1</option>
                        <option value="2">Catégorie 2</option>
                        <option value="3">Catégorie 3</option>
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
                    <textarea type="text" name="description" class="form-control" rows=4 placeholder="Description" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success btn btn-block">Valider</button>
                </div>
            </div>
        </div>
        
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            initialiseImportImage();
        });
    </script>

@endsection
