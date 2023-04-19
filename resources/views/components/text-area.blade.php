<div class="mb-3">
    <label for="{{$for}}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" name="{{$name}}" id="{{$id}}" cols="{{$cols}}" rows="{{$rows}}"></textarea>
    <span class="text-danger">
        @error('content')
            {{ $message }}  
        @enderror
    </span>
</div>