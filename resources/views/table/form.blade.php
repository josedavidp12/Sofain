<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="numero" class="form-label">{{ __('Numero') }}</label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero', $table?->numero) }}" id="numero" placeholder="Numero">
            {!! $errors->first('numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="capacidad" class="form-label">{{ __('Capacidad') }}</label>
            <select name="capacidad" id="capacidad" class="form-control @error('capacidad') is-invalid @enderror">
                <option value="1" {{ old('capacidad', optional($table)->capacidad) == 1 ? 'selected' : '' }}>1 persona</option>
                <option value="2" {{ old('capacidad', optional($table)->capacidad) == 2 ? 'selected' : '' }}>2 personas</option>
                <option value="3" {{ old('capacidad', optional($table)->capacidad) == 3 ? 'selected' : '' }}>3 personas</option>
            </select>
            {!! $errors->first('capacidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>