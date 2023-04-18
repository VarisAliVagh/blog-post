@extends('/layouts/main')


{{-- @foreach($catArr as $cat)
  {{ pre($cat->toarray()) }} 
@endforeach
{{ exit }} --}}
{{-- @dd($posts['business']) --}}
{{-- @dd($posts) --}}

@section('main-content')
<div class="show-post-container">
    @if(empty($posts))
    <div class="empty-data-container">
      <h3>No post found</h3>
    </div>
    @else
    <section class="all-categories-container container mt-5 mb-5">
      @foreach($posts['latestPost'] as $post)
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


  @php $business = false  @endphp
    @foreach($posts['business'] as $post)
    @if($post['category'] == 'business')
        @php $business = true @endphp
      @endif 
    @endforeach
    @if($business)
    <section class="py-5 business-section mb-5">
      <h1 class="text-center">Business</h1>
      <div class="container d-flex">
      @foreach($posts['business'] as $post)
        @if($post['category'] == 'business')
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
          @endif
          @endforeach
        </div>
    </section>
    @endif
    
     @php $health = false @endphp
    @foreach($posts['health'] as $post)
      @if($post['category'] == 'health')
        @php $health = true @endphp
      @endif 
    @endforeach
      @if($health)
      <section class="py-5 health-section mb-5">
        <h1 class="text-center">health</h1>
        <div class="container d-flex">
        @foreach($posts['health'] as $post)
          @if($post['category'] == 'health')
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
            @endif  
            @endforeach
          </div>
      </section>
    @endif

    @php $lifestyle = false @endphp
    @foreach($posts['lifestyle'] as $post)
      @if($post['category'] == 'lifestyle')
        @php $lifestyle = true @endphp
      @endif 
    @endforeach
      @if($lifestyle)
    <section class="py-5 lifestyle-section mb-5">
      <h1 class="text-center">Lifestyle</h1>
      <div class="container d-flex">
      @foreach($posts['lifestyle'] as $post)
        @if($post['category'] == 'lifestyle')
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
          @endif  
          @endforeach
        </div>
    </section>
    @endif

     @php $politics = false @endphp
    @foreach($posts['politics'] as $post)
      @if($post['category'] == 'politics')
        @php $politics = true @endphp
      @endif 
    @endforeach
      @if($politics)
    <section class="py-5 politics-section mb-5">
      <h1 class="text-center">Politics</h1>
      <div class="container d-flex">
      @foreach($posts['politics'] as $post)
        @if($post['category'] == 'politics')
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
          @endif  
          @endforeach
        </div>
    </section>
    @endif


    @php $scitech = false @endphp
    @foreach($posts['sciTech'] as $post)
      @if($post['category'] == 'sci-tech')
        @php $scitech = true @endphp
      @endif 
    @endforeach
      @if($scitech)
    <section class="py-5 sci-tech-section mb-5">
      <h1 class="text-center">Sci-tech</h1>
      <div class="container d-flex">
      @foreach($posts['sciTech'] as $post)
        @if($post['category'] == 'sci-tech')
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
          @endif  
          @endforeach
        </div>
    </section>
    @endif

    @php $sports = false @endphp
    @foreach($posts['sports'] as $post)
      @if($post['category'] == 'sports')
        @php $sports = true @endphp
      @endif 
    @endforeach
      @if($sports)
    <section class="py-5 sports-section mb-5">
      <h1 class="text-center">Sports</h1>
      <div class="container d-flex">
      @foreach($posts['sports'] as $post)
        @if($post['category'] == 'sports')
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
          @endif  
          @endforeach
        </div>
    </section>
    @endif
    
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