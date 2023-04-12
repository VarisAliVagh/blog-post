@extends('/layouts/main')
@section('main-content')
<div class="container mt-5">
    <form>
      <div class="mb-3">
        <label for="first-name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first-name" name="first-name">
      </div>
      <div class="mb-3">
        <label for="last-name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last-name" name="last-name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
@endsection