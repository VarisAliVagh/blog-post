@extends('/layouts/main')

@section('main-content')
<div class="container mt-5">
    <form action="/post/create" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
          <span class="text-danger">
            @error('title')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
          <span class="text-danger">
            @error('content')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment">
            <span class="text-danger">
              @error('comment')
                {{ $message }}
              @enderror
            </span>
        </div>  
        <div class="mb-3">
            <label for="image" class="form-label">please insert image here</label>
            <input class="form-control" type="file" id="image" name="image">
          <span class="text-danger">
            @error('image')
              {{ $message }}
            @enderror
          </span>
          </div>
        <button class="btn btn-primary">Create</button>
      </form>
  </div>
@endsection