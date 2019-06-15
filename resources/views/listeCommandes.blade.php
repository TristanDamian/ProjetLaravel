@extends('template')

@section('titrePage')
    Liste des commandes
@endsection

@if(Session::has('CurrentUtil'))
    @section('contenu')<table class="table table-bordered table-stripped">
        <thead>
        <th>Id</th>
        <th>Numéro Vendeur</th>
        <th>Numéro Client</th>
        <th>Date</th>
        <th>Facture</th>
        <th>Détails</th>
        <th>Supprimer</th>
        </thead>
        @foreach ($lescommandes as $commande)
            <tr>
                <td>{{{ $commande->getIdComm() }}}</td>
                <td>{{{ $commande->getNoVendeur() }}}</td>
                <td>{{{ $commande->getNoClient() }}}</td>
                <td>{{{ $commande->getDate() }}}</td>
                <td>{{{ $commande->getFacture() }}}</td>
                <td><button><a href="Commandes/{{{$commande->getIdComm()}}}/Details">Détails</a></button></td>
                <td><button><a href="Commandes/{{{$commande->getIdComm()}}}/Supprimer">Supprimer</a></button></td>
            </tr>
        @endforeach
    </table>
    <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif