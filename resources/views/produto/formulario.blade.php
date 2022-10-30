{{-- Nome --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nome do Produto') }}</label>
    <div>
        <input type="text" id="name" name="name" value="{{ isset($produto) ? $produto->name : old('name') }}"
            class="form-control @error('name') is-invalid @enderror" placeholder="Escreva o nome do Produto" required>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Descricao --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descricao do Produto') }}</label>
    <div>
        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
            placeholder="Escreva uma descrição curta sobre o produto"
            required>{{ isset($produto) ? $produto->description : old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


{{-- Marca --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Marca do Produto') }}</label>
    <div>
        <input type="text" id="brand" name="brand" value="{{ isset($produto) ? $produto->brand : old('brand') }}"
            placeholder="Escreva a marca do produto"
            class="form-control @error('brand') is-invalid @enderror" required>
        @error('brand')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Data de validade --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Data de validade do Produto') }}</label>
    <div>
        <input type="text" id="expiration_date" name="expiration_date" min="1" max="500"
            value="{{ isset($produto) ? $produto->expiration_date : old('expiration_date') }}"
            placeholder="Escreva a data de validade do produto"
            class="form-control @error('expiration_date') is-invalid @enderror" required>
        @error('expiration_date')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


{{-- Categoria --}}
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Categoria') }}</label>
    <div>
        <select id="categoria_id" name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror"
            required>
            <option value="">--- Selecione uma Categoria ---</option>
            @isset($categorias)
                @foreach ($categorias as $categoria)
                    <option @if (isset($produto) && $produto->categoria_id == $categoria->id) selected @endif value="{{ $categoria->id }}">
                        {{ $categoria->name }}
                    </option>
                @endforeach
            @endisset
        </select>
        @error('categoria_id')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Imagem --}}
<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($produto)) required @endif" for="image">Imagens</label>
        <input type="file" name="image" class="form-control" accept="image/*"
            @if (!isset($produto)) required @endif>
    </div>
</div>
