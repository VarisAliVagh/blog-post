@extends('/layouts/main')
@section('main-content')
<div class="create-post-container container">
  <form action="/post" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <x-Label for="title" id="titleLabel" class="titleLabel" label="Title" />
      <x-Input type="text" name="title" id="title" class="title" />
    </div>
    <div class="mb-3">
      <x-Label for="content" id="contentLabel" class="contentLabel" label="Content" />
      <x-TextArea name="content" id="content" class="content" cols="30" rows="10" />
    </div>
    <div class="mb-3">
      <x-Label for="postImg" id="postImgLabel" class="postImgLabel" label="Please insert image here" />
      <x-Input type="file" name="postImg" id="postImg" class="postImg" />
    </div>
    <div class="mb-3">
      <x-select name="category" id="category" class="category" :option="$selectOptions"/>
    </div>
    <div>
      <button class="btn btn-primary">Create</button>
    </div>
  </form>
</div>
@endsection