@extends('principal')

@section('menu')
    <div class="container">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endsection
