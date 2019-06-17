@extends('template')

@section('titrePage')
    Connexion
@endsection

@section('titreItem')
    <h1>Vous êtes bien connecté</h1>
@endsection

@section('contenu')
    <div class="card">
            <div class="card-body">
                <h3>Bonjour !</h3>
                <p>Bienvenue sur le site de Déco & Desgin !</p>
                @if(session('roleUtil') == 'admin')
                    <p>Vous pouvez gérer ici les commandes, les articles,
                    ou consulter les fiches client et vendeur.</p>
                @else
                    <p>Vous pouvez gérer ici vos commandes et votre compte client,
                        ou consulter les articles.</p>
                @endif
            </div>
    </div>
    <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
@endsection