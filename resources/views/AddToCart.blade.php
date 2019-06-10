@extends('template')

@section('titrePage')
    Ajouter à la Commande
@endsection

@section('titreItem')
    <h1>Finaliser l'ajout</h1>
@endsection

@section('contenu')
    <h2>Commande numéro: {{session('CurrentCommande')}}</h2>
    <h2>Article : {{$article->getLibArticle()}}</h2>
    {!! Form::open(['action'=>'DetailController@newDetail',$article->getIdArticle()]) !!}
    {!! Form::label('Sélectionner la quantité que vous souhaitez commander:') !!}
    {!! Form::number('Qte',0) !!}
    {!! Form::hidden('id',$article->getIdArticle()) !!}
    {!!  Form::submit('Valider') !!}
    {!! Form::close() !!}
@endsection