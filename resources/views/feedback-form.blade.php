@extends('layouts.app')

@section('content')
<h2>Feedback Form</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/feedback/send" method="POST">
    @csrf
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="comment">Commenst:</label>
    <textarea name="comment" id="comment" required></textarea>
    <p>Let us know what you think of our website</p>

    <button type="submit">Submit</button>
</form>
@endsection