@extends('/layouts/main')

@section('main-content')
<div class="container mt-5">
  <form action="/login" method="post">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      <span class="email">
        @error('last-name')
          {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
      <span class="text-danger">
        @error('password')
          {{ $message }}
        @enderror
      </span>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection
  