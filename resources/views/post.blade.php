@extends('/layouts/main')

@section('main-content')
<div class="create-post-container container">
    <form action="{{ empty($post) ? "/post/create" : "/post/update/".$post['id']}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] ?? "" }}">
          <span class="text-danger">
            @error('title')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $post['content'] ?? "" }}</textarea>
          <span class="text-danger">
            @error('content')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Please insert image here</label>
          <input class="form-control" type="file" id="image" name="image" value="{{ $post['imagePath'] ?? "" }}">
          <span class="text-danger">
            @error('image')
            {{ $message }}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="category">
            <option selected disabled>CATEGORY</option>
            <option value="business">BUSINESS</option>
            <option value="health">HEALTH</option>
            <option value="lifestyle">LIFESTYLE</option>
            <option value="politics">POLITICS</option>
            <option value="sci-tech">SCI-TECH</option>
            <option value="sports">SPORTS</option>
          </select>
          <span class="text-danger">
            @error('category')
            {{ $message }}
            @enderror
          </span>
        </div>
        <button class="btn btn-primary">{{ empty($post) ? 'Insert' : 'Update' }}</button>
        <a href="/" class="btn btn-primary">Back</a>
      </form>
    </div>
@endsection