<input type="{{ $type }}" class="form-control {{ $class }}" id="{{ $id }}"
    name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" min="{{ $min }}"
    max="{{ $max }}" autocomplete="{{ $autocomplete }}" size="{{ $size }}"
    minlength="{{ $minlength }}" maxlength="{{ $maxlength }}" {{-- pattern="{{$pattern}}" --}} step="{{ $step }}"
    src="{{ $src }}" alt="{{ $alt }}" width="{{ $width }}" height="{{ $height }}">
<span class="text-danger">
    @error($name)
        {{ $message }}
    @enderror
</span>
