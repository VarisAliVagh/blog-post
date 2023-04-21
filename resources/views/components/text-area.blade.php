<textarea class="form-control {{ $class }}" name="{{ $name }}" id="{{ $id }}"
    cols="{{ $cols }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" dirname="{{ $dirname }}"
    maxlength="{{ $maxlength }}" wrap="{{ $wrap }}">{{ $value }}</textarea>
<span class="text-danger">
    @error($name)
        {{ $message }}
    @enderror
</span>
