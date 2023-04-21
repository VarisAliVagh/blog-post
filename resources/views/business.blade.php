@extends('/layouts/main')
@section('main-content')
    <div class="business-container container py-5">
        <x-Card :post="$post" />
    </div>
@endsection
