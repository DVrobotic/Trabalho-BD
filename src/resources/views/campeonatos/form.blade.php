<div class="row">
    <div class="form-group col-12">
        <label for="nome" class="required">Nome </label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus value="{{ old('nome', $campeonato->nome) }}">
    </div>
    <div class="form-group col-12">
        <label for="inicio" class="required">Inicio </label>
        <input type="date" name="inicio" id="inicio" class="form-control" required autofocus value="{{ old('inicio', $campeonato->inicio) }}">
    </div>
    <div class="form-group col-12">
        <label for="final" class="required">Final </label>
        <input type="date" name="final" id="final" class="form-control" required autofocus value="{{ old('final', $campeonato->final) }}">
    </div>
    <div class="form-group col-sm-12">
        <label for="modalidade_id" class="required">Modalidade </label>
        <select class="form-control select2" name="modalidade_id" id="modalidade_id" required value="{{ old('modalidade_id', $campeonato->modalidade_id) }}">
            @foreach($modalidades as $modalidade)
                <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>
            @endforeach
        </select>
    </div>
</div>
