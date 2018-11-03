
{{ csrf_field() }}
<!-- Form Name -->
<!-- Appended checkbox -->
@if (count($errors) > 0 )
    <div class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@for ($i = 0; $i < $size->flavours; $i++)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>
            <b>Sabor {{ $i + 1 }}</b>
        </p>
        <select id="flavour" name="flavour[]" class="form-control show-tick flavour_select" data-live-search="true">
            <option value="">Selecione um sabor</option>
            @if(count($categories->categoryFather->categoriesSon))
                @foreach ($categories->categoryFather->categoriesSon as $cat)
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
    </div>
@endfor

@foreach($additionals as $additional)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>
            <b>{{ $additional->name }}</b>
        </p>
        <select id="flavour" name="flavour_add[{{ $additional->id }}]" class="form-control show-tick flavour_select" data-live-search="true">
            <option value="">Selecione um sabor</option>
            @foreach ($additional->flavours as $key => $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
@endforeach