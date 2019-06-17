@extends('template')

@section('titrePage')
    Inscription
@endsection

@section('titreItem')
    <h1>S'inscrire</h1>
@endsection

@section('contenu')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-body">
                {!! Form::open(['url' => 'postAjoutUtilisateur']) !!}
                <div class="form-group {!! $errors->has('NomUtil') ? 'has-error' : '' !!}">
                    {!! Form::text('NomUtil', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                    {!! $errors->first('NomUtil', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('PrenomUtil') ? 'has-error' : '' !!}">
                    {!! Form::text('PrenomUtil', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
                    {!! $errors->first('PrenomUtil', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('MotPasse') ? 'has-error' : '' !!}">
                    {!! Form::password('MotPasse', null, ['class' => 'form-control', 'placeholder' => 'Votre mot de passe']) !!}
                    {!! $errors->first('MotPasse', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('role') ? 'has-error' : '' !!}">
                    {!! Form::text('role', null, ['class' => 'form-control', 'placeholder' => 'Votre rôle']) !!}
                    {!! $errors->first('role', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <p><a href="{{url('/')}}">Retour à l'accueil</a></p>
    </div>
@endsection