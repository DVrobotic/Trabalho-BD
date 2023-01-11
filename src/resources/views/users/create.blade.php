@extends('layouts.sistema')

@section('content')

@component('components.create')
    @slot('title', 'Cadastrar Usuário')
    @slot('url', route('users.store'))
    @slot('form')
        @include('users.form')
    @endslot
@endcomponent

@endsection
