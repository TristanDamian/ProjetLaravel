@extends('template')

@section('titrePage')
    Détails de la commande
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Détails des produits</h1>
    @endsection

    @section('contenu')
        <h3>Commande numéro: {{$laCommande->getIdComm()}}</h3>
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

        @else
            <strong>Pas encore d'articles ajoutés</strong>
            <div class="card-body">
                <p>Vous pouvez ajouter des articles ici : <a href="{{url('/Articles')}}">Liste de nos articles</a></p>
            </div>
        @endif
        <div class="card-body">
            <p><a href="{{url('/Commandes')}}">Retour à la liste des commandes</a></p>
            <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
        </div>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif