<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="brand" class="form-label">{{ __('Brand') }}</label>
            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand', $product?->brand) }}" id="brand" placeholder="Brand">
            {!! $errors->first('brand', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="size" class="form-label">{{ __('Size') }}</label>
            <input type="text" name="size" class="form-control @error('size') is-invalid @enderror" value="{{ old('size', $product?->size) }}" id="size" placeholder="Size">
            {!! $errors->first('size', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="resolution" class="form-label">{{ __('Resolution') }}</label>
            <input type="text" name="resolution" class="form-control @error('resolution') is-invalid @enderror" value="{{ old('resolution', $product?->resolution) }}" id="resolution" placeholder="Resolution">
            {!! $errors->first('resolution', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="technology" class="form-label">{{ __('Technology') }}</label>
            <input type="text" name="technology" class="form-control @error('technology') is-invalid @enderror" value="{{ old('technology', $product?->technology) }}" id="technology" placeholder="Technology">
            {!! $errors->first('technology', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>