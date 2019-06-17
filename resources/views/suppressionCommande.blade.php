@extends('template')

@section('titrePage')
    Supprimer une commande
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Suppression d'une commande</h1>
    @endsection

    @section('contenu')
        <div class="col-sm-offset-3 col-sm-6">
            <div class="card">
                <div class="card-header">Confirmation Suppression</div>
                <div class="card-body">
                    La suppression de la commande dans la table est confirmé.
                    <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
                </div>
            </div>
        </div>
        <p></p>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif