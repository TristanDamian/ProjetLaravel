@extends('template')

@section('titrePage')
    Liste des commandes
@endsection



@section('contenu')<table class="table table-bordered table-stripped">
    <thead>
    <th>Id</th>
    <th>Numéro Vendeur</th>
    <th>Numéro Client</th>
    <th>Date</th>
    <th>Facture</th>
    <th></th>
    </thead>
    @foreach ($lescommandes as $commande)
        <tr>
            <td>{{{ $commande->getIdComm() }}}</td>
            <td>{{{ $commande->getNoVendeur() }}}</td>
            <td>{{{ $commande->getNoClient() }}}</td>
            <td>{{{ $commande->getDate() }}}</td>
            <td>{{{ $commande->getFacture() }}}</td>
            <td><button><a href="Commandes/{{{$commande->getIdComm()}}}">Détails</a></button></td>
        </tr>
    @endforeach
</table>
@endsection
