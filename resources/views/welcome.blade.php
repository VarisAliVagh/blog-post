@extends('/layouts/main')

@section('main-content')
<div class="container mt-5">
    <h3 class="text-gray text-decoration-underline text-secondary">Blog List</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Comment</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['content'] }}</td>
                    <td>{{ $post['comment'] }}</td>
                    <td class="post-img"><img src="{{asset('storage/')}}/{{$post['imagePath']}}" alt=""></td>
                </tr>
          @endforeach
        </tbody>
      </table>
</div>    
@endsection
