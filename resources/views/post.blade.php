@extends('/layouts/main')

@section('main-content')
<div class="container mt-5">
    <form>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">please insert image here</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
@endsection