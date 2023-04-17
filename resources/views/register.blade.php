@extends('/layouts/main')

@section('main-content')
<div class="register-container container">
  <form action="/register" method="post">
    @csrf
    <div class="mb-3">
      <label for="first-name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first-name" name="first-name">
      <span class="text-danger">
        @error('first-name')
          {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="last-name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last-name" name="last-name">
      <span class="text-danger">
        @error('last-name')
          {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email">
      <span class="text-danger">
        @error('email')
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
    <button class="btn btn-primary">Register</button>
  </form>
</div>
@endsection