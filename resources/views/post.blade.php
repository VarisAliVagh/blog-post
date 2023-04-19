@extends('/layouts/main')

@section('main-content')
<div class="create-post-container container">
  <form action="{{ empty($post) ? "/post" : "/post/update/".$post['id']}}" method="post" enctype="multipart/form-data">
    @csrf
    <x-formInput for="title" type="text" name="title" id="title" value='' label="Title" />
    <x-TextArea for="content" name="content" id="content" label="Content" cols="30" rows="10" />
    <x-formInput for="category" type="file" name="category" id="category" value='' label="Please insert image here" />
    <x-formInput for="category" type="file" name="category" id="category" value='' label="Please insert image here" />
    <x-Select name="category" optValue="varis" optAttrValue="varis" />
  </form>
</div>
@endsection