@extends('layouts.sistema')
@section('content')

@component('components.table')
    @slot('create', route('equipes.create'))
    @slot('title', 'Equipes')
    @slot('head')
        <th width="50%">Nome</th>
        <th width="10%"></th>
    @endslot
    @slot('body')
        @foreach ($equipes as $equipe)
            <tr class="deletable">
                <td>{{ $equipe->nome }}</td>
                <td class="options">
                    <a href="{{ route('equipes.edit', $equipe->id) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('equipes.show', $equipe->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                    <form class="form-delete" action="{{ route('equipes.destroy', $equipe->id) }}" method="post">
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
