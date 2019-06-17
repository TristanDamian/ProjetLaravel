@extends('template')

@section('titrePage')
    Inscription
@endsection
@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Inscription d'un utilisateur</h1>
    @endsection

    @section('contenu')
        <div class="col-sm-offset-3 col-sm-6">
            <div class="card">
                <div class="card-header">Confirmation Inscription</div>
                <div class="card-body">
                    Votre inscription est confirmée.
                    <p>Vous pouvez consulter nos articles ici : <a href="{{url('/Articles')}}">Liste de nos articles</a></p>
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