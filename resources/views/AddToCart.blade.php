@extends('template')

@section('titrePage')
    Ajouter à la Commande
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Finaliser l'ajout</h1>
    @endsection

    @section('contenu')
        <h2>Commande numéro: </h2>
        @if(Session::has('CurrentCommande'))
            {{session('CurrentCommande')}}
        @else
            {!! Form::open(['action'=>'DetailController@newDetail',$article->getIdArticle()]) !!}
            {!! Form::label('Entrez le numéro de commande') !!}
            {!! Form::text('NO_COMMAND', null) !!}
            <h2>Article : {{$article->getLibArticle()}}</h2>
            {!! Form::label('Sélectionner la quantité que vous souhaitez commander:') !!}
            {!! Form::number('Qte',0) !!}
            {!! Form::hidden('id',$article->getIdArticle()) !!}
            {!!  Form::submit('Valider') !!}
            {!! Form::close() !!}
        @endif
        <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif