@extends('/layouts/main')
@section('main-content')
<div class="login-container container position-relative">
  {!! $loginError ?? '' !!}
  <form action="/login" method="post">
    @csrf
    <div class="mb-3">
      <x-Label for="email" class="form-label" label="Email Address" />
      <x-Input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" />
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <x-Label for="password" class="form-label" label="Password" />
      <x-Input type="password" class="form-control" id="password" name="password" />
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection
  