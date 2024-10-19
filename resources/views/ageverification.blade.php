@extends('components.layout')

@section('title', 'Age Verification')

@section('content')
<div class="form-container">
    <h2>This is an Age Restricted Page</h2>

    {{-- Display error message if present in the session --}}
    @if (session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <form action="/ageverification" method="POST">
        @csrf 

        <label for="age">Please Enter your age:</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
