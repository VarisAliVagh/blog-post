@extends('/layouts/main')

{{-- @dd($posts) --}}


@section('main-content')
<div class="show-post-container">
    @if(empty($posts))
    <div class="empty-data-container">
      <h3>No post found</h3>
    </div>
    @else
    <section class="all-categories-container container mt-5 mb-5">
      @foreach($posts as $post)
        <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black mb-2">
          <div class="card me-2" style="width: 18rem;">
            <div class="card-img">
              <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
              <div class="overlay"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $post['title'] }}</h5>
            </div>
          </div>
        </a>
      @endforeach
    </section>

    @foreach($posts as $post)
    @if($post['category'] == 'business')
    <section class="py-5 business mb-5">
      @foreach($posts as $post)
      @if($post['category'] == 'business')
      <div class="container">
        <h1 class="text-center">Business</h1>
        <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
          <div class="card me-2" style="width: 18rem;">
            <div class="card-img">
              <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
              <div class="overlay"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $post['title'] }}</h5>
            </div>
          </div>
        </a>
      </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach
    
    @foreach($posts as $post)
    @if($post['category'] == 'health')
    <section class="py-5 health mb-5">
      @foreach($posts as $post)
        @if($post['category'] == 'health')
        <div class="container">
          <h1 class="text-center">health</h1>
          <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
            <div class="card me-2" style="width: 18rem;">
              <div class="card-img">
                <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
                <div class="overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach

    @foreach($posts as $post)
    @if($post['category'] == 'lifestyle')
    <section class="py-5 lifestyle mb-5">
      @foreach($posts as $post)
        @if($post['category'] == 'lifestyle')
        <div class="container">
          <h1 class="text-center">lifestyle</h1>
          <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
            <div class="card me-2" style="width: 18rem;">
              <div class="card-img">
                <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
                <div class="overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach

    @foreach($posts as $post)
    @if($post['category'] == 'politics')
    <section class="py-5 politics mb-5">
      @foreach($posts as $post)
        @if($post['category'] == 'politics')
        <div class="container">
          <h1 class="text-center">politics</h1>
          <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
            <div class="card me-2" style="width: 18rem;">
              <div class="card-img">
                <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
                <div class="overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach

    @foreach($posts as $post)
    @if($post['category'] == 'sci-tech')
    <section class="py-5 sci-tech mb-5">
      @foreach($posts as $post)
        @if($post['category'] == 'sci-tech')
        <div class="container">
          <h1 class="text-center">sci-tech</h1>
          <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
            <div class="card me-2" style="width: 18rem;">
              <div class="card-img">
                <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
                <div class="overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach

    @foreach($posts as $post)
    @if($post['category'] == 'sports')
    <section class="py-5 sports">
      @foreach($posts as $post)
        @if($post['category'] == 'sports')
        <div class="container">
          <h1 class="text-center">sports</h1>
          <a href="/viewPost/{{$post['id']}}" class="text-decoration-none text-black">
            <div class="card me-2" style="width: 18rem;">
              <div class="card-img">
                <img src="{{asset('storage/')}}/{{$post['imagePath']}}" class="card-img-top" alt="...">
                <div class="overlay"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endif  
      @endforeach
    </section>
    @endif
    @endforeach
    
    @endif
</div>
{{-- <div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Comment</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($arr as $post)
                <tr>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['content'] }}</td>
                    <td>{{ $post['comment'] }}</td>
                    <td class="post-img"><img src="{{asset('storage/')}}/{{$post['imagePath']}}" alt=""></td>
                    <td>
                      <a href="/viewPost/{{$post['id']}}" class="me-1"><i class="fa-solid fa-eye"></i></a>
                      <a href="/post/{{$post['id']}}" class="me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="/delete/{{$post['id']}}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>
</div>     --}}
@endsection