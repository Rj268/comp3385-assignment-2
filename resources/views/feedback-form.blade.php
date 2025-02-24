@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Feedback Form</h2>
    <form action="/feedback/send" method="POST" class="card p-4 shadow">
        @csrf
        <div class="mb-3">
            <label for="fullname">Full Name <span class="text-danger">(Required)</span></label>
            <input type="text" name="name" class="form-control w-100" required>
        </div>
        
        <div class="mb-3">
            <label for="email">Email <span class="text-danger">(Required)</span></label>
            <input type="email"  name="email" class="form-control w-100" required>
        </div>
        
        <div>
            <label for="comment">Comments <span class="text-danger">(Required)</span></label>
            <textarea name="comment" class="form-control w-100" rows="4" required></textarea>
            <p class="text-muted">Let us know what you think of our website</p>
        </div>
        
        <button type="submit" class="btn btn-primary btn-lg w-auto">Submit</button>
    </form>
</div>
@endsection