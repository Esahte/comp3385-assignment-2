@extends('layouts.app');

@section('content')
    <h2>Feedback Form</h2>
    <form action="{{ url('/feedback') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="comment">Comments:</label>
            <textarea id="comment" name="comment" class="form-control"></textarea>
        </div>
        <p>Let us know what you think of our website</p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
