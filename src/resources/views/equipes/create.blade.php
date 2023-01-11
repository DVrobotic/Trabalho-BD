@extends('layouts.sistema')

@section('content')

@component('components.create')
    @slot('title', 'Cadastrar Equipe')
    @slot('url', route('equipes.store'))
    @slot('form')
        @include('equipes.form')
    @endslot
@endcomponent

@endsection
