<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nomes') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                id="input-name" type="text" placeholder="{{ __('Categoria do Produto') }}"
                value="{{ isset($name) ? $name->name : old('name') }}" required="true"
                aria-required="true" />
            @if ($errors->has('name'))
                <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descricao') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
                id="input-description" type="text" placeholder="{{ __('Descricao da categoria do produto') }}"
                value="{{ isset($description) ? $description->description : old('description') }}" required="true"
                aria-required="true" />
            @if ($errors->has('description'))
                <span id="description-error" class="error text-danger"
                    for="input-description">{{ $errors->first('description') }}</span>
            @endif
        </div>
    </div>
</div>
