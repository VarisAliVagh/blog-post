<div class="business-view-container py-5 container d-flex justify-content-center">
    @php $post = $post->toarray() @endphp
    <div class="row">
        <div class="col-md-6 d-flex align-items-center px-3">
            <img src="{{ asset('/storage') . '/' . $post['imagePath'] }}" alt="" class="businessImg">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center px-3">
            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}</p>
            @php
                $newdate = date('Y/d/m H:i', strtotime($post['created_at']));
                $newdate = $newdate . ':00';
            @endphp
            <span>{{ $newdate }}</span>
            <br>
            <span class="badge text-bg-info w-25">{{ $post['category'] }}</span>
        </div>
    </div>
</div>
