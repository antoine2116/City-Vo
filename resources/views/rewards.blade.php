@extends('layouts.master')

@section('title', 'Récompenses')

@section('content')
    <div class="col-12 pt-1">
        {{-- Infos Profil --}}
        <div class="row pt-1">
            <div class="col-2 pr-2">
                <img class="avatar"
                    src="{{ asset('images/users/default.png') }}" />
            </div>
            <div class="col-4 pt-1 ml-3 points-container">
                <div class="points-content pt-1">
                    <strong style="font-size: 1.2em" id="user-points">
                        {{ $points[0]->{'points'} }}
                    </strong> points
                </div>
            </div>
            <div class="col-4 pt-1 ml-3 rank-container float-right">
                <div class="rank-content  pt-1">
                    <strong style="font-size: 1.2em">
                        {{-- {{ $rank[0]->{'rank'} }} --}}
                        28
                    </strong>
                    {{-- {{ $rank[0]->{'rank'} == 1 ? 'er' : 'ème' }}
                    --}}
                    ème
                    <i class="fas fa-trophy" style="color: #e35914"></i>
                </div>
            </div>
        </div>
        <hr class="mt-2" />

        {{-- Liste Rewards --}}
        @for ($i = 0; $i < sizeof($rewards); $i++)
            @if ($i % 2)
                <div class="reward-container float-right ml-1">
                @else
                    <div class="form-group row justify-content-center">
                        <div class="reward-container float-left mr-1">
            @endif
            <div class="reward-img-container">
                <img class="reward-img" src="{{ asset('images/rewards/' . $rewards[$i]->{'image'}) }}" alt="">
            </div>

            <div class="reward-text">
                <strong>
                    <span class="reward-points">
                        {{ $rewards[$i]->{'points'} }}
                    </span>
                    POINTS
                </strong>
            </div>
    </div>
    @if ($i % 2)
        </div>
    @endif
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
                        Êtes-vous sûr(e) de vouloir dépenser
                        <span id="modale-points-requis" class="font-weight-bold"></span>
                        points pour obtenir votre récompense ?
                        <h6 class="text-center pt-1 font-weight-bold">
                            Il vous restera ensuite
                            <span id="modale-points-restant">
                            </span>
                            points
                        </h6>
                    </div>
                </div>

                {{-- Contenu modale après validation --}}
                <div class="modal-body el-succes hide">
                    Félications ! Vous avez reçu votre récompense par mail.
                </div>

                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success el-init btn-block" id="btnValiderReward">Valider</button>
                    <button type="button" class="btn btn-info el-succes hide" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        initialiseModaleReward();

    </script>

@endsection
