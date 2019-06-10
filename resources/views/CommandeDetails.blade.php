@extends('template')

@section('titrePage')
    Détails de la conférence
@endsection

@section('titreItem')
    <h1>Détails des produits</h1>
@endsection

@section('contenu')
    <h2>Commande numéro: {{$laCommande->getIdComm()}}</h2>
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
    @endif
@endsection