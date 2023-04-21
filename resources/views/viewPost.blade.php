@extends('/layouts/main')
@section('main-content')
    <div class="view-post-container container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-img-title">
                    <div class="edit-post position-relative">
                        <div class="edit-post-overlay">
                            <a href="/viewEdit/{{ $postsArray['posts']['id'] }}" class="btn btn-success edit-post-btn">Edit
                                Post</a>
                            <a href="/delete/{{ $postsArray['posts']['id'] }}" class="btn btn-primary">Delete</a>
                        </div>
                        <img class="view-post-img"
                            src="{{ asset('storage/') }}/{{ $postsArray['posts']['imagePath'] ?? '' }}" alt="">
                    </div>
                    <div class="blog-title">
                        <h1 class="text-center">{{ $postsArray['posts']['title'] ?? '' }}</h1>
                    </div>
                </div>
                <div class="blog-content mt-3">
                    <p class="text-center">{{ $postsArray['posts']['content'] ?? '' }}</p>
                </div>
                <div class="blog-comment">
                    <p class="text-center">{{ $postsArray['posts']['comment'] ?? '' }}</p>
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
        @if (sizeOf($postsArray['commentRecord']) > 0)
            <div class="comment-record">
                <h3>Your Comment</h3>
                @foreach ($postsArray['commentRecord'] as $rec)
                    <div class="d-flex bg-light col-md-8 p-3 mb-3 align-items-center">
                        <div class="me-3">
                            @if ($rec['profilePath'])
                                <img src="/storage/{{ $rec['profilePath'] }}" alt="" height="50" width="50">
                            @else
                                <i class="h1 fa-solid fa-user-secret"></i>
                            @endif
                        </div>
                        <div class="d-flex flex-column">
                            <span>{{ $rec['name'] }}</span>
                            <span>{{ $rec['created_at'] }}</span>
                            <span>{{ $rec['comment'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="col-md-8 mt-5 mb-3">
            <h3 class="text-center">LEAVE A COMMENT</h3>
            <form action="/view/{{ $postsArray['posts']['id'] ?? '' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <x-TextArea class="form-control" id="comment" rows="3" placeholder="Your comment"
                        name="comment" />
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <x-Input type="text" class="form-control" id="name" name="name" placeholder="*name" />
                    </div>
                    <div class="mb-3 col-md-4">
                        <x-Input type="email" class="form-control" id="email" placeholder="*email" name="email" />
                    </div>
                    <div class="mb-3 col-md-4">
                        <x-Input type="text" class="form-control" id="website" placeholder="Website" name="website" />
                    </div>
                    <div>
                        <div class="mb-3">
                            <x-Label for="profile " class="form-label" label="Upload profile here" />
                            <x-Input class="form-control" type="file" id="profile" name="profile" />
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
        <div>
            <a href="/" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
