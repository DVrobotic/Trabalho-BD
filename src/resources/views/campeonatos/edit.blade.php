@extends('layouts.sistema')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Campeonato')
    @slot('url', route('campeonatos.update', $campeonato->id))
    @slot('form')
        @include('campeonatos.form')
    @endslot
@endcomponent

@endsection

