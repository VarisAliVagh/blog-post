<div class="mb-3">
    <select class="form-select" aria-label="Default select example" name="{{$name}}">
        <option selected disabled>CATEGORY</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
        <option value="{{$optAttrValue}}">{{$optValue}}</option>
    </select>
    <span class="text-danger">
        @error('category')
        {{ $message }}
        @enderror
    </span>
</div>