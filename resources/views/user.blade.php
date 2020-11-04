@extends('layouts.master')

@section('title', 'Mon profil')

@section('content')
    <div class="card">
        <form action="" method="post">
            <div class="row pt-1 pl-1 pb-1">
                <div class="col-2 pr-3">
                    <img class="avatar-bigger"
                        src="https://www.benouaiche.com/wp-content/uploads/2018/12/homme-medecine-chirurgie-esthetique-dr-benouaiche-paris.jpg" />
                </div>
                <div class="col-6 pt-1" style="margin-left: 50px">
                    <div class="row">
                        <input type="text" name="name" class="form-control editable" value="Paul Girard" />
                    </div>
                    <div class="row">
                        <input type="text" name="email" class="form-control editable" value="paul.girard@gmail.com" />
                    </div>
                </div>
                <div class="col-2 pt-1">
                    <button type="button" class="btn btn-info" id="btnValiderUser">
                        <i class="fas fa-save"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="ml-1 mr-1">
        @for ($i = 0; $i < 10; $i++)
            <div class="card user-post mt-2 shadow">
                <div class="user-post-img-container">
                    <img class="user-post-img" src="https://s2.best-wallpaper.net/wallpaper/iphone/1811/Queen-Elizabeth-Garden-Canada-beautiful-park_iphone_1080x1920.jpg" />
                </div>
                <div class="user-post-text">
                    aaaaaaaaaaaaaaaaaaaa
                </div>
            </div>
        @endfor
    </div>



    <script type="text/javascript">
        initialiseEditUser();

    </script>
@endsection
