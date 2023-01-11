@extends('layouts.sistema')

@section('content')

@component('components.create')
    @slot('title', 'Cadastrar Campeonato')
    @slot('url', route('campeonatos.store'))
    @slot('form')
        @include('campeonatos.form')
    @endslot
@endcomponent

@endsection
