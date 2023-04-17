@extends('/layouts/main')

@section('main-content')

<div class="view-post-container container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="blog-img-title">
                <img class="view-post-img" src="{{asset('storage/')}}/{{$findRecord['imagePath'] ?? ''}}" alt="">
                <div class="blog-title">
                    <h1 class="text-center">{{ $findRecord['title'] ?? '' }}</h1>
                </div>
            </div>
            <div class="blog-content mt-3">
                <p class="text-center">{{ $findRecord['content'] ?? '' }}</p>
            </div>
            <div class="blog-comment">
                <p class="text-center">{{ $findRecord['comment'] ?? '' }}</p>
            </div>
        </div>
        <aside class="col-md-4 border p-3">
            <ul class="follow-us list-unstyled border p-2">
                <li class="ps-2"><span>FOLLOW US</span></li>
            </ul>
            <ul class="social-links list-unstyled">
                <li class="bg-light mb-3 p-3">
                    <a href="" class="d-flex justify-content-between text-decoration-none text-dark">
                        <div>
                            <i class="fa-brands fa-facebook-f text-dark"></i>
                            <span>102.9k</span>
                            <span>Fans</span>
                        </div>
                        <div>
                            <span>Like</span>
                        </div>
                    </a>
                </li>
                <li class="bg-light mb-3 p-3">
                    <a href="" class="d-flex justify-content-between text-decoration-none text-dark">
                        <div>
                            <i class="fa-brands fa-twitter text-dark"></i>
                            <span>292k</span>
                            <span>Followers</span>
                        </div>
                        <div>
                            <span>Follow</span>
                        </div>
                    </a>
                </li>
                <li class="bg-light mb-3 p-3">
                    <a href="" class="d-flex justify-content-between text-decoration-none text-dark">
                        <div>
                            <i class="fa-brands fa-youtube text-dark"></i>
                            <span>300k</span>
                            <span>Subscriber</span>
                        </div>
                        <div>
                            <span>Subscribe</span>
                        </div>
                    </a>
                </li>
                <li class="bg-light mb-3 p-3">
                    <a href="" class="d-flex justify-content-between text-decoration-none text-dark">
                        <div>
                            <i class="fa-brands fa-instagram text-dark"></i>
                            <span>1M</span>
                            <span>Followers</span>
                        </div>
                        <div>
                            <span>Followers</span>
                        </div>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-8 mt-5 mb-3">
        <h3 class="text-center">LEAVE A COMMENT</h3>
        <form action="">
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your comment"></textarea>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="mb-3 col-md-4">
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="mb-3 col-md-4">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
    <div>
        <a href="/" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection