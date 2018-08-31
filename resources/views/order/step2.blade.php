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
            <label class="col-md-4" for="flavour">Sabor {{ $i + 1 }}</label>
            <div class="col-md-4">
                {{--  {{ dd($categories->categoriesSon) }}  --}}
                <select class="flavour_select" id="flavour" name="flavour[]" class="form-control input">
                    <option value="">Selecione um sabor</option>
                    @if(count($categories->categoriesSon))
                        @foreach ($categories->categoriesSon as $cat)
                            <optgroup label="{{ $cat->name }}">
                                @foreach ($cat->flavours as $key => $value)
                                    <option value="{{ $value->id }}" {{ $value->id == old('flavour') ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    @else
                        @foreach ($size->flavoursRel as $key => $value)
                            <option value="{{ $value->id }}" {{ $value->id == old('flavour') ? 'selected' : '' }}>{{ $value->name }}</option>
                        @endforeach
                    @endif
                </select>
                <p class="help-block">Sabor {{ $i + 1 }}</p>
            </div>
        </div>
    @endfor
    @foreach($additionals as $additional)
        <div class="form-group">
            <label class="col-md-4" for="flavour">{{ $additional->name }}</label>
            <div class="col-md-4">
                <select class="flavour_select" id="flavour" name="flavour_add[{{ $additional->id }}]" class="form-control input">
                    <option value="">Selecione um sabor</option>
                    @foreach ($additional->flavours as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                <p class="help-block">Sabor {{ $additional->name }}</p>
            </div>
        </div>
    @endforeach
</fieldset>