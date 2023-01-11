@extends('layouts.sistema')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Equipe')
    @slot('url', route('equipes.update', $equipe->id))
    @slot('form')
        @include('equipes.form')
    @endslot
@endcomponent

@endsection

