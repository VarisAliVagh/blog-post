<div class="mb-3">
    <label for="{{$for}}" class="form-label">{{ $label }}</label>
    <input type="{{$type}}" class="form-control" id="{{$id}}" name="{{$name}}" value="{{$value}}">
    <span class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>
          
         
          
          {{-- <button class="btn btn-primary">{{ empty($post) ? 'Insert' : 'Update' }}</button>
          <a href="/" class="btn btn-primary">Back</a>   --}}
