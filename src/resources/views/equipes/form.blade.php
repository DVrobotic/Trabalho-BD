<div class="row">
    <div class="form-group col-12">
        <label for="nome" class="required">Nome </label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus value="{{ old('nome', $equipe->nome) }}">
    </div>
    <div class="form-group col-sm-12">
        <label for="modalidade_id" class="required">Modalidade </label>
        <select class="form-control select2" name="modalidade_id" id="modalidade_id" required value="{{ old('modalidade_id', $equipe->modalidade_id) }}">
            @foreach($modalidades as $modalidade)
                <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-12">
        <label for="modalidade_id" class="required">Campeonatos </label>
        <select multiple class="form-control" name="campeonato_id[]" id="campeonato_id" required value="{{ old('campeonato_id[]', $equipe->campeonatos()->pluck('id')) }}">
            @foreach($campeonatos as $campeonato)
                <option {{ $equipe->campeonatos()->pluck('id')->contains($campeonato->id) ? 'selected' : '' }} value="{{ $campeonato->id }}">{{ $campeonato->nome }}</option>
            @endforeach
        </select>
    </div>
</div>
