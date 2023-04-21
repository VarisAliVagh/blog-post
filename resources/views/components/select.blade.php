<select class="form-select {{ $class }}" aria-label="Default select example" name="{{ $name }}"
    id="{{ $id }}">
    <option selected disabled>CATEGORY</option>
    @foreach ($option as $opt)
        <option value="{{ $opt['label'] }}">{{ $opt['label'] }}</option>
    @endforeach
</select>
<span class="text-danger">
    @error($name)
        {{ $message }}
    @enderror
</span>
