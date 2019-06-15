@extends('template')

@section('titrePage')
    Ajouter un article
@endsection
@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Ajout d'un article à votre commande</h1>
    @endsection

    @section('contenu')
        <div class="col-sm-offset-3 col-sm-6">
            <div class="card">
                <div class="card-header">Confirmation Insertion</div>
                <div class="card-body">
                    L'insertion de l'article dans la table est confirmé.
                    <p>Vous pouvez ajouter des articles ici : <a href="{{url('/Articles')}}">Liste de nos articles</a></p>
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