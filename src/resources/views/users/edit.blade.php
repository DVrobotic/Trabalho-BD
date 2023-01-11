@extends('layouts.sistema')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Usuário')
    @slot('url', route('users.update', $user->id))
    @slot('form')
        @include('users.form')
    @endslot
@endcomponent

@endsection

