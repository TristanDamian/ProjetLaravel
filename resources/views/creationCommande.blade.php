@extends('template')

@section('titrePage')
    Ajouter une Commande
@endsection

@if(Session::has('CurrentUtil'))
    @section('titreItem')
        <h1>Ajouter une Commande</h1>
    @endsection

    @section('contenu')
        <div class="col-sm-offset-3 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">Créer une commande</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'saisieCommande']) !!}
                    <div class="form-group {!! $errors->has('NO_VENDEUR') ? 'has-error' : '' !!}">
                        {!! Form::text('NO_VENDEUR', null, ['class' => 'form-control', 'placeholder' => 'Numéro du vendeur']) !!}
                        {!! $errors->first('NO_VENDEUR', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('NO_CLIENT') ? 'has-error' : '' !!}">
                        {!! Form::text('NO_CLIENT', null, ['class' => 'form-control', 'placeholder' => 'Numéro du client']) !!}
                        {!! $errors->first('NO_CLIENT', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                    {!! Form::close() !!}
                    <div class="card-body">
                        @if(session('roleUtil') == 'admin')
                            <p><a href="{{url('/Commandes')}}">Retour à la liste des commandes</a></p>
                        @endif
                        <p><a href="{{url('/deconnecte')}}">Se déconnecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
    @section('contenu')
        <p>Vous n'êtes pas connecté !</p>
    @endsection
@endif