@extends('template')

@section('titrePage')
    Compte Client
@endsection

@if(Session::has('CurrentUtil'))
    @section('contenu')
        <h2>Vos commandes</h2>

        @if($lesCommandes!=null)
            <table class="table table-bordered table-stripped">
                <thead>
                    <th>Id</th>
                    <th>Numéro Vendeur</th>
                    <th>Numéro Client</th>
                    <th>Date</th>
                    <th>Facture</th>
                    <th>Détails</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </thead>

                @foreach ($lesCommandes as $commande)
                    <tr>
                        <td>{{{ $commande->getIdComm() }}}</td>
                        <td>{{{ $commande->getNoVendeur() }}}</td>
                        <td>{{{ $commande->getNoClient() }}}</td>
                        <td>{{{ $commande->getDate() }}}</td>
                        <td>{{{ $commande->getFacture() }}}</td>
                        <td><button><a href="Commandes/{{$commande->getIdComm()}}/Details">Détails</a></button></td>
                        <td><button><a href="modifierCommande/{{$commande->getIdComm()}}">Modifier</a></button></td>
                        <td><button><a href="Commandes/{{$commande->getIdComm()}}/Supprimer">Supprimer</a></button></td>
                    </tr>
                @endforeach
                <p>Vous pouvez créer une commande ici : <a href="creerCommande">Créer une commande</a>
                <p>Vous pouvez ajouter des articles ici : <a href="Articles">Liste de nos articles</a></p>
            </table>
        @else
            <p>Pas encore de commande.</p>
            <p>Vous pouvez créer une commande ici : <a href="creerCommande">Créer une commande</a>
        @endif

        <h2>Vos informations</h2>
        <table class="table table-bordered table-stripped">
            <thead>
                <th>Numéro Client</th>
                <th>Société</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
            </thead>
            <tr>
                <td>{{ $leClient->getNOCLIENT() }}</td>
                <td>{{ $leClient->getSOCIETE() }}</td>
                <td>{{ $leClient->getNOMCL() }}</td>
                <td>{{ $leClient->getPRENOMCL() }}</td>
                <td>{{ $leClient->getADRESSECL() }}</td>
                <td>{{ $leClient->getVILLECL() }}</td>
                <td>{{ $leClient->getCODEPOSTCL() }}</td>
            </tr>
        </table>
        <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif