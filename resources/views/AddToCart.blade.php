@extends('template')

@section('titrePage')
    Ajouter à la Commande
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Finaliser l'ajout</h1>
    @endsection

    @section('contenu')
        <h3>Commande numéro: </h3>
        {!! Form::open(['action'=>'DetailController@newDetail',$article->getIdArticle()]) !!}
        @if(Session::has('CurrentCommande'))
            {{session('CurrentCommande')}}
        @else
            {!! Form::label('Entrez le numéro de commande') !!}
            {!! Form::text('NO_COMMAND', null) !!}
        @endif
        <h3>Article : {{$article->getLibArticle()}}</h3>
        {!! Form::label('Sélectionner la quantité que vous souhaitez commander:') !!}
        {!! Form::number('Qte',0) !!}
        {!! Form::hidden('id',$article->getIdArticle()) !!}
        {!!  Form::submit('Valider') !!}
        {!! Form::close() !!}
        <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif