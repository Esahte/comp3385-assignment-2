@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-white bg-success mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center">Success!</h2>
                        <p class="card-text text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm3.97-9.97L6.5 10.5l-2-2L4 9l2.5 2.5L12 7l-.03-.97z"/>
                            </svg>
                        </p>
                        <p class="card-text text-center">Thank you for your feedback. We will review your feedback and get back to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
