@extends('layouts.sistema')
@section('content')

@component('components.table')
    @slot('create', route('campeonatos.create'))
    @slot('title', 'Campeonatos')
    @slot('head')
        <th width="30%">Nome</th>
        <th width="30%">Modalidade</th>
        <th width="30%">Início</th>
        <th width="30%">Final</th>
        <th width="10%"></th>
    @endslot
    @slot('body')
        @foreach ($campeonatos as $campeonato)
            <tr class="deletable">
                <td>{{ $campeonato->nome }}</td>
                <td>{{ $campeonato->modalidade->nome }}</td>
                <td>{{ $campeonato->inicio }}</td>
                <td>{{ $campeonato->final }}</td>
                <td class="options">
                    <a href="{{ route('campeonatos.edit', $campeonato->id) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('campeonatos.show', $campeonato->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                    <form class="form-delete" action="{{ route('campeonatos.destroy', $campeonato->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush
