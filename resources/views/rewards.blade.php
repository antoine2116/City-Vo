@extends('layouts.master')

@section('title', 'Récompenses')

@section('content')
    <div class="col-12 pt-1">
        {{-- Infos Profil --}}
        <div class="row">
            <div class="col-2 pr-2">
                <img class="avatar"
                    src="https://www.benouaiche.com/wp-content/uploads/2018/12/homme-medecine-chirurgie-esthetique-dr-benouaiche-paris.jpg" />
            </div>
            <div class="col-4 pt-1 ml-3 points-container float-right">
                <div class="points-content pt-1">
                    <strong style="font-size: 1.2em">290</strong> points
                </div>
            </div>
            <div class="col-4 pt-1 ml-3 rank-container">
                <div class="rank-content  pt-1">
                    <strong style="font-size: 1.2em">33</strong> ème
                    <i class="fas fa-trophy" style="color: #e35914"></i>
                </div>
            </div>
        </div>
        <hr />

        {{-- Liste Rewards --}}
        @for ($i = 0; $i < 4; $i++)
            <div class="form-group row justify-content-center">
                <div class="reward-container float-left mr-1">
                    <img class="reward-img" src="{{ asset('images/musee-aquitaine.jpg') }}" />
                    <div class="reward-text">
                        <strong>100 POINTS</strong>
                    </div>
                </div>
                <div class="reward-container float-right ml-1">
                    <img class="reward-img" src="{{ asset('images/restaurant-1.jpg') }}" />
                    <div class="reward-text">
                        <strong>150 POINTS</strong>
                    </div>
                </div>
            </div>
        @endfor
    </div>



    {{-- Modale Reward --}}
    <div class="modal fade" id="modal-reward" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{-- Contenu modale de base --}}
                <div class="el-init">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr(e) de vouloir 100 points dépenser vos points pour :
                        <h6 class="text-center pt-1 font-weight-bold">
                            Reward quelconque
                        </h6>
                    </div>
                </div>

                {{-- Contenu modale après validation --}}
                <div class="modal-body el-succes hide">
                    Félications ! Vous avez reçu votre récompense par mail.
                </div>

                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success el-init" id="btnValiderReward">Valider</button>
                    <button type="button" class="btn btn-secondary el-init" data-dismiss="modal">Annuler</button>

                    <button type="button" class="btn btn-info el-succes hide" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        initialiseModaleReward();

    </script>

@endsection
