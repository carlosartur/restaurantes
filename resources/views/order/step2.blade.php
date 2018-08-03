<fieldset>
    {{ csrf_field() }}
    <!-- Form Name -->
    <!-- Appended checkbox -->
    @if (count($errors) > 0 )
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @for ($i = 0; $i < $size->flavours; $i++)
        <div class="form-group">
            <label class="col-md-4 control-label" for="flavour">Sabor {{ $i + 1 }}</label>
            <div class="col-md-4">
                <select id="flavour" name="flavour[]" class="form-control input">
                    <option value="">Selecione um sabor</option>
                    @foreach ($size->flavoursRel as $key => $value)
                        <option value="{{ $value->id }}" {{ $value->id == old('flavour') ? 'selected' : '' }}>{{ $value->name }}</option>
                    @endforeach
                </select>
                <p class="help-block">Sabor {{ $i + 1 }}</p>
            </div>
        </div>
    @endfor
</fieldset>