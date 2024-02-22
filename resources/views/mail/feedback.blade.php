@extends('layouts.email')

@section('content')
    <p>{{ $name }} has sent feedback about your website. Bellow are the comments left by</p>
    <p>{{ $comment }}</p>
@endsection
