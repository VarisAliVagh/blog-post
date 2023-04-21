@extends('/layouts/main')
@section('main-content')

    <div class="show-post-container">

        @if (sizeOf($posts['latestPost']) == 0)
            <div class="empty-data-container">
                <h3>No post found</h3>
            </div>
        @else
            <section class="all-categories-container container mt-5 mb-5">
                @foreach ($posts['latestPost'] as $post)
                    <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black mb-2">
                        <div class="card me-2" style="width: 18rem;">
                            <div class="card-img">
                                <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}" class="card-img-top"
                                    alt="...">
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
            @foreach ($posts['business'] as $post)
                @if ($post['category'] == 'business')
                    @php $business = true @endphp
                @endif
            @endforeach
            @if ($business)
                <section class="py-5 business-section mb-5">
                    <h1 class="text-center">Business</h1>
                    <div class="container d-flex">
                        @foreach ($posts['business'] as $post)
                            @if ($post['category'] == 'business')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}" class="card-img-top"
                                                alt="...">
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
            @foreach ($posts['health'] as $post)
                @if ($post['category'] == 'health')
                    @php $health = true @endphp
                @endif
            @endforeach
            @if ($health)
                <section class="py-5 health-section mb-5">
                    <h1 class="text-center">health</h1>
                    <div class="container d-flex">
                        @foreach ($posts['health'] as $post)
                            @if ($post['category'] == 'health')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}"
                                                class="card-img-top" alt="...">
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
            @foreach ($posts['lifestyle'] as $post)
                @if ($post['category'] == 'lifestyle')
                    @php $lifestyle = true @endphp
                @endif
            @endforeach
            @if ($lifestyle)
                <section class="py-5 lifestyle-section mb-5">
                    <h1 class="text-center">Lifestyle</h1>
                    <div class="container d-flex">
                        @foreach ($posts['lifestyle'] as $post)
                            @if ($post['category'] == 'lifestyle')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}"
                                                class="card-img-top" alt="...">
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
            @foreach ($posts['politics'] as $post)
                @if ($post['category'] == 'politics')
                    @php $politics = true @endphp
                @endif
            @endforeach
            @if ($politics)
                <section class="py-5 politics-section mb-5">
                    <h1 class="text-center">Politics</h1>
                    <div class="container d-flex">
                        @foreach ($posts['politics'] as $post)
                            @if ($post['category'] == 'politics')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}"
                                                class="card-img-top" alt="...">
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
            @foreach ($posts['sci-tech'] as $post)
                @if ($post['category'] == 'sci-tech')
                    @php $scitech = true @endphp
                @endif
            @endforeach
            @if ($scitech)
                <section class="py-5 sci-tech-section mb-5">
                    <h1 class="text-center">Sci-tech</h1>
                    <div class="container d-flex">
                        @foreach ($posts['sci-tech'] as $post)
                            @if ($post['category'] == 'sci-tech')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}"
                                                class="card-img-top" alt="...">
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
            @foreach ($posts['sports'] as $post)
                @if ($post['category'] == 'sports')
                    @php $sports = true @endphp
                @endif
            @endforeach
            @if ($sports)
                <section class="py-5 sports-section mb-5">
                    <h1 class="text-center">Sports</h1>
                    <div class="container d-flex">
                        @foreach ($posts['sports'] as $post)
                            @if ($post['category'] == 'sports')
                                <a href="/view/{{ $post['id'] }}" class="text-decoration-none text-black">
                                    <div class="card me-2" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="{{ asset('storage/') }}/{{ $post['imagePath'] }}"
                                                class="card-img-top" alt="...">
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
@endsection
