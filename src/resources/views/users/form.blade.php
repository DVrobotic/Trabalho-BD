<div class="row">
    <div class="form-group col-12">
        <label for="nome" class="required">Nome </label>
        <input type="text" name="nome" id="nome" class="form-control" required autofocus value="{{ old('nome', $user->nome) }}">
    </div>
    <div class="form-group col-12">
        <label for="sobrenome" class="required">Sobreome </label>
        <input type="text" name="sobrenome" id="sobrenome" class="form-control" required autofocus value="{{ old('sobrenome',$user->sobrenome) }}">
    </div>
    <div class="form-group col-sm-6 col-12">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email',$user->email) }}">
    </div>
    <div class="form-group col-sm-6 col-12">
        <label for="cpf" class="required">CPF </label>
        <input type="text" name="cpf" id="cpf" class="form-control" required value="{{ old('cpf',$user->cpf) }}">
    </div>
    <div class="form-group col-sm-6 col-12">
        <label for="endereço" class="required">Endereço</label>
        <input type="text" name="endereço" id="endereço" class="form-control" required value="{{ old('endereço', $user->endereço) }}">
    </div>

    @if (!Route::is('users.show'))
        <div class="form-group col-sm-12">
            <hr>
        </div>
        <div class="form-group col-sm-6 col-12">
            <label for="senha" class="{{ Route::is('users.create') ? 'required' : '' }}">Senha </label>
            <input type="password" name="senha" id="senha" class="form-control" minlength="8" {{ Route::is('users.create') ? 'required' : '' }}>
        </div>
        <div class="form-group col-sm-6 col-12">
            <label for="senha_confirmation" class="{{ Route::is('users.create') ? 'required' : '' }}">Confirmação de senha </label>
            <input type="password" name="senha_confirmation" id="senha_confirmation" class="form-control" {{ Route::is('users.create') ? 'required' : '' }}>
        </div>
    @endif

</div>

@push('scripts')
    <script>
        $(function() {
            $('.select2').select2();
        });

        $('select[value]').each(function () {
            $(this).val($(this).attr('value'));
        });

        $("#profile").change(function() {
            filePreview(this, '#profilePreview');
        });
    </script>
    <script>

    </script>
@endpush
