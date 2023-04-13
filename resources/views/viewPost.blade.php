@extends('/layouts/main')

@section('main-content')
{{-- @dd($findRecord) --}}
<div class="container">
    <div class="blog-title mt-5">
        <h1 class="text-center">{{ $findRecord['title'] }}</h1>
    </div>
    <div class="blog-img text-center">
        <img class="view-post-img" src="{{asset('storage/')}}/{{$findRecord['imagePath']}}" alt="">
    </div>
    <div class="blog-content mt-3">
        <p class="text-center">{{ $findRecord['content'] }}</p>
    </div>
    <div class="blog-comment">
        <p class="text-center">{{ $findRecord['comment'] }}</p>
    </div>
    <div>
        <a href="/" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection