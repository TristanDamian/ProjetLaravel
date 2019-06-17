@extends('template')

@section('titrePage')
    Votre panier
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Votre Panier</h1>
    @endsection

    @section('contenu')
        <h2>Commande numéro: {{session('CurrentCommande')}}</h2>
        <p>{{$laCommande->getDate()}}</p>
        @if($lesDetails)
            <table class="table table-bordered table-stripped">
                <thead>
                <th>Nom de l'article</th>
                <th>Quantité</th>
                </thead>
                @foreach ($lesDetails as $Detail)
                    <tr>
                        <td>{{{$Detail->getLibDetail()}}}</td>
                        <td>{{{$Detail->getQteDetail()}}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="card-body">
                <p>Vous pouvez continuer à ajouter des articles ici :
                    <a href="{{url('/Articles')}}">Liste de nos articles</a></p>
            </div>

        @else
            <strong>Pas encore d'articles ajoutés</strong>
            <div class="card-body">
                <p>Vous pouvez ajouter des articles ici : <a href="{{url('/Articles')}}">Liste de nos articles</a></p>
            </div>
        @endif
        <div class="card-body">
            <p><a href="{{url('/Compte')}}">Retour au compe client</a></p>
            <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
        </div>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif