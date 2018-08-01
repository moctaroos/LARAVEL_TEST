@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('etudiant.info') }}</div>

                <div class="panel-body">
                    <p>{{ trans('etudiant.nom') }} : {{ $etudiant->nom }}</p>
                    <p>{{ trans('etudiant.prenom') }}  : {{ $etudiant->prenom }}</p>
                </div>
                <a href="{{route('home')}}">{{trans('commun.retour')}} </a> 
            </div>
        </div>
    </div>
</div>
@endsection