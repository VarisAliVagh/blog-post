@php
    $path = $_SERVER['REQUEST_URI'];
@endphp
<div class="row">
    @foreach ($post as $p)
        <div class="card col-md-4 business-card">
            <img src="{{ asset('/storage') . '/' . $p['imagePath'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $p['title'] }}</h5>
                <a href="{{ $path }}/view/{{ $p['id'] }}" class="btn btn-primary">View</a>
            </div>
        </div>
    @endforeach
</div>
