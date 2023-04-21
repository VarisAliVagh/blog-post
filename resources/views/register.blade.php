@extends('/layouts/main')
@section('main-content')
    <div class="register-container container">
        <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <x-Label for="first-name" class="form-label" label="First Name" />
                <x-Input type="text" class="form-control" id="first-name" name="first-name" />
            </div>
            <div class="mb-3">
                <x-Label for="last-name" class="form-label" label="Last Name" />
                <x-Input type="text" class="form-control" id="last-name" name="last-name" />
            </div>
            <div class="mb-3">
                <x-Label for="email" class="form-label" label="Email Address" />
                <x-Input type="email" class="form-control" id="email" name="email" />
            </div>
            <div class="mb-3">
                <x-Label for="password" class="form-label" label="Password" />
                <x-Input type="password" class="form-control" id="password" name="password" />
            </div>
            <button class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
