@extends('layouts.app')

@section('content')
<div class="back-link">
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
</div>
<div class="error-container">
    <i class="pe-7s-way text-success big-icon"></i>
    <h1>404</h1>
    <strong>Page Not Found</strong>
    <p>
        Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.

    </p>
    <a href="{{ route('dashboard') }}" class="btn btn-xs btn-success">Go back to dashboard</a>
</div>
@endsection